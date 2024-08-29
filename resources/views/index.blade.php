@extends('layout')
@section('content')
<title>Home</title>
<div class="container mt-4">
    <div class="header text-center fst-italic">
        <h3>Daftar Product</h3>
        <p>PT. Pemandangan Sejuk Sulawesi</p>
    </div>

    <div>
        <a href="{{ url('addProduct') }}" class="btn btn-primary mb-2">Tambah</a>
    </div>

    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Jenis</th>
                <th scope="col">Update</th>
                <th scope="col">Kadaluasa</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <body>
            @foreach ($Product as $product )
                <tr>
                    <td>{{ $loop->iteration . '.'}}</td>
                    <td>{{ $product->NamaProduct . ' ' }}</td>
                    <td>{{ $product->Jenis }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>{{ $product->Kadaluarsa }}</td>
                    <td>{{ $product->Jumlah }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('editProduct', ['id' => $product->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="deleteProduct/{{ $product->id }}"
                            onclick="return confirm('yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
</div>
