@extends('layouts.app')

@section('titletab', 'movies edit') <!-- html tag, name -->

@section('content')
    <div class="container p-1">
        <div class="text-center">
            <h1 class="mb-4">Edit Movie</h1>
        </div>
    </div>

    <form action="{{route('movies.update', $movie)}}" method="POST" class="text-center mx-auto" style="width: 18rem;">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title" class="form-label mt-1 text-white h4">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" autofocus name="title" value="{{$movie->title}}">
            @error('title')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="description" class="form-label mt-1 text-white h4">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{$movie->description}}">
            @error('description')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="year" class="form-label mt-1 text-white h4">Year</label>
            <input type="text" class="form-control" id="year" placeholder="Enter year" name="year" value="{{$movie->year}}">
            @error('year')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-4">Edit Movie</button>
    </form>
@endsection
