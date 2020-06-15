@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="text-center mb-4">Create User</h2>

    @include('validation_errors')

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" id="" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" name="email" id="" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" class="form-control" placeholder="Password">
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Create" class="btn btn-primary btn-lg">
        </div>
    </form>

</div>

@stop