<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index')->with('mahasiswas', $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::orderBy('nama_prodi', 'ASC')->get();
        return view('mahasiswa.create') -> with('prodi', $prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->nama_dekan);

        // validasi data
        $validasi = $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'kota_lahir' => 'required',
            'foto' => 'required|file|image|max:5000',
            'prodi_id' => 'required'
        ]);
        // dd($validasi);

        //
        $ext = $request->foto->getClientOriginalExtension();
        $new_filename = $validasi['npm'].".".$ext;
        $request->foto->storeAs('public', $new_filename);

        // buat objek dari model Fakultas
        $mahasiswa = new Mahasiswa();
        $mahasiswa ->npm = $validasi['npm'];
        $mahasiswa ->nama = $validasi['nama'];
        $mahasiswa ->tanggal_lahir = $validasi['tanggal_lahir'];
        $mahasiswa ->kota_lahir = $validasi['kota_lahir'];
        $mahasiswa ->foto = $new_filename;
        $mahasiswa ->prodi_id = $validasi['prodi_id'];

        $mahasiswa->save(); // save
        return redirect()->route('mahasiswa.index')->with('success', "Data mahasiswa ".$validasi['nama']." berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
