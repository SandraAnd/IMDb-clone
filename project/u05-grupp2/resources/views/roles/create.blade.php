@extends('layouts.app')

@section('titletab', 'roles Create') <!-- html tag, name -->

@section('content')
    <div class="container p-1">
        <div class="text-center">
            <h1 class="mb-4">Create New Role</h1>
        </div>
    </div>

    <form action="{{route('roles.store')}}" method="POST" class="text-center mx-auto" style="width: 18rem;">
        @csrf
        <div class="form-group">
            <label for="role" class="form-label mt-1 text-white h4">Role</label>
            <input type="text" class="form-control" id="role" placeholder="Enter role" autofocus name="role" value="{{old('role')}}">
            @error('roles')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-4">Send</button>
    </form>
@endsection