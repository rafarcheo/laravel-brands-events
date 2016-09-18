@extends('users.layout')

@section('content')

<div class="row">
    <div class="col-sm-offset-5 col-md-4">
    	<h2>Dodaj użytkownika</h2>
        <form action="create" method="post">
            <div class="form-group">
                 <label for="">nazwa użytkownika </lanel>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                 <label for="">e-mail </lanel> 
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                 <label for="">hasło </lanel> 
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="wyslij">
            </div>
        </form>
    </div> 
</div>    
@endsection