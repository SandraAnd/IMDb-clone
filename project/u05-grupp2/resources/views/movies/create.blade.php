@extends('layouts.app')

@section('titletab', 'Movies Create') <!-- html tag, name -->

@section('content')

    <div class="container p-1">
        <div class="text-center">
            <h1 class="mb-4">Create New Movie</h1>
        </div>
    </div>

    <form action="{{route('movies.store')}}" method="POST" class="text-center mx-auto" style="width: 18rem;">
        @csrf
        <div class="form-group">
            <label class="form-label mt-1">Movie Title</label>
            <input type="text" class="form-control" placeholder="Enter movie Title" autofocus name="title" value="{{old('title')}}">
        </div>

        <div class="form-group">
            <label class="form-label mt-4">Movie Description</label>
            <input type="text" class="form-control" placeholder="Enter movie Description" name="description" value="{{old('description')}}">
        </div>

        <div class="form-group">
            <label class="form-label mt-1">Movie Year</label>
            <input type="text" class="form-control" placeholder="Enter movie Year" name="year" value="{{old('year')}}">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Create Movie</button>
    </form>

@endsection
