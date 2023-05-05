<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        $prodi = Prodi::all();
        //dd($prodi);
        return view('prodi.index')->with ('prodis',$prodi);
    }

    public function create() {
        // $fakultas = Fakultas::all();
        $fakultas = Fakultas::orderBy('nama_fakultas', 'ASC')->get();
        return view('prodi.create') -> with('fakultas', $fakultas);
    }

    public function store(Request $request) {
        // validasi data
        $validasi = $request->validate([
            'nama_prodi' => 'required|unique:prodi',
            'fakultas_id' => 'required'
        ]);

        // buat objek dari model Prodi
        $prodi = new Prodi();
        $prodi -> nama_prodi = $validasi['nama_prodi'];
        $prodi -> fakultas_id = $validasi['fakultas_id'];
        $prodi->save();

        return redirect()->route('prodi.index')->with('success', "Data program studi ".$validasi['nama_prodi']." berhasil disimpan");
    }


}
