@extends('layouts.main')
@section('title', 'Create Category')
@section('heading', 'Create Category')
@section('breadcrumb', 'Create Category')

@section('content')

@php
$role = Auth::user()-> role ?? null
@endphp

@if($role == 'admin')
<form method="post" action="/insertcategory">

    @csrf

    <div class="mb-3 col-6">
        <label class="form-label">Category</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@else
<h1>Access denied, only admin allowed to access this page</h1>
@endif
@endsection