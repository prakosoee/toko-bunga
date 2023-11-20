@extends('layouts.adminlayout')

@section('title', 'Home')

@section('content')
    <h1>Halaman Home</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Bunga</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href=" {{ route('bunga.create') }}
" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Bunga</th>
                                    <th scope="col">Harga</th
                                    <th scope="col">Stok</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bungas as $bunga)
                                    <tr>
                                        <td>{{ $buku->nama }}</td>
                                        <td>{{ $buku->harga }}</td>
                                        <td>{{ $buku->stok }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('bungas.destroy', $buku->id) }}" method="POST">
                                                <a href="{{ route('bungas.edit', $buku->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>@csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
