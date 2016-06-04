@extends('layout')
@section('content')
    @if(Session::has('deleted_user'))
            <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Update at</th>
    </tr>
    </thead>
    <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="50px" src="{{$user->photo ? $user->photo->file : "http://placehold.it/400x400"}}" alt=""></td>
                        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role ? $user->role->name:""}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
    </tbody>
</table>
@endsection

