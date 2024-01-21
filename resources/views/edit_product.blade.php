<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$product->name}}</title>
</head>

<body>
    <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <label for="">Nama</label>
        <br>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        <label for="">Harga</label>
        <br>
        <input type="number" name="price" value={{$product->price}}>
        <br>
        <label for="">Stok</label>
        <br>
        <input type="number" name="stock" value={{$product->stock}}>
        <br>
        <label for="">Deskripsi</label>
        <br>
        <input type="text" name="description" value="{{$product->description}}">
        <br>
        <label for="">Foto Produk</label>
        <br>
        <input type="file" name="image">
        <br>
        <button type="submit">Ubah</button>
    </form>
</body>

</html>