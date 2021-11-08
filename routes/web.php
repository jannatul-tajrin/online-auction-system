<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

<<<<<<< HEAD

//Route::get('/', function () {
    //return view('admin.index');
 //});

 Route::get('/admin',[HomeController::class,'home']);
=======
Route::get('/home', function () {
    return view('welcome');
});
>>>>>>> 81ac4fca0efc31fd9e7aa4f5ca0a6d9060351cc1
