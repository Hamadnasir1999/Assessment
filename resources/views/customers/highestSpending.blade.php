@extends('layouts.app')

@section('content')
    <h1>Highest Spending Customer</h1>
    @if ($customer)
        <p><strong>Name:</strong> {{ $customer->name }}</p>
        <p><strong>Total Spent:</strong> ${{ $customer->orders->sum('amount') }}</p>
    @else
        <p>No customer data available.</p>
    @endif
    <a href="{{ url('/') }}">Back</a>
@endsection
