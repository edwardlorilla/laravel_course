@extends('layout')
@section('content')
    <h1>All Posts</h1>
    <table class="table">
        <thead>
        <th>id</th>
        <th>User</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created_at</th>
        <th>Updated at</th>
        </thead>

    @if($posts)
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name }}</td>
            <td>{{$post->category_id}}</td>
            <td><img height="50px" src="{{ $post->photo ? $post->photo->file :'http://lorempixel.com/50/50' }}" alt=""></td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
    @endif
    </table>
@endsection