<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Tambah Produk') }}</div>

                        <div class="card-body">
                            <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Nama Produk</label>
                                    <input class="form-control" type="text" name="name" placeholder="Nama Produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Harga Produk</label>
                                    <input class="form-control" type="number" name="price" placeholder="Harga Produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Deskripsi Produk</label>
                                    <input class="form-control" type="text" name="description"
                                        placeholder="Deskripsi Produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input class="form-control" type="number" name="stock" placeholder="Stok Produk">
                                </div>

                                <div class="form-group">
                                    <label for="">Foto Produk</label>
                                    <input class="form-control" type="file" name="image">
                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Tambah Produk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
