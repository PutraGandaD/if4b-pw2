@extends('layout.main')

@section('title', 'Tambah Fakultas')
@section('subtitle', 'Fakultas')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Fakultas</h4>
            <p class="card-description">
              Formulir tambah Fakultas
            </p>
            <form class="forms-sample" action="{{ route('fakultas.store')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama_fakultas">Nama Fakultas</label>
                <input type="text" class="form-control" name="nama_fakultas" placeholder="Nama Fakultas">
                @error('nama_fakultas')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama_dekan">Nama Dekan</label>
                <input type="text" class="form-control" name="nama_dekan" placeholder="Nama dekan">
                @error('nama_dekan')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama_wakil_dekan">Nama Wakil Dekan</label>
                <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Nama Wakil dekan">
                @error('nama_wakil_dekan')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary me-2">Simpan</button>
              <a href="{{ route('fakultas.index')}}" class="btn btn-light">Batal</button>
            </form>
          </div>
        </div>
      </div>
</div>

@endsection
