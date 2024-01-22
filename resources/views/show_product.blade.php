<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$product->name}}</title>
</head>
<body>
    <img src="{{url('storage/'. $product->image)}}" alt="" width="100px">
    <p>{{$product->name}}</p>
    <p>Rp.{{$product->price}}</p>
    <p>{{$product->description}}</p>
    <p>Stock :{{$product->stock}}</p>
    <a href="{{route('index_product')}}">Kembali</a>
    <form action="{{route('edit_product' ,$product)}}" method="get">
        <button type="submit">Ubah</button>
    </form>
    <form action="{{route('add_to_cart', $product)}}" method="post">
        @csrf
        <input type="number" name="amount" value="1">
        <button type="submit">Keranjang</button>
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
</body>
</html>