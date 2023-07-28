<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ChangelogsController;
use App\Http\Controllers\UsermanagementController;
use App\Http\Controllers\backend\BookcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Transactions Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/change-qty', [CartController::class, 'changeQty']);
Route::delete('/cart/delete', [CartController::class, 'delete']);
Route::delete('/cart/empty', [CartController::class, 'empty']);

//User Account Routes
Route::get('user_list', [App\Http\Controllers\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/edit_user/{id}', [App\Http\Controllers\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\UsermanagementController::class,'UserDelete']);

//Changelogs Routes
Route::get('changelogs', [App\Http\Controllers\ChangelogsController::class,'index'])->name('changelogs.index');

//Settings Routes
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');

//Products Routes
Route::resource('products', ProductController::class);
Route::post('/update-purchase-price', [ProductController::class, 'updatePurchasePrice'])->name('products.updatePurchasePrice');
Route::get('/delete_products/{id}', [ProductController::class,'ProductsDelete']);
