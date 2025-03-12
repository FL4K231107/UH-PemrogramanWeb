@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Nama Produk</label>
            <input type="text" name="name" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block">Harga</label>
            <input type="number" name="price" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block">Stok</label>
            <input type="number" name="stock" class="w-full p-2 border rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
    </form>
</div>
@endsection
