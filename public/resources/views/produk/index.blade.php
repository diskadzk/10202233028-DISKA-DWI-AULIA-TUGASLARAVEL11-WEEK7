<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
        </tr>
        @foreach ($produk as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->stok_produk}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
