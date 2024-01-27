<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Products') }}</div>

                        <div class="card-group m-auto">
                            @foreach ($products as $product)
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="{{ url('storage/' . $product->image) }}"
                                        alt="Card Image Cap" width="100px">
                                    <div class="card-body">
                                        <p class="card-text">Name : {{ $product->name }}</p>
                                        <p class="card-text">Rp : {{ $product->price }}</p>
                                        <form action="{{ route('show_product', $product) }}" method="get">
                                            <button class="btn btn-primary" type="submit">Detail</button>
                                        </form>
                                        @if (Auth::check() && Auth::user()->is_admin == true)
                                            <form action="{{ route('delete_product', $product) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger mt-2" type="submit">Hapus</button>
                                            </form>
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
