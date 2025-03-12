@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<h1 class="text-3xl font-bold mb-6">Daftar Produk</h1>

@if($products->isEmpty())
    <p class="text-gray-500">Belum ada produk yang tersedia.</p>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ $product->description }}</p>
                <p class="text-blue-600 font-bold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="text-gray-500">Stok: {{ $product->stock }}</p>

                <div class="mt-4 flex justify-between">
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">Edit</a>
                    <button onclick="confirmDelete({{ $product->id }})" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">Hapus</button>
                </div>
            </div>
        @endforeach
    </div>
@endif

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
    <div class="bg-white p-6 rounded shadow-lg">
        <h2 class="text-lg font-semibold">Yakin ingin menghapus produk ini?</h2>
        <div class="mt-4 flex justify-end">
            <button onclick="closeModal()" class="bg-gray-400 text-white px-4 py-2 rounded">Batal</button>
            <form id="deleteForm" method="POST" class="ml-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        document.getElementById('deleteForm').action = '/products/' + id;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
</script>
@endsection
