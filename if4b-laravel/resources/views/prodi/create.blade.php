@extends('layout.main')

@section('title', 'Tambah Fakultas')
@section('subtitle', 'Fakultas')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Prodi</h4>
            <p class="card-description">
              Formulir tambah Prodi
            </p>
            <form class="forms-sample" action="{{ route('prodi.store')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama_prodi">Nama Prodi</label>
                <input type="text" class="form-control" name="nama_prodi" placeholder="Nama Program Studi" value="{{ old('nama_prodi') }}">
                @error('nama_prodi')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="fakultas_id">Nama Fakultas</label>
                <select name="fakultas_id" class="form-control js-example-basic-single">
                    <option value="">Pilih nama fakultas...</option>
                    @foreach ($fakultas as $item)
                        <option value="{{ $item['id'] }}">
                            {{ $item['nama_fakultas'] }}
                        </option>
                    @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary me-2 mt-3">Simpan</button>
              <a href="{{ route('prodi.index')}}" class="btn btn-light mt-3">Batal</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection
