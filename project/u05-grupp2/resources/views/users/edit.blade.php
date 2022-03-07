{{-- user/{user_id}/edit --}}
@extends('layouts.app')

@section('titletab', 'users edit') <!-- html tag, name -->

@section('content')
    <div class="container p-1">
        <div class="text-center">
            <h1 class="mb-4">Edit User</h1>
        </div>
    </div>

    <form action="{{route('users.update', $user)}}" method="POST" class="text-center mx-auto" style="width: 18rem;">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="username" class="form-label mt-1 text-white h4">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Username" autofocus name="username" value="{{$user->username}}">
            @error('username')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label mt-1 text-white h4">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$user->email}}">
            @error('email')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label mt-1 text-white h4">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{$user->password}}">
            @error('password')
                <br>
                <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                <br>
            @enderror
        </div>
        
        {{-- {{dd();}} --}}


        @can('isAdmin')
            <div class="form-group">
                <label for="role_id" class="form-label mt-1 text-white h4">Role</label>
                {{-- <input type="role_id" class="form-control" id="role_id" placeholder="Enter role_id" name="role_id" value="{{$user->role_id}}"> --}}
                <select name="role_id" id="role_id">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @selected(old('role') == $role->role)>
                            {{ $role->role }}
                        </option>
                    @endforeach
                </select>
                
                @error('role_id')
                    <br>
                    <small class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 m-2">*{{$message}}</small>
                    <br>
                @enderror
            </div>
        @endcan

        <button type="submit" class="btn btn-primary mt-4">Send</button>
    </form>
@endsection
