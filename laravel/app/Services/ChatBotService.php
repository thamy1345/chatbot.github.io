<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ChatBotService
{
    private string $baseUrl;
    private string $apiKey;
    private int $timeoutSeconds;

    public function __construct()
    {
        $this->baseUrl = config('chatbot.base_url');
        $this->apiKey = (string) config('chatbot.api_key');
        $this->timeoutSeconds = (int) config('chatbot.timeout', 10);
    }

    public function getHealth(): array
    {
        $response = Http::timeout($this->timeoutSeconds)
            ->withToken($this->apiKey)
            ->get(rtrim($this->baseUrl, '/').'/health');

        return [
            'ok' => $response->successful(),
            'status' => $response->status(),
            'body' => $response->json() ?? $response->body(),
        ];
    }

    public function getRecentConversations(int $limit = 20): array
    {
        $response = Http::timeout($this->timeoutSeconds)
            ->withToken($this->apiKey)
            ->get(rtrim($this->baseUrl, '/').'/conversations', [
                'limit' => $limit,
            ]);

        return $response->json() ?? [];
    }

    public function getStats(): array
    {
        $response = Http::timeout($this->timeoutSeconds)
            ->withToken($this->apiKey)
            ->get(rtrim($this->baseUrl, '/').'/stats');

        return $response->json() ?? [];
    }
}
