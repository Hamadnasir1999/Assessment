@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer with Most Orders</h1>
    @if ($customer)
        <p>Name: {{ $customer->name }}</p>
        <p>Number of Orders: {{ $customer->orders_count }}</p>
    @else
        <p>No data available.</p>
    @endif
</div>
@endsection
