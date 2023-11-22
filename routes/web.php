<?php

use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;


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


//Homepage
Route::get('/', [StoreController::class, 'index']);

//Registration
Route::get('/register', [StoreController::class, 'register']);

//Login
Route::get('/login', [StoreController::class, 'login']);

//About us
Route::get('/aboutus', [StoreController::class, 'about']);

//Admin page
Route::get('/admin', [UserController::class, 'adminpage']);

//Manage Product page
Route::get('/manageproduct', [UserController::class, 'manageproduct']);

//Store Product data
Route::post('/products', [StoreController::class, 'store']);

//View Product page
Route::get('/products/{product}', [StoreController::class, 'product']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Log in User
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

