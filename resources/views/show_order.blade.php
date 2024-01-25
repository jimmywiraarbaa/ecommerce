<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
</head>
<body>
    <p>ID   : {{$order->id}}</p>
    <p>User : {{$order->user->name}}</p>
    @foreach ($order->transactions as $transaction)
        <p>Product :{{$transaction->product->name}}</p>
        <p>Amount :{{$transaction->amount}}</p>
    @endforeach

    @if ($order->is_paid == null && $order->payment_receipt == null)
        <form action="{{route('submit_payment_receipt', $order)}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="payment_receipt">Masukan Kwitansi Pembayaran Anda</label>
            <br>
            <input type="file" name="payment_receipt" id="payment_receipt">
            <br>
            <button type="submit">Konfirmasi Pembayaran</button>
        </form>
    @endif
</body>
</html>