<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile {{$user->name}}</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <p>Nama     : {{$user->name}}</p>
    <p>Email     : {{$user->email}}</p>
    <p>Role     : {{$user->is_admin ? 'Admin' : 'Member'}}</p>

    <form action="{{route('edit_profile')}}" method="post">
        @csrf
        <label for="">Nama</label>
        <br>
        <input type="text" name="name" value="{{$user->name}}">
        <br>
        <label for="">Kata Sandi</label>
        <br>
        <input type="password" name="password">
        <br>
        <label for="">Konfirmasi Kata Sandi</label>
        <br>
        <input type="password" name="password_confirmation">
        <br>
        <button type="submit">Edit Profil</button>
    </form>
</body>
</html>