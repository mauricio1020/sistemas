<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }
    public function edit(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }
    public function update(UpdateRequest $request, Category $category): \Illuminate\Http\RedirectResponse
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }
    public function destroy(Category $category): \Illuminate\Http\RedirectResponse
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
