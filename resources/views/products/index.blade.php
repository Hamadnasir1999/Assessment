@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Name</th>
                <th>Description</th>
                <th>Buy Price</th>
                <th>MSRP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->productCode }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->productDescription }}</td>
                    <td>${{ number_format($product->buyPrice, 2) }}</td>
                    <td>${{ number_format($product->MSRP, 2) }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->productCode) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product->productCode) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->productCode) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
