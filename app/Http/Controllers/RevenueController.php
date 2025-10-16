<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class RevenueController extends Controller
{
    public function index()
    {
        $revenues = Revenue::all();
        $totalProfit = Revenue::where('type', 'profit')->sum('amount');
        $totalExpense = Revenue::where('type', 'expense')->sum('amount');
        $totalGain = $totalProfit - $totalExpense;
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        return view('pages.account', compact('revenues', 'totalProfit', 'totalExpense', 'totalGain','categories','categori','pens','keychains','bottles','mugs','gifts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:profit,expense',
            'amount' => 'required|numeric|min:0',
        ]);

        Revenue::create($request->all());

        return redirect()->back()->with('success', 'Record added successfully.');
    }
}
