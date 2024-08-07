<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'productCode' => 'required|string|max:15|unique:products,productCode',
            'productName' => 'required|string|max:70',
            'productLine' => 'required|string|max:50',
            'productScale' => 'required|string|max:10',
            'productVendor' => 'required|string|max:50',
            'productDescription' => 'required|string',
            'quantityInStock' => 'required|integer',
            'buyPrice' => 'required|numeric|between:0,99999999.99',
            'MSRP' => 'required|numeric|between:0,99999999.99',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'productCode' => 'required|string|max:15|unique:products,productCode,' . $product->productCode . ',productCode',
            'productName' => 'required|string|max:70',
            'productLine' => 'required|string|max:50',
            'productScale' => 'required|string|max:10',
            'productVendor' => 'required|string|max:50',
            'productDescription' => 'required|string',
            'quantityInStock' => 'required|integer',
            'buyPrice' => 'required|numeric|between:0,99999999.99',
            'MSRP' => 'required|numeric|between:0,99999999.99',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
