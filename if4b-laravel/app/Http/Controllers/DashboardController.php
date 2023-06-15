<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index() {
        $data['mahasiswa'] = Mahasiswa::all();
        $data['prodi'] = Prodi::all();
        $data['fakultas'] = Fakultas::all();;
        $data['mahasiswaprodi'] = DB::select('SELECT p.nama_prodi, COUNT(*) as jumlah
                                                FROM mahasiswas m
                                                JOIN prodi p ON m.prodi_id = p.id
                                                GROUP BY p.nama_prodi');
        // dd($data['mahasiswaprodi']);
        return view('dashboard', $data);
    }
}
