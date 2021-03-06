@extends('users.layout')

@section('content')
    <div class="row">
        <h2>Lista użytkowników</h2>
        <table class="table table-striped">
            <thead> 
                <tr> <th>#</th> 
                    <th>Name</th> 
                    <th>Mail</th> 
                    <th>-</th> 
                    <th>-</th>
                </tr> 
            </thead>
            @foreach ($users as $user)
            <tr> 
                <th class="title">{{ $user->name }}</th>
                <th class="">{{ $user->email }}</th>
       
                <th>
                    <a href="users/record/{{ $user->id }}">Edytuj</a>
                </th>

                <th>
                    <form action="users/record" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="submit" class="btn btn-primary" value="USUŃ">
                    </form>
                </th>
             </tr> 
            @endforeach
        </table>
        <a class="btn btn-primary" href="/users/create">Dodsj nowy</a>
    </div>
@endsection
