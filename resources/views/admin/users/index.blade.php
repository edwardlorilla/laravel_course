@extends('layout')
@section('content')
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
                        <td><img height="50px" src="{{$user->photo ? $user->photo->file : "photo not found"}}" alt=""></td>
                        <td>{{$user->name}}</td>
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

