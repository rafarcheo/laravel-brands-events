@extends('brands.layout')

@section('content')
    <div class="row">
        <h2>Lista brandów</h2>
        <table class="table table-striped">
            <thead> 
                <tr> <th>#</th> 
                    <th>Name</th> 
                    <th>Treść</th> 
                    <th>Image</th> 
                    <th>-</th> 
                    <th>-</th>
                </tr> 
            </thead>
            @foreach ($brands as $brand)
            <tr> 
                <th class="title">{{ $brand->name }}</th>
                <th class="">{{ $brand->content }}</th>
                <th class="">{{ $brand->image }}</th>
                <th>
                    <a href="brands/record/{{ $brand->id }}">Edytuj</a>
                </th>

                <th>
                    <form action="brands/record" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                        <input type="submit" class="btn btn-primary" value="USUŃ">
                    </form>
                </th>
             </tr> 
            @endforeach
        </table>
        <a class="btn btn-primary" href="/brands/create">Dodsj nowy</a>
    </div>
@endsection
