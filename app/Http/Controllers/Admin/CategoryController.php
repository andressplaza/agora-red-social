<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware([IsAdmin::class, Authenticate::class]);
    }

    public function index()
{
    $categories = Category::where('enabled', 1)->get();

    return view('admin.categories.index', [
        'categories' => $categories,
    ]);
}


    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => ['required', 'unique:categories'],
        ]);

        Category::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category Created');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'  => ['required', 'unique:categories'],
        ]);

        $category->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category Updated');
    }


    public function destroy(Category $category)
    {
        $category->update([
            'enabled' => false
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category Deleted');
    }
}
