<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    @foreach ($products as $product)
        <p>Name : {{$product->name}}</p>
        <p>Rp : {{$product->price}}</p>
        <p>Deskripsi : {{$product->description}}</p>
        <p>Stock : {{$product->stock}}</p>
        <img src="{{url('storage/'. $product->image)}}" alt="" width="100px">
    @endforeach
</body>
</html>