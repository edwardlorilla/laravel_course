@extends('layout')
@section('content')
    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]])!!}
        <div class="panel panel-default">
        <div class="panel-body">

                {!!  Form::label('name', 'Name:')  !!}
                {!!  Form::text('name', null, ['class'=>'form-control']) !!}

        </div>
            <div class="panel-footer">

                {!!  Form::submit('Update Category', ['class'=>'btn btn-info']) !!}
                {!! Form::close()  !!}

                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]])!!}
                {!!  Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
                {!!  Form::close() !!}
            </div>
        </div>

@endsection