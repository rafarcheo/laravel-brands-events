@extends('users.layout')

@section('content')
    @foreach ($users as $user)

    <div class="row">
        <div class="title">{{ $user->name }}</div>
        <div class="">{{ $user->email }}</div>
        <div class="">{{ $user->name }}</div>
        <div>
            <a href="users/record/{{ $user->id }}">Edytuj</a>
        </div>
        <div>
            <form action="users/record" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="submit" value="USUŃ">
            </form>
        </div>
    </div>
    @endforeach
@endsection
