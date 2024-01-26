<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $product->name }}</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Update Product') }}</div>

                        <div class="card-body">
                            <form action="{{ route('update_product', $product) }}" method="post"
                                enctype="multipart/form-data">
                                @method('patch')
                                @csrf

                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input class="form-control" type="number" name="price" value={{ $product->price }}>
                                </div>

                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input class="form-control" type="number" name="stock" value={{ $product->stock }}>
                                </div>

                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <input class="form-control" type="text" name="description"
                                        value="{{ $product->description }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Foto Produk</label>
                                    <input class="form-control" type="file" name="image">
                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
