<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\ReviewModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        return view('home',compact('categories', 'categori','pens','keychains','bottles','mugs','gifts'));
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function contact()
    {
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        return view('contact.contact',compact('pens','keychains','bottles','mugs','gifts','categories', 'categori'));
    }
    public function about()
    {
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        return view('pages.about',compact('categories','categori','pens','keychains','bottles','mugs','gifts'));
    }
    public function faq()
    {
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        return view('pages.faq',compact('categories','categori','pens','keychains','bottles','mugs','gifts'));
    }
    public function category(Request $request)
    {
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();
        // check query param
       $categoryId = $request->query('category', 'all');

    if ($categoryId === 'all') {
        $products = ProductModel::latest()->paginate(12);
    } else {
        $products = ProductModel::where('category_id', $categoryId)->latest()->paginate(12);
    }
        
        return view('pages.category',compact('categories','categori','products', 'categoryId','pens','keychains','bottles','mugs','gifts'));
    }
    public function filterProducts($id = 'all')
    {
        if ($id === 'all' || $id === null) {
            $products = ProductModel::latest()->paginate(12);
        } else {
            $products = ProductModel::where('category_id', $id)->latest()->paginate(12);
        }
    
        return view('partials.product-list', compact('products'))->render();
    }
    

    public function productdetails(string $id)
    {
        // $randomCategory = ProductCategory::inRandomOrder()->take(3)->get();
        $categories = CategoryModel::all();
        $categori = CategoryModel::inRandomOrder()->take(5)->get();
        $product = ProductModel::find($id);
        $category = CategoryModel::find($product->category_id); // Assuming `category_id` exists in the product table 
        // Fetch related products from the same category, excluding the current product
        $relatedProducts = ProductModel::where('item_id', $product->item_id)->latest()->take('8')->get(); // Exclude the current product
        $reviews = ReviewModel::where('item_id', $id)->latest()->get();
        $pens = ProductModel::where('category_id', '1')->latest()->take(15)->get();
        $keychains = ProductModel::where('category_id', '4')->latest()->take(15)->get();
        $bottles = ProductModel::where('category_id', '7')->latest()->take(15)->get();
        $mugs = ProductModel::where('category_id', '9')->latest()->take(15)->get();
        $gifts = ProductModel::where('category_id', '8')->latest()->take(15)->get();

        return view('pages.product',compact('categories','categori','category','relatedProducts','product','reviews','pens','keychains','bottles','mugs','gifts'));
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
            'email' => 'required|email|unique:newsletters,email',
        ]);
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return back()->with('success', 'Thank you for subscribing!');
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
