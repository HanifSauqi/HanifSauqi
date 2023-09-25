<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Gaya CSS untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Gaya CSS untuk baris header (baris pertama) */
        tr:first-child th {
            background-color: #3498db; /* Warna latar belakang biru */
            color: white; /* Warna teks putih */
        }

        /* Gaya CSS untuk tombol "Hapus" */
        .button {
            background-color: #4CAF50; /* Warna latar belakang tombol (misalnya, hijau) */
            color: white; /* Warna teks tombol (misalnya, putih) */
            border: none; /* Tanpa border */
            padding: 10px 20px; /* Padding */
            text-align: center; /* Pusatkan teks */
            text-decoration: none; /* Tanpa dekorasi teks */
            display: inline-block; /* Tampilan inline */
            font-size: 16px; /* Ukuran teks */
            margin: 4px 2px; /* Margin */
            cursor: pointer; /* Kursor */
            border-radius: 4px; /* Radius sudut */
        }

        .button:hover {
            background-color: #45a049; /* Warna latar belakang saat hover (misalnya, hijau tua) */
        }

        /* Gaya CSS khusus untuk tombol "Hapus" */
        .button.delete {
            background-color: #e74c3c; /* Warna merah */
        }

        .button.delete:hover {
            background-color: #c0392b; /* Warna merah tua saat hover */
        }
    </style>
</head>
<body>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>    
            @foreach($data_buku as $b)
            <tr>
                <td>{{ $b->id}}</td>
                <td>{{ $b->judul}}</td>
                <td>{{ $b->penulis}}</td>
                <td>{{ 'Rp'.number_format($b->harga, 2, ',', '.') }}</td>
                <td>{{\Carbon\Carbon::parse($b->tgl_terbit)->format('D/m/Y')}}</td>
                <td>  
                    <form action="{{ route('buku.edit', $b->id) }}">
                        <button class="button" onclick="return confirm('Yakin mau diedit?')">Edit</button>
                    </form>

                    <form action="{{ route('buku.destroy', $b->id) }}" method="post">
                        @csrf
                        <button class="button delete" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
    <p><a href="{{ route('buku.create')}}">
        <button class="button">Tambah Buku</button>
    </a></p>
    <p class="text-Lg">Jumlah data buku : {{$jumlah_buku}}</p>
    <p vlass="text-lg">Jumlah harga semua buku adalah : Rp {{number_format($total_harga, 2)}}</p>
</body>
</html>