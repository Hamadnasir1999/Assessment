@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="productCode" class="form-label">Product Code</label>
            <input type="text" class="form-control" id="productCode" name="productCode" maxlength="15" required>
        </div>
        <div class="mb-3">
            <label for="productName" class="form-label">Name</label>
            <input type="text" class="form-control" id="productName" name="productName" maxlength="70" required>
        </div>
        <div class="mb-3">
            <label for="productLine" class="form-label">Product Line</label>
            <input type="text" class="form-control" id="productLine" name="productLine" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="productScale" class="form-label">Product Scale</label>
            <input type="text" class="form-control" id="productScale" name="productScale" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="productVendor" class="form-label">Product Vendor</label>
            <input type="text" class="form-control" id="productVendor" name="productVendor" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="quantityInStock" class="form-label">Quantity in Stock</label>
            <input type="number" class="form-control" id="quantityInStock" name="quantityInStock" min="0" required>
        </div>
        <div class="mb-3">
            <label for="buyPrice" class="form-label">Buy Price</label>
            <input type="number" class="form-control" id="buyPrice" name="buyPrice" step="0.01" min="0" required>
        </div>
        <div class="mb-3">
            <label for="MSRP" class="form-label">MSRP</label>
            <input type="number" class="form-control" id="MSRP" name="MSRP" step="0.01" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
