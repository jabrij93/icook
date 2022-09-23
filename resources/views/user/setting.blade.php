@extends('layouts.main')
@section('title', 'Setting user')
@section('heading', 'Setting user')
@section('breadcrumb', 'Setting user')

@section('content')

<form method="POST" action="/updatesetting/{{$user -> id}}" enctype="multipart/form-data">

    @csrf

    <div class="mb-2 col-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" id="" cols="40" rows="10" value="{{$user->email}}">
    </div>

    <button type="submit" class="btn btn-primary mt-2 mb-3 ml-2">Submit</button>
</form>

<a href="/user">Back</a>
@endsection