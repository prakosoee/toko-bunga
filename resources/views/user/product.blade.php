@extends('layouts.mainlayout')

@section('title', 'Product')

@section('content')
    <h1>Product</h1>
    <h2>Table Daftar Bunga</h2>
    <div class="my-5">
        <a href="{{ route('bunga.create') }}" class="btn btn-success">Tambah</a>
    </div>
    <table class="table text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
        @foreach ($bungas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->stok }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bunga.destroy', $data->id) }}"
                        method="POST">
                        <a href="{{ route('bunga.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>@csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            {{-- <div class="bunga">
            <h2>{{ $data->nama }}</h2>
            <p><strong>Keterangan:</strong> {{ $data->keterangan }}</p>
            <p><strong>Harga:</strong><i>{{ $data->harga }}</i></p>
            <p><strong>Stok:</strong>{{ $data->stok }}</p>
        </div> --}}
        @endforeach
    </table>
@endsection
