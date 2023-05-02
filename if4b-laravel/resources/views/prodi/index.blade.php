@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Berikut beberapa Fakultas di MDP')
@section('content')
    <table class="table table-hover">
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
        </tbody
        @endforeach

    </table>



@endsection
