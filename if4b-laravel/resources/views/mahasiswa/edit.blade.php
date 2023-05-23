@extends('layout.main')

@section('title', 'Tambah Mahasiswa')
@section('subtitle', 'Mahasiswa')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Mahasiswa</h4>
            <p class="card-description">
              Formulir Edit Mahasiswa
            </p>
            <form class="forms-sample" action="{{ route('mahasiswa.update', $mahasiswa->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" name="npm" placeholder="Nomor Pokok Mahasiswa" value="{{ $mahasiswa->npm }}" disabled>
                @error('npm')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa" value="{{ $mahasiswa->nama }}">
                @error('nama')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $mahasiswa->tanggal_lahir }}">
                @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="kota_lahir">Kota Lahir</label>
                <input type="kota_lahir" class="form-control" name="kota_lahir" placeholder="Kota Lahir" value="{{ $mahasiswa->kota_lahir }}">
                @error('kota_lahir')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="prodi_id">Nama Prodi</label>
                <select name="prodi_id" class="form-control js-example-basic-single">
                    <option value="">Pilih nama Prodi...</option>
                    @foreach ($prodi as $item)
                        <option value="{{ $item['id'] }}">
                            {{ $item['nama_prodi'] }}
                        </option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" name="foto" placeholder="foto" accept="image/*" capture="camera">
                @error('foto')
                   <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary me-2 mt-3">Simpan</button>
              <a href="{{ route('mahasiswa.index')}}" class="btn btn-light mt-3">Batal</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection
