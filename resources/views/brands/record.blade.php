@extends('brands.layout')

@section('content')

<div class="row">
    <div class="col-sm-offset-5 col-md-4">
        <h2>Edytuj</h2>
        <form action="" method="post">
            <p><input type="hidden" name="_method" value="put"></p>
            <p><input type="hidden" name="brand_id" value="{{ $brand->id }}"></p>
            <div class="form-group">
                 <label for="">nazwa</lanel>
                <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
            </div>
            <div class="form-group">
                 <label for="">Treść </lanel> 
                <input type="text" class="form-control" name="content" value="{{ $brand->content }}">
            </div>
            <div class="form-group">
                 <label for="">hasło </lanel> 
                <input type="text" class="form-control" name="image" value="{{ $brand->image }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="wyslij">
            </div>
        </form>
    </div> 
</div>    
@endsection
