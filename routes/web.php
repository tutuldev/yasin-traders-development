<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\ProductController;


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
    return view('welcome');
});
// Route::get('/fnt', function () {
//     return view('frontend.home');
// });
Route::get('/bac', function () {
    return view('backend.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// crud
Route::resource('category', CategoryController::class);
Route::resource('subcategory', SubcategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('company', CompanyController::class);

Route::get('/fnt', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home.index');
Route::get('/expire', [App\Http\Controllers\frontend\ExpireController::class, 'index'])->name('expire.index');
