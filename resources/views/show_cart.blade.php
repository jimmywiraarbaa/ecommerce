<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    @foreach ($carts as $cart)
        <img src="{{url('storage/' . $cart->product->image)}}" alt="" width="100px">
        <p>{{$cart->product->name}}</p>
        <p>{{$cart->product->price}}</p>
        <form action="{{route('update_cart', $cart)}}" method="post">
            @method('patch')
            @csrf
            <input type="number" name="amount" value={{$cart->amount}}>
            <button type="submit">Ubah</button>
        </form>
        <form action="{{route('delete_cart', $cart)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Hapus</button>
        </form>
    @endforeach
</body>
</html>