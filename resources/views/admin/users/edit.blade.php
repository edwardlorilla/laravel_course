@extends('layout')
@section('content')
    <div class="col-sm-3">
        <img src="{{$user->photo?$user->photo->file:'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
    {!!  Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@store', $user->id],'files'=>true])!!}
    <div class="form-group">
        {!!  Form::label('name', 'Title:') !!}
        {!!  Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!   Form::label('email', 'Email:') !!}
        {!!  Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!   Form::label('role_id', 'Role') !!}
        {!!  Form::select('role_id', $roles,null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!   Form::label('is_active', 'Status:') !!}
        {!!  Form::select('is_active', array(1=>'Active', 0=>'not active'), null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!   Form::label('password', 'Password') !!}
        {!!  Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!   Form::label('photo_id', 'Photo') !!}
        {!!   Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!!  Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!!  Form::close() !!}
    </div>
    @include('includes.form_error')
@endsection
