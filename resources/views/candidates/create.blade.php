@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>New Candidate</h1>
            <hr>
            <form action="/candidates" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Add</button>
            </form>
            <hr>
        </div>
    </div>
</div>
@endsection