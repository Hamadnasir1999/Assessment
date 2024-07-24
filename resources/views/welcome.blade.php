@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to My Application</h1>
        <p class="lead">This is a simple example of a Laravel Blade layout.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">View Products</a>
    </div>
@endsection
