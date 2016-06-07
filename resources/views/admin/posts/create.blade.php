@extends('layout')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', ['' =>'Choose an option'],null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body',null, ['class'=>'form-control', 'rows'=>3]) !!}

    </div>
    @endsection