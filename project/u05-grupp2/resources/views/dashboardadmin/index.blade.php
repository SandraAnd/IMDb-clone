@extends('layouts.app')

@section('titletab', 'Movies Create') <!-- html tag, name -->

@section('content')
    <div class="container p-3 text-center">
        <h1 class="mb-4">Admin Dashboard view Dashboardadmin</h1>
    </div>

    <div class="d-grid gap-2 mx-auto"> 
          <a href="{{ route('movies.index') }}" class="btn btn-primary m-4" role="button">Movies</a>
          <a href="{{ route('users.index') }}" class="btn btn-primary m-4" role="button">Users</a>
          {{-- <a href="{{ route('reviews.index') }}" class="btn btn-primary m-4" role="button">Reviews</a> --}}
      </div>
@endsection
