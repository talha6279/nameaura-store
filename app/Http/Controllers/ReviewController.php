<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validation
        $request->validate([
            'item_id' => 'required|exists:product_models,item_id',
            'name'    => 'required|string|max:255',
            'rating'  => 'nullable|integer|min:1|max:5',
            'review'  => 'required|string|max:1024',
        ]);

        // Create review
        $review =ReviewModel::create([
            'item_id' => $request->item_id,
            'name'    => $request->name,
            'rating'  => $request->rating?$request->rating:5,
            'review'  => $request->review,
        ]);
        $review->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
