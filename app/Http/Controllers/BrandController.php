<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(BrandRequest $request)
    {
        Brand::create([
            'name' => $request->name,
        ]);
        return redirect()->route('brands.index')->with('success', 'Marca creada correctamente');
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        $brand->update([
            'name' => $request->name,
        ]);
        return redirect()->route('brands.index')->with('success', 'Marca actualizada correctamente');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Marca eliminada correctamente');
    }
}
