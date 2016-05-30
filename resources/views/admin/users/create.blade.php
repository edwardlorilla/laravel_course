@extends('layout')
@section('content')
    {!!  Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store'])!!}
        <div class="form-group">
            {!!  Form::label('name', 'Title:') !!}
            {!!  Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!   Form::label('email', 'Email:') !!}
            {!!  Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!   Form::label('role_id', 'Role') !!}
            {!!  Form::select('role_id', [''=>'Choose option']+$roles,null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!   Form::label('is_active', 'Role:') !!}
            {!!  Form::select('is_active', array(1=>'Active', 0=>'not active'), 0 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!   Form::label('password', 'Password') !!}
            {!!  Form::text('password',null,['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!!  Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!  Form::close() !!}
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection