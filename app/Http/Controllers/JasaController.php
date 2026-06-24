<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jasa = Jasa::latest()->paginate(10);
        return view('admin.jasa.index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jasa'      => 'required|string|max:200',
            'harga'          => 'required|integer|min:0',
            'lama_pekerjaan' => 'required|string|max:100',
            'yang_didapat'   => 'required|string',
            'keterangan'     => 'nullable|string',
        ], [
            'nama_jasa.required'      => 'Nama jasa wajib diisi.',
            'harga.required'          => 'Harga wajib diisi.',
            'harga.integer'           => 'Harga harus berupa angka.',
            'lama_pekerjaan.required' => 'Lama pekerjaan wajib diisi.',
            'yang_didapat.required'   => 'Bagian "Yang Didapat" wajib diisi.',
        ]);

        Jasa::create($validated);

        return redirect()->route('jasa.index')
            ->with('success', 'Jasa berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jasa $jasa)
    {
        return view('admin.jasa.edit', compact('jasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jasa $jasa)
    {
        $validated = $request->validate([
            'nama_jasa'      => 'required|string|max:200',
            'harga'          => 'required|integer|min:0',
            'lama_pekerjaan' => 'required|string|max:100',
            'yang_didapat'   => 'required|string',
            'keterangan'     => 'nullable|string',
        ], [
            'nama_jasa.required'      => 'Nama jasa wajib diisi.',
            'harga.required'          => 'Harga wajib diisi.',
            'harga.integer'           => 'Harga harus berupa angka.',
            'lama_pekerjaan.required' => 'Lama pekerjaan wajib diisi.',
            'yang_didapat.required'   => 'Bagian "Yang Didapat" wajib diisi.',
        ]);

        $jasa->update($validated);

        return redirect()->route('jasa.index')
            ->with('success', 'Jasa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jasa $jasa)
    {
        $jasa->delete();

        return redirect()->route('jasa.index')
            ->with('success', 'Jasa berhasil dihapus!');
    }
}
