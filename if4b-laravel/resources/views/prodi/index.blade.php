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
          <h4 class="card-title">Prodi</h4>
          <a href="{{ route('prodi.create')}}" class="btn btn-primary">Tambah</a>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Nama Prodi</th>
                    <th>Fakultas</th>
                    <th>Created At</th>
                </thead>
                @foreach ($prodis as $item )
                <tbody>
                    <td>{{$item -> nama_prodi}}</td>
                    <td>{{$item -> fakultas -> nama_fakultas}}</td>
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
