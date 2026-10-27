<?php

namespace App\Http\Controllers;

use App\Models\MasterView;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MasterViewController extends Controller
{
    public function index(): View
    {
        // Mengambil seluruh rekapitulasi gabungan dari SQL Master View
        $layananMaster = MasterView::latest('tanggal_pengajuan')->get();

        // Query langsung dari SQL View kedua (view_master_konsultasi)
        $konsultasiMaster = DB::table('view_master_konsultasi')
            ->where('status_obrolan', 'Aktif')
            ->get();

        return view('masterview.index', compact('layananMaster', 'konsultasiMaster'));
    }
}
