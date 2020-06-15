@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="text-center mb-4">Update User</h2>

    @include('validation_errors')

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="name" id="" class="form-control" placeholder="Name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <input type="text" name="email" id="" class="form-control" placeholder="Email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" class="form-control" placeholder="Password" value="{{ $user->password }}">
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Update" class="btn btn-primary btn-lg">
        </div>
    </form>

</div>

@stop