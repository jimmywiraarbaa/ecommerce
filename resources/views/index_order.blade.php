<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($orders as $order)
        <p>ID : {{$order->id}}</p>
        <p>User : {{$order->user->name}}</p>
        <p>{{$order->created_at}}</p>
        <p>
            @if ($order->is_paid == true)
                Terbayar
            @else
                Belum dibayar
                @if ($order->payment_receipt)
                    <a href="{{url('storage/'. $order->payment_receipt)}}">Tampilkan Kwitansi</a>
                @endif
                <form action="{{route('confirm_payment', $order)}}" method="post">
                    @csrf
                    <button type="submit">Konfirmasi</button>
                </form>
            @endif
        </p>
    @endforeach
</body>
</html>