@extends('layouts.main')

@section('title', 'Create Resep')
@section('heading', 'Create Resep')
@section('breadcrumb', 'Create Resep')

@section('content')

<form method="POST" action="/insertresep">

    @csrf

    <div class="mb-2 col-6">
        <label class=" form-label">Category</label>
        <input type="hidden" name="id_user" value=" {{Auth::user()->id }}">
        <select class=" form-control" name="id_category">
            <option value="">Select category</option>
            @foreach(App\Models\Categories::get() as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-2 col-6">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="title">
    </div>


    <div class="mb-3">
        <label class="form-label">Resep</label>
        <textarea name="resep" id="" cols="40" rows="10"></textarea>
    </div>


    <div class="mt-3 col-6">
        <label class="form-label">Images</label>
        <input type="file" class="form-control" name="images">
    </div>
    <button type="submit" class="btn btn-primary mt-2 mb-3 ml-2">Submit</button>
</form>

<a href="/resep">Back</a>

@endsection