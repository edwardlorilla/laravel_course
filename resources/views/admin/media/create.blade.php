@extends('layout')


@section('css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css') !!}
@endsection


@section('content')
    {!!  Form::open(['method'=>'POST', 'action'=>'AdminMediaController@store' , 'class'=>'dropzone']) !!}

    {!!  Form::close()!!}

@endsection
@section('footer')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js') !!}
@endsection