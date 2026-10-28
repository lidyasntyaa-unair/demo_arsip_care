<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        // Nomor WhatsApp tujuan (Format: 628xxxxxxxxxx tanpa + atau 0)
        $waNumber = env('CONSERVATOR_WA_NUMBER', '62895640163050');

        return view('konsultasi_konservator.konsultasi_konservator', compact('waNumber'));
    }
}
