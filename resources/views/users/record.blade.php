@extends('users.layout')

@section('content')
    <form action="" method="post">
        <p><input type="hidden" name="_method" value="put"></p>
        <p><input type="hiddden" name="user_id" value="{{ $user->id }}"></p>
        <p>nazwa użytkownika <input type="text" name="name" value="{{ $user->name }}"></p>
        <p> e-mail <input type="text" name="email" value="{{ $user->email }}"></p>
        <p> haslo <input type="password" name="password" value="{{ $user->password }}"></p>
        <p><input type="submit" name="wyslij"></p>
    </form>
@endsection
