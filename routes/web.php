<?php

// use App\Http\Controllers\CategoryController;
// use App\Models\Product;
// use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\StylistHistoryController;

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/manageproduct/search',[ManageProductController::class,'search_to_manage'])->middleware('auth');
Route::get('/manageproduct/add',[ManageProductController::class,'add_form'])->middleware('auth');
Route::post('/manageproduct/add',[ManageProductController::class,'add_product'])->name('add')->middleware('auth');
Route::get('/manageproduct',[ManageProductController::class,'index'])->middleware('auth');
Route::get('/manageproduct/delete/{id}',[ManageProductController::class,'delete_product'])->name('delete')->middleware('auth');
Route::get('/manageproduct/edit/{id}',[ManageProductController::class,'show_edit'])->middleware('auth');
Route::post('/manageproduct/edit/{id}',[ManageProductController::class,'edit_product'])->name('edit')->middleware('auth');
// Stylist & Profile
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');
Route::get('/stylisthistory',[StylistHistoryController::class,'index'])->middleware('auth');
Route::get('/stylisthistory/{id}',[StylistHistoryController::class,'detail'])->middleware('auth');
Route::get('/stylistcheckout',[StylistController::class,'checkout'])->middleware('auth');
Route::get('/bookstylist', [StylistController::class,'index']);
Route::get('/stylistcart', [StylistController::class,'showCart'])->middleware('auth');
Route::get('/{stylist:slug}', [StylistController::class,'stylistDetail']);
Route::delete('/stylistcart/{id}', [StylistController::class,'deleteCartItem'])->middleware('auth');
Route::post('/{stylist:slug}', [StylistController::class,'addToCart']);


//Product & Login & Logout


Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/categories', [ProductController::class,'showCategory']);
Route::get('/history',[HistoryController::class,'index'])->middleware('auth');
Route::get('/history/{id}',[HistoryController::class,'detail'])->middleware('auth');
Route::get('/checkout',[ProductController::class,'checkout'])->middleware('auth');
Route::get('/cart', [ProductController::class,'showCart'])->middleware('auth');
Route::post('/{product:slug}', [ProductController::class,'addToCart']);
Route::get('/{product:slug}', [ProductController::class,'productDetail']);
Route::delete('/cart/{id}', [ProductController::class,'deleteCartItem'])->middleware('auth');

//manage


























Route::get('/', [ProductController::class,'index']);














