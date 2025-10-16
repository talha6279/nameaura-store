<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:4048',
        ]);
        $category = new CategoryModel;
        $category->name = $request->name;

        if($request->hasFile('picture')) {
            // Get the uploaded file
            $file = $request->file('picture');
            $filename = time(). '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/products/categories'), $filename);

            // Save the filename in the category model
            $category->picture = $filename;
    }
    $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = CategoryModel::all();
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = CategoryModel::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate the incoming request data
         $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif|max:4048',
        ]);

        // Find the category by its ID
        $category = CategoryModel::find($id);

        // Update the category name
        $category->name = $request->name;

        // Check if a new image has been uploaded
        if ($request->hasFile('picture')) {

            // Delete the old image if it exists
            if ($category->picture && file_exists(public_path('uploads/products/categories/' . $category->picture))) {
                unlink(public_path('uploads/products/categories/' . $category->picture));
            }

            // Upload the new image
            $file = $request->file('picture');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products/categories'), $filename);

            // Update the category_pic field with the new image filename
            $category->picture = $filename;
        }

        // Save the updated category details to the database
        $category->save();

        // Redirect to the index page with a success message
        return redirect()->route('category.show')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = CategoryModel::find($id);

        // Check if there are any products associated with this category
        // $menusWithCategory = ProductModel::where('product_id', $id)->exists();

        // if ($menusWithCategory) {
        //     return redirect()->back()->with('failure' ,'This category cannot be deleted because it is associated with one or more product items');
        // }

        if ($cat->picture && file_exists(public_path('uploads/products/categories/' . $cat->picture))) {
            unlink(public_path('uploads/products/categories/' . $cat->picture));
        }
        $cat->delete();

        return redirect()->back()->with('success', 'Category Deleted successfully!');
    }
}