@extends('users.layout')

@section('content')

<div class="row">
    <div class="col-sm-offset-5 col-md-4">
        <h2>Edytuj</h2>
        <form action="" method="post">
            <p><input type="hidden" name="_method" value="put"></p>
            <p><input type="hidden" name="user_id" value="{{ $user->id }}"></p>
            <div class="form-group">
                 <label for="">nazwa użytkownika </lanel>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                 <label for="">e-mail </lanel> 
                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                 <label for="">hasło </lanel> 
                <input type="password" class="form-control" name="password" value="{{ $user->password }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="wyslij">
            </div>
        </form>
    </div> 
</div>    
@endsection
