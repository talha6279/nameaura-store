<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');
Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::get('/categories-with-products',[HomeController::class, 'category'])->name('category');
Route::get('/my-account-main',[HomeController::class, 'account'])->name('account');
Route::get('/product/details/{id}', [HomeController::class, 'productdetails'])->name('product-detail');

Route::get('admin266/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
Route::post('/newsletter', [HomeController::class, 'store'])->name('newsletter.store');
Route::get('/filter-products/{id}', [HomeController::class, 'filterProducts'])->name('filter.products');


Route::prefix('admin266/category')->name('category.')->group(function () {
    Route::get('/add', [CategoryController::class, 'index'])->name('add');
    Route::post('/add', [CategoryController::class, 'store']);
    Route::get('/show', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

Route::get('/admin266/revenue', [RevenueController::class, 'index'])->name('revenue.index');
Route::post('/admin266/revenue/store', [RevenueController::class, 'store'])->name('revenue.store');

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');


Route::prefix('admin266/product')->controller(ProductController::class)->name('product.')->group(function () {
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::get('/permdeleted/{id}','permdeleted')->name('permdeleted');
    Route::get('/restore/{id}','restore')->name('restore');
    Route::get('/trashshow','trashshow')->name('trashshow');
    
});

Route::prefix('contact')->controller(ContactController::class)->name('contact.')->group(function ()
{
    
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/update/{id}','update')->name('update');
    Route::get('/cancel/{id}','canceled')->name('cancel');
    Route::get('/delete/{id}','destroy')->name('delete');
});