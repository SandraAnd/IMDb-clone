@extends('layouts.app')
@section('titletab', 'Roles') <!-- html tag, name -->

@section('content')
    <h1 class="text-center mb-4">Roles List</h1>
    <div class="table-responsive container p-3">
    @empty($roles)
        <h2>The Role List is empty!</h2>
    @else
        <table class="table table-hover container sm mx-auto">
            <thead>
                <tr class="table-active">
                    <th>Id</th>
                    <th>Role</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->role }}</td>
                        <td style="text-align: right">
                            <a href="{{route('roles.edit', $role)}}" class="btn btn-primary"> {{--blue pen button--}}
                                <i class="fas fa-marker"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('roles.destroy', $role)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>{{--red delete button --}}
                            </form>    
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
