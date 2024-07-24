@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Highest Spending Customer</h1>
    @if ($customer)
        <p>Name: {{ $customer->name }}</p>
        <p>Total Spent: ${{ number_format($customer->orders->sum('amount'), 2) }}</p>
    @else
        <p>No data available.</p>
    @endif
</div>
@endsection
