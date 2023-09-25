<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id" class="block text-gray-700 font-bold">ID</label>
                <input type="text" name="id" id="id" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold">Judul</label>
                <input type="text" name="judul" id="judul" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-gray-700 font-bold">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 font-bold">Harga</label>
                <input type="text" name="harga" id="harga" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="tgl_terbit" class="block text-gray-700 font-bold">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" id="tgl_terbit" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                <a href="/buku" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>