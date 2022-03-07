@extends('layouts.app')
@section('titletab', 'users index') {{-- html tag, name --}}

@section('content')
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
                    <td style="text-align: right">
                        <a href="{{route('users.edit', $user)}}" class="btn btn-primary"> {{-- blue pen button --}}
                            <i class="fas fa-marker"></i>
                        </a>
                    </td>
                    <td>
                        <a href="">back</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection