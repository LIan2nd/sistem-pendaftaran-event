<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Storage;

class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.Categories.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:1',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Category::class, 'slug', $request->name);

        Category::create($validatedData);
        return redirect('dashboard/admin/categories')->with('success', 'Category Create successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.admin.categories.edit', [
            'title' => "Edit Category",
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:1',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Category::class, 'slug', $request->name);

        $category->update($validatedData);
        return redirect('dashboard/admin/categories')->with('success', 'Category Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::delete($category->image);
        }
        Category::destroy($category->id);
        return redirect('/dashboard/admin/categories')->with('success', 'Category has been Slainn !!!!');
    }
}