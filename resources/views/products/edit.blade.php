@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nama Produk:</label>
        <input type="text" name="name" value="{{ $product->name }}" required><br>

        <label>Deskripsi:</label>
        <textarea name="description">{{ $product->description }}</textarea><br>

        <label>Harga:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required><br>

        <label>Stok:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('products.index') }}">Kembali</a>
@endsection
