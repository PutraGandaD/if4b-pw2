@extends('layout.main')

@section('title', 'Halaman Fakultas')
@section('subtitle', 'Berikut beberapa Fakultas di MDP')
@section('content')

<table class="table table-hover table-dark table-stripped">
    <thead>
        <tr>
            <th>Nama Fakultas</th>
            <th>Nama Dekan</th>
            <th>Nama Wakil Dekan</th>
            <th>Prodi</th>
            <th>Created At</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($fakultas as $item)
        <tr>
            <td>{{ $item-> nama_fakultas }}</td>
            <td>{{ $item-> nama_dekan }}</td>
            <td>{{ $item-> nama_wakil_dekan }}</td>
            <td>
                @foreach ($item->prodi as $prodi )
                 {{$prodi -> nama_prodi }}
                @endforeach
            </td>
            <td>{{$item -> created_at }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection
