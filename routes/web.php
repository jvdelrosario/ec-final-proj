<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
$prod_id = 1;
Route::get('/', [TestController::class, 'index']);
Route::get('/about', function(){
        return view('about');
});
Route::get('/cart/{prodid}', [TestController::class, 'getProduct',$prod_id]);
Route::get('/checkout', function(){
    return view('checkout');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/shop',[TestController::class, 'viewProducts']);

Route::get('/single_product', function(){
    return view('single-product');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/registration', function () {
    return view('auth.register');
})->name('registration');
Route::post('/registration', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Route::get('/about', [TestController::class, 'about']);
