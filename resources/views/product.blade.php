<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        @foreach ($data as $produk)
        <tr>
            <td>{{ $produk->id }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
