@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Berikut beberapa Fakultas di MDP')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
          @endif
          <h4 class="card-title">Mahasiswa</h4>
          <a href="{{ route('mahasiswa.create')}}" class="btn btn-primary">Tambah</a>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Tanggal Lahir</th>
                    <th>Kota Lahir</th>
                    <th>Program Studi</th>
                    <th>Created At</th>
                </thead>
                @foreach ($mahasiswas as $item )
                <tbody>
                    <td>{{$item -> npm}}</td>
                    <td>{{$item -> nama}}</td>
                    <td><img src="{{asset('storage/'.$item->foto)}}" alt=""></td>
                    <td>{{$item -> tanggal_lahir}}</td>
                    <td>{{$item -> kota_lahir}}</td>
                    <td>{{$item -> prodi -> nama_prodi}}</td>
                    <td>{{$item -> created_at}}</td>
                </tbody>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

    <table class="table table-hover">

    </table>
@endsection
