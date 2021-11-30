
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SellerController;
use App\Http\Controllers\Backend\BidderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  Route::get('/', function () {
      return view('website.master');
  });

//template
Route::get('/admin',[HomeController::class,'home'])->name('dashboard');
Route::get('/category',[CategoryController::class,'category'])->name('admin.category');
Route::get('/seller',[SellerController::class,'seller'])->name('admin.seller');
Route::get('/bidder',[BidderController::class,'bidder'])->name('admin.bidder');
Route::get('/report',[ReportController::class,'report'])->name('admin.report');
Route::get('/product',[ProductController::class,'product'])->name('admin.product');

// creat_category
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/store',[CategoryController::class,'store'])->name('category.store');


//creat_item
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create/store',[ProductController::class,'store'])->name('product.store');



