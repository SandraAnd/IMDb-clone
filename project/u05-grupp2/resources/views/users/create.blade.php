<!-- user/create -->
@extends('layouts.app')
@section('titletab', 'Users Create') <!-- html tag, name -->

@section('content')

    <div class="container p-1">
        <div class="text-center">
            <h1 class="mb-4">Create New User</h1>
        </div>
    </div>

    <form action="{{route('users.store')}}" method="POST" class="text-center mx-auto" style="width: 18rem;">
        @csrf
        <div class="form-group">
            <label for="username" class="form-label mt-1 text-white h4">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username" autofocus name="username" value="{{old('username')}}">
            @error('username')
            <br>
            <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
            <br>
        @enderror
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label mt-1 text-white h4">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" autofocus name="email" value="{{old('email')}}">
            @error('email')
            <br>
            <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
            <br>
        @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label mt-1 text-white h4">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" autofocus name="password" value="{{old('password')}}">
            @error('password')
            <br>
            <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
            <br>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-4">Send</button>
    </form>

@endsection