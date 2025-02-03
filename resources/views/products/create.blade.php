@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <h1>Tambah Produk</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Produk:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"></textarea>

        <button type="submit">Simpan Produk</button>
        <a href="{{ url('products') }}">Daftar Produk</a>
    </form>
@endsection 