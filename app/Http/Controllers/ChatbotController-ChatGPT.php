<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('konsultasi_konservator.konsultasi_konservator');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'history' => 'nullable|array'
        ]);

        $userMessage = $request->input('message');
        $rawHistory = $request->input('history', []);

        $apiKey = env('OPENAI_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'success' => false,
                'reply'   => 'OPENAI_API_KEY belum diatur di file .env'
            ], 200);
        }

        // System Instruction Standar Konservator
        $messages = [
            [
                'role' => 'system',
                'content' => 'Anda adalah Asisten Konservator dari Arsip Care. Tugas Anda adalah memberikan saran pertolongan pertama, preservasi, dan restorasi arsip/dokumen fisik sesuai standar ANRI dan ISO 11799 secara profesional, ramah, dan solutif.'
            ]
        ];

        // Format History Chat (Role: user & assistant)
        if (is_array($rawHistory)) {
            foreach ($rawHistory as $msg) {
                if (isset($msg['content']) && isset($msg['role'])) {
                    $role = ($msg['role'] === 'user') ? 'user' : 'assistant';
                    $messages[] = [
                        'role'    => $role,
                        'content' => $msg['content']
                    ];
                }
            }
        }

        // Pesan Terbaru User
        $messages[] = [
            'role'    => 'user',
            'content' => $userMessage
        ];

        try {
            // Request ke Endpoint Resmi OpenAI
            $response = Http::withoutVerifying() // Bypass SSL lokal Laragon
                ->timeout(30)
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type'  => 'application/json',
                ])
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model'       => 'gpt-4o-mini', // Model ChatGPT cepat & hemat
                    'messages'    => $messages,
                    'temperature' => 0.7,
                ]);

            if ($response->successful()) {
                $body = $response->json();
                $replyText = $body['choices'][0]['message']['content'] ?? 'Tidak ada respon dari AI.';

                return response()->json([
                    'success' => true,
                    'reply'   => $replyText
                ]);
            }

            return response()->json([
                'success' => false,
                'reply'   => 'ERR_API: ' . $response->body()
            ], 200);

        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'reply'   => 'ERR_DETAIL: ' . $e->getMessage()
            ], 200);
        }
    }
}
