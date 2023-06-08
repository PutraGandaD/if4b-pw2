@extends('layout.main')

@section('title', 'Tambah Mahasiswa')
@section('subtitle', 'Mahasiswa')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Dashboard</h4>
            <form class="forms-sample" action="{{ route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
              @csrf

            </form>
          </div>
        </div>
      </div>
</div>

@endsection
