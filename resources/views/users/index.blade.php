@extends('layouts.app')

@section('content')

<div class="container py-4">

    @if(count($users))
    <div class="card">

        <table class="table table-hover m-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('users.show',$user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td><a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Update</a></td>
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h3>Insert new User</h3>
        @endif
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-primary mt-3">Create User</a>

</div>



@stop