@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer with Most Orders</h1>
    <p>Customer Name: {{ $customer->name }}</p>
    <p>Number of Orders: {{ $customer->orders_count }}</p>
</div>
@endsection
