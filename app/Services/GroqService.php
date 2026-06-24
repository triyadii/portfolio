<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GroqService
{
    protected string $apiKey;
    protected string $model;
    protected string $baseUrl = 'https://api.groq.com/openai/v1/chat/completions';

    public function __construct()
    {
        $this->apiKey = config('services.groq.key');
        $this->model = config('services.groq.model');
    }

    public function chat(array $messages): string
    {
        $response = Http::withToken($this->apiKey)
            ->timeout(30)
            ->post($this->baseUrl, [
                'model' => $this->model,
                'messages' => $messages,
                'temperature' => 0.7,
                'max_tokens' => 1024,
            ]);

        if ($response->failed()) {
            return 'Maaf, terjadi kesalahan saat menghubungi AI.';
        }

        return $response->json('choices.0.message.content')
            ?? 'Maaf, tidak ada respon dari AI.';
    }
}