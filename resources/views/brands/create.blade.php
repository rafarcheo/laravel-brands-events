@extends('brands.layout')

@section('content')

<div class="row">
    <div class="col-sm-offset-5 col-md-4">
    	<h2>Dodaj brand</h2>
        <form action="/brands/create" method="post">
            <div class="form-group">
                 <label for="">nazwa </lanel>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                 <label for="">Treść </lanel> 
                <input type="text" class="form-control" name="content">
            </div>
            <div class="form-group">
                 <label for="">Obrazek </lanel> 
                <input type="text" class="form-control" name="image">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="wyslij">
            </div>
        </form>
    </div> 
</div>    
@endsection