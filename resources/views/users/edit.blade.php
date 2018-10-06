@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit User</h1>
            <hr>
            <form action="/users/{{$user->id}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
            <hr>
        </div>
    </div>
</div>
@endsection