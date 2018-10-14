@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justifiy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Settings</h4></div>
                <div class="card-body"> 
                    Maximum selected: {{$settings->maxSelect}}
                    <hr>
                    <form action="/set" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="max">Maximum selected</label>
                            <input class="form-control" type="text" name="max">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection