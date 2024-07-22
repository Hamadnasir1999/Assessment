@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="mb-3">
        <strong>Product Code:</strong> {{ $product->productCode }}
    </div>
    <div class="mb-3">
        <strong>Name:</strong> {{ $product->productName }}
    </div>
    <div class="mb-3">
        <strong>Product Line:</strong> {{ $product->productLine }}
    </div>
    <div class="mb-3">
        <strong>Product Scale:</strong> {{ $product->productScale }}
    </div>
    <div class="mb-3">
        <strong>Product Vendor:</strong> {{ $product->productVendor }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $product->productDescription }}
    </div>
    <div class="mb-3">
        <strong>Quantity in Stock:</strong> {{ $product->quantityInStock }}
    </div>
    <div class="mb-3">
        <strong>Buy Price:</strong> ${{ number_format($product->buyPrice, 2) }}
    </div>
    <div class="mb-3">
        <strong>MSRP:</strong> ${{ number_format($product->MSRP, 2) }}
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
