<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Project;
use App\Services\GroqService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send(Request $request, GroqService $groq)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
            'history' => 'array',
        ]);

        // System prompt — atur kepribadian bot + sisipkan data dari database
        $messages = [
            [
                'role' => 'system',
                'content' => $this->buildSystemPrompt(),
            ],
        ];

        // Riwayat percakapan (untuk konteks)
        foreach ($request->input('history', []) as $msg) {
            if (in_array($msg['role'] ?? '', ['user', 'assistant'])) {
                $messages[] = [
                    'role' => $msg['role'],
                    'content' => $msg['content'],
                ];
            }
        }

        // Pesan baru dari user
        $messages[] = [
            'role' => 'user',
            'content' => $request->input('message'),
        ];

        $reply = $groq->chat($messages);

        return response()->json([
            'reply' => $reply,
        ]);
    }

    /**
     * Bangun system prompt dengan menyisipkan data jasa & project dari database,
     * sehingga AI menjawab pertanyaan client berdasarkan data nyata.
     */
    private function buildSystemPrompt(): string
    {
        $prompt = "Kamu adalah \"Asisten Dii\", asisten AI di website portfolio Dico Triyadi (Software Engineer / Full Stack Developer). "
            . "Jawab dalam Bahasa Indonesia dengan ramah, jelas, dan sopan. "
            . "Jawab HANYA berdasarkan DATA JASA dan DATA PROJECT di bawah ini. "
            . "Jika client menanyakan harga atau jasa yang tidak ada dalam data, jangan mengarang; "
            . "arahkan mereka untuk menghubungi langsung via WhatsApp (wa.me/6282275849670) atau email (m.dicotriyadi@gmail.com).\n"
            . "FORMAT JAWABAN: Jika menjawab beberapa hal (misal daftar jasa, fitur, atau apa saja yang didapat), "
            . "tampilkan sebagai DAFTAR dengan setiap poin pada baris baru diawali tanda \"- \" (strip dan spasi). "
            . "Jangan menggabungkan banyak poin ke dalam satu paragraf. "
            . "Gunakan teks biasa saja, jangan pakai format markdown seperti ** atau ##.\n\n";

        // Data jasa
        $jasa = Jasa::orderBy('harga')->get();
        if ($jasa->isNotEmpty()) {
            $prompt .= "=== DATA JASA ===\n";
            foreach ($jasa as $j) {
                $harga = 'Rp ' . number_format($j->harga, 0, ',', '.');
                $didapat = trim(preg_replace('/\s*\n\s*/', '; ', $j->yang_didapat));
                $prompt .= "- {$j->nama_jasa}: harga {$harga}, estimasi pengerjaan {$j->lama_pekerjaan}, yang didapat: {$didapat}.";
                if (!empty($j->keterangan)) {
                    $prompt .= " Catatan: " . trim($j->keterangan) . ".";
                }
                $prompt .= "\n";
            }
            $prompt .= "\n";
        } else {
            $prompt .= "=== DATA JASA ===\n(Belum ada data jasa. Arahkan client menghubungi via WhatsApp/email untuk penawaran.)\n\n";
        }

        // Data project
        $projects = Project::latest()->get();
        if ($projects->isNotEmpty()) {
            $prompt .= "=== DATA PROJECT (PORTOFOLIO) ===\n";
            foreach ($projects as $p) {
                $prompt .= "- {$p->namaProject} (teknologi: {$p->technology}): " . trim($p->keterangan);
                if (!empty($p->link)) {
                    $prompt .= " Link: {$p->link}";
                }
                $prompt .= "\n";
            }
        }

        return $prompt;
    }
}