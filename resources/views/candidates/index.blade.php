@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Candidates
                <span class="float-right">
                    <a href="/candidates/create" class="btn btn-success">Add Candidate</a>
                </span>
            </h1>
            <hr>
            @include('parts.messages')
            <ul class="list-group">
                @foreach ($candidates as $candidate)
                <li class="list-group-item">
                    {{$candidate->name}}
                    <div class="float-right">
                        <a href="/candidates/{{$candidate->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/candidates/{{$candidate->id}}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </li>
                @endforeach
            </ul>
            <hr>
        </div>
    </div>
</div>
@endsection