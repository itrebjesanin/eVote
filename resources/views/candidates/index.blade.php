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
                        
                        <form id="delete-form-{{$candidate->id}}" style="display:inline" id="delete-form" action="/candidates/{{$candidate->id}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-sm btn-danger" onclick="if(confirm('Want to delete?')){document.getElementById('delete-form-{{$candidate->id}}').submit()}">Delete</a>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            <hr>
        </div>
    </div>
</div>
@endsection