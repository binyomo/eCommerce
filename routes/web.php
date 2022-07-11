<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MitraController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/product', [IndexController::class, 'product']);
Route::get('/product/{id}', [IndexController::class, 'productDetail']);
Route::post('/product', [IndexController::class, 'productTambah']);
Route::get('/cart', [IndexController::class, 'cart']);


/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/
Route::get('/user/login', [UserController::class, 'login'])->name('loginUser')->middleware('guest:web');
Route::get('/user/register', [UserController::class, 'register']);

Route::post('/user/login', [UserController::class, 'auth']);
Route::post('/user/register', [UserController::class, 'create']);
Route::post('/user/logout', [UserController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::post('/cart', [IndexController::class, 'cartOut']);
	Route::get('/history', [IndexController::class, 'history']);
	Route::get('/history/{id}', [IndexController::class, 'historyDetail']);
});


/*
|--------------------------------------------------------------------------
| MITRA
|--------------------------------------------------------------------------
*/ 
Route::get('/mitra/login', [MitraController::class, 'login'])->name('loginMitra')->middleware('guest:mitra');
Route::get('/mitra/register', [MitraController::class, 'register']);

Route::post('/mitra/login', [MitraController::class, 'auth']);
Route::post('/mitra/register', [MitraController::class, 'create']);
Route::post('/mitra/logout', [MitraController::class, 'logout']);

Route::group(['middleware' => ['mitra']], function () {
	Route::get('/mitra', function () {
	    return view('welcome');
	});
});