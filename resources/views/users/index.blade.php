@extends('layouts.app')

@section('content')
<ul>
    @foreach ($users as $user)
    <li>{{$user->name}} | {{$user->email}}</li>
    @endforeach
</ul>
@endsection