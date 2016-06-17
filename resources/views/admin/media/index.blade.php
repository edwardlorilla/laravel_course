@extends('layout')
@section('content')
    @if($photos)
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created at
                    </th>
            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
            <tr>

                <td>{{$photo->id}}</td>
                <td><img height="50px" src="{{$photo->file ? $photo->file : 'http://lorempixel.com/50/50'}}" alt=""></td>
                <td>{{$photo->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection