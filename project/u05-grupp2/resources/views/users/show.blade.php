<!-- user/{user_id}  when user is logged in-->
@extends('layouts.app')
@section('titletab', 'UsersShow')<!-- html tag, name -->

@section('content')
    <h1>This is users.show.blade.php</h1>
    <h2>Here it should be the Dashboard of the corresponding User</h2>
    <div class="container p-3">
        <div class="text-center">
            <h1 class="mb-4">Admin Dashboard</h1>
            <h2 class="mb-4 h4">Users</h2>
        </div>
    </div>
    <div class="container sm mx-auto">
        <table class="table" style="width: 100%">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><a href="{{route('users.show', $user)}}"> {{$user->username}} </a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role_id}}</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{-- Pagination --}}
            {{$users->links()}}
            {{-- {!! $users->links() !!} --}}
        </div>

    </div>
@endsection