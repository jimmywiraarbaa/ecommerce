<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nama Produk">
        <br>
        <input type="number" name="price" placeholder="Harga Produk">
        <br>
        <input type="text" name="description" placeholder="Deskripsi Produk">
        <br>
        <input type="number" name="stock" placeholder="Stok Produk">
        <br>
        <input type="file" name="image">
        <br>
        <button type="submit">Tambah Produk</button>
    </form>
</body>

</html>