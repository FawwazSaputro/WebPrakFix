<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/login', [UserController::class, 'getLogin'])->name('login');
// name is for middleware to detect where to redirect (from file Middleware/Authenticate.php)
Route::post('/login', [UserController::class, 'submitLogin']);
Route::get('/register', [UserController::class, 'getRegister']);
Route::post('/register', [UserController::class, 'submitRegister']);
Route::get('/logout', [UserController::class, 'logout']);


Route::get('/products/new', [ProductController::class, 'getNew'])->middleware('auth');
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'submitNew'])->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}/edit', [ProductController::class, 'getEdit'])->middleware('auth');
Route::put('/products/{product}', [ProductController::class, 'submitEdit'])->middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'delete'])->middleware('auth');


Route::get('/',  [ProductController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });
