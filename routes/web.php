
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SellerController;
use App\Http\Controllers\Backend\BidderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\AdminLoginController;
use App\Http\Controllers\Backend\Bid_detailsController;
use App\Http\Controllers\Backend\FeedbackController;


use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\BidController;
use App\Http\Controllers\Frontend\HomeControllers;
use App\Http\Controllers\Frontend\ShowProductController;

use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\ResultController;
use App\Http\Controllers\Frontend\AboutusController;





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
 Route::get('/',function(){
   return redirect()->route('website.home');
 });
 Route::get('/website',function(){

   return view('website.master');

 })->name('website.home');

 Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
 Route::post('/admin/do/login',[AdminLoginController::class,'dologin'])->name('admin.do.login');

Route::group(['middleware'=>['auth','admin']],function(){
Route::get('/admin',function(){
  return view('master');
})->name('dashboard');
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

 

// admin template
Route::get('/admin/dashboard',[HomeController::class,'home'])->name('dashboard');
Route::get('/category',[CategoryController::class,'category'])->name('admin.category');
Route::get('/seller',[SellerController::class,'seller'])->name('admin.seller');




Route::get('/bidder',[BidderController::class,'bidder'])->name('admin.bidder');
Route::get('/bidder/status/update/{id}',[BidderController::class,'bidder'])->name('status.update');




Route::get('/report',[ReportController::class,'report'])->name('admin.report');
Route::get('/product',[ProductController::class,'product'])->name('admin.product');

// creat_category
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/store',[CategoryController::class,'store'])->name('category.store');


//creat_item
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/list/view/{id}',[ProductController::class,'product_view'])->name('product.view');
Route::get('/product/list/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
Route::get('/product/list/edit/{id}',[ProductController::class,'product_edit'])->name('product.edit');
Route::put('/product/list/update/{id}',[ProductController::class,'product_update'])->name('product.update');


//Bid_details
Route::get('/Bid_details/{id}',[Bid_detailsController::class,'Bid_details'])->name('admin.bid details');
Route::get('/Bid_details/status/update/{id}',[Bid_detailsController::class,'status_update'])->name('status.update');

Route::get('/Bid_details/status/cancel/{id}',[Bid_detailsController::class,'status_cancel'])->name('status.cancel');
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('admin.feedback');

});



//Frontrend
Route::get('/home',[HomeControllers::class,'Home'])->name('frontend.home');
Route::get('/home/login',[LoginController::class,'Login'])->name('login.user');
Route::post('/home/login/store',[LoginController::class,'Loginstore'])->name('login.store');

Route::get('/home/registration',[LoginController::class,'registration'])->name('registration');
Route::post('/home/registration/store',[LoginController::class,'registrationstore'])->name('registration.store');

Route::get('/home/logout',[LoginController::class,'logout'])->name('user.logout');
Route::get('/home/showproduct',[ShowProductController::class,'product'])->name('product');
Route::get('/home/productdetails/{id}',[ShowProductController::class,'productDetails'])->name('productdetails');
Route::get('/home/bidforproduct/{id}',[BidController::class,'bid'])->name('home.bid');
Route::post('/home/bidforproduct/store/{id}',[BidController::class,'store'])->name('home.bid.store');


Route::get('/home/review',[ReviewController::class,'review'])->name('frontend.review');

Route::post('/home/review/store',[ReviewController::class,'store'])->name('frontend.review.store');
Route::get('/home/result',[ResultController::class,'result'])->name('frontend.result');
Route::get('/home/aboutus',[AboutusController::class,'aboutus'])->name('frontend.aboutus');
