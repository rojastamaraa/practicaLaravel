<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProduct;

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

    public function store(StoreProduct $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        $product->categories()->sync($request->category_id);

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(StoreProduct $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
