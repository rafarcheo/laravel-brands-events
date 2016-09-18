@extends('users.layout')

@section('content')
	<form action="create" method="post">
		<p>nazwa użytkownika <input type="text" name="name"></p>
		<p> e-mail <input type="text" name="email"></p>
		<p> haslo <input type="password" name="password"></p>
		<p><input type="submit" name="wyslij"></p>
	</form>
@endsection