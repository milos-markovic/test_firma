@extends('layouts.app')

@section('content')

    <div class="container my-4">
    
        <div class="card">
            <div class="card-header">
                <h2>User data</h2>
            </div>
            <div class="card-footer">
                <h2>{{ $user->name }}</h2>
                <p>{{ $user->email }}</p>
            </div>
        </div>
    
    </div>

@stop