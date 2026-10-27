<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KonservatorController extends Controller
{
    public function index()
    {
        $konservators = User::where('role', 'konservator')
            ->where('status', 'Aktif')
            ->latest()
            ->get();

        return view('konservator.index', compact('konservators'));
    }
}
