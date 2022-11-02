<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ObjectiveController;


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
    return view('dashboard');
});


Route::resource('/seller' , SellerController::class);

Route::resource('/objective' , ObjectiveController::class);


Route::resource('/users' , UserController::class)->names('admin.users');


Route::resource('/consumers' , ConsumerController::class);


Route::resource('/sales' , SalesController::class);


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';