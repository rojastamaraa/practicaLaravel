<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoria creada correctamente');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'parent_id' => $request->parent_id,
            'name' => $request->name,
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoria actualizada correctamente');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Categoria eliminada correctamente');
    }
}
