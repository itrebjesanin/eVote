@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Users
                <span class="float-right">
                    <a href="/users/create" class="btn btn-success">Add User</a>
                </span>
            </h1>
            <hr>
            @include('parts.messages')
            <ul class="list-group">
                @foreach ($users as $user)
                <li class="list-group-item">
                    {{$user->email}}
                    <div class="float-right">
                        <a href="/users/{{$user->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                        
                        <form id="delete-form-{{$user->id}}" style="display:inline" id="delete-form" action="/users/{{$user->id}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-sm btn-danger" onclick="if(confirm('Want to delete?')){document.getElementById('delete-form-{{$user->id}}').submit()}">Delete</a>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            <hr>
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection