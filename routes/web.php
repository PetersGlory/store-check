<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/', function(){
    $product = Product::all();
    return view('welcome', ['products' => $product])->withTitle('Store Check');
});
Route::get('/home',[ProductController::class,'index']);
Route::get('/product',[ProductController::class,'create']);
Route::post('/products',[ProductController::class,'store']);
Route::put('/products/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);
Route::get('/products/{id}/edit',[ProductController::class,'edit']);
Route::get('/products/{id}/show',[ProductController::class,'show']);