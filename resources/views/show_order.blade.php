<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Detail Order') }}</div>

                        <div class="card-body">
                            <h5 class="card-title">ID : {{ $order->id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">by {{ $order->user->name }}</h6>

                            @if ($order->is_paid == true)
                                <p class="card-text text-success">Terbayar</p>
                            @else
                                <p class="card-text text-danger">Belum bayar</p>
                            @endif
                            <hr>
                            @foreach ($order->transactions as $transaction)
                                <p>{{ $transaction->product->name }} - {{ $transaction->amount }} pcs</p>
                            @endforeach
                            <hr>

                            @if ($order->is_paid == null && $order->payment_receipt == null)
                                <form action="{{ route('submit_payment_receipt', $order) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="payment_receipt">Masukan Kwitansi Pembayaran Anda</label>
                                        <input class="form-control" type="file" name="payment_receipt"
                                            id="payment_receipt">
                                    </div>
                                    <button class="btn btn-primary mt-3" type="submit">Konfirmasi Pembayaran</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
