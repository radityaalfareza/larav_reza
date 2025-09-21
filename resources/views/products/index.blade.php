<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->nama_produk }} - Rp{{ $product->harga }}</li>
        @endforeach
    </ul>
</body>
</html>
