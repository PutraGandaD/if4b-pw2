@extends('layout.main')
@section('title', 'Mahasiswa')
{{-- @section('subtitle', 'Mahasiswa') --}}

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
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>

                    @if (count($mahasiswas) != 0)
                        <button class="btn btn-danger" id="multi-delete" data-route="{{ route('mhs-multi-delete') }}">Delete
                            All Selected</button>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="posts-table">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="check-all"></th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kota Lahir</th>
                                    <th>Program Studi</th>
                                    <th>Created At</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswas as $item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="check" value="{{ $item->id }}"></td>
                                        <td> {{ $item->npm }} </td>
                                        <td> {{ $item->nama }} </td>
                                        <td> <img
                                                src="{{ $item->foto ? asset('storage/' . $item->foto) : asset('images/faces/face5.jpg') }}">
                                        </td>
                                        <td> {{ $item->tanggal_lahir }} </td>
                                        <td> {{ $item->kota_lahir }} </td>
                                        <td> {{ $item->prodi->nama_prodi }}</td>
                                        <td> {{ $item->created_at }} </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{route('mahasiswa.edit', $item->id)}}"><button class="btn btn-success btn-sm">Edit</button></a>
                                                <form method="post" class="delete-form"
                                                    data-route="{{ route('mahasiswa.destroy', $item->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
