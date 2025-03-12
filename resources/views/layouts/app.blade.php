<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD Produk')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="{{ route('products.index') }}" class="font-bold text-xl">Product Manager</a>
            <a href="{{ route('products.create') }}" class="bg-green-500 px-4 py-2 rounded shadow hover:bg-green-600 transition">Tambah Produk</a>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>
