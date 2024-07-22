@extends('layouts.app')

@section('content')
    <h1>Customer with Most Orders</h1>
    <p>{{ $customer->name }}</p>
    <p>Total Orders: {{ $customer->orders_count }}</p>
    <a href="{{ url('/') }}">Back</a>
@endsection
