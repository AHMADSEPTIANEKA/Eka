@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <h1>{{ $product->nama }}</h1>
    <p>Harga: {{ $product->harga }}</p>
    <p>Deskripsi: {{ $product->deskripsi }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali ke Daftar Produk</a>
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit Produk</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus Produk</button>
    </form>
@endsection 