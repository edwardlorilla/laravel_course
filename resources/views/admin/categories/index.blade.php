@extends('layout')
@section('content')

    <div class="col-md-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store'])!!}
            <div class="form-group">
                {!!  Form::label('name', 'Name:')  !!}
                {!!  Form::text('name', null, ['class'=>'form-control']) !!}
                {!!  Form::submit('Create Category', ['class'=>'btn btn-info']) !!}
            </div>
        {!! Form::close()!!}
    </div>
    <div class="col-md-6">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach( $categories as $category)
                    <tr>
                        <td scope="row">{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ?$category->created_at->diffForHumans() : 'no data found'}}</td>
                        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() :'no data found'}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection