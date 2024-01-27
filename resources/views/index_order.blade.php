<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Orders') }}</div>

                        <div class="card-body m-auto">
                            @foreach ($orders as $order)
                                <div class="card mb-2" style="width: 30rem;">
                                    <div class="card-body">
                                        <a href="{{ route('show_order', $order) }}">
                                            <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                        </a>
                                        <h6 class="card-subtitle mb-2 text-muted">by {{ $order->user->name }}</h6>
                                        <p>{{ $order->created_at }}</p>

                                        @if ($order->is_paid == true)
                                            <p class="card-text text-success">Terbayar</p>
                                        @else
                                            <p class="card-text text-danger">Belum bayar</p>
                                            @if ($order->payment_receipt)
                                                <div class="d-flex flex-row justify-content-around">
                                                    <a class="btn btn-primary"
                                                        href="{{ url('storage/' . $order->payment_receipt) }}">Tampilkan
                                                        Kwitansi</a>
                                                    @if (Auth::user()->is_admin == true)
                                                        <form action="{{ route('confirm_payment', $order) }}"
                                                            method="post">
                                                            @csrf
                                                            <button class="btn btn-success"
                                                                type="submit">Konfirmasi</button>
                                                        </form>
                                                    @endif
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
