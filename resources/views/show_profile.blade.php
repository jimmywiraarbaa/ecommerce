<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile {{ $user->name }}</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Profil') }}</div>

                        <div class="card-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif

                            <form action="{{ route('edit_profile') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" type="text" name="name" value="{{ $user->email }}"
                                        disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Role</label>
                                    <input class="form-control" type="text" name="name"
                                        value="{{ $user->is_admin ? 'Admin' : 'Member' }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Kata Sandi</label>
                                    <input class="form-control" type="password" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="">Konfirmasi Kata Sandi</label>
                                    <input class="form-control" type="password" name="password_confirmation">
                                </div>

                                <button class="btn btn-primary mt-3" type="submit">Edit Profil</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


</body>

</html>
