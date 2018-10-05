@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Candidates list</h1>
            <hr>
            @include('parts.messages')
            <form action="/process" method="post">
                @csrf
                <ul class="list-group">
                    @foreach($candidates as $candidate)
                    <li class="list-group-item">
                        <div class="checkbox">
                            <label><input name="candidates[]" type="checkbox" value="{{$candidate->id}}" /> {{$candidate->name}}</label>
                        </div>
                    </li> 
                    @endforeach
                </ul>
                <hr>
                <button class="btn btn-primary" type="submit">Vote</button>        
            </form>
        </div>
    </div>
</div>
@endsection