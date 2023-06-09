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

Route::get('/single_product', function(){ //single product view
    return view('single-product');
});
Route::get('/home', function(){
    return view('404');
})->name('home');

Route::get('/admin-home', function(){
    return view('admin.template');
})->name('admin-home');

Route::get('/admin-login', function(){
    return view('admin.login');
})->name('admin-login');

Route::get('/admin-users', function(){
    return view('admin.users');
})->name('admin-users');

Route::get('/admin-products', function(){
    return view('admin.products');
})->name('admin-products');

Route::get('/admin-edit-product', function(){
    return view('admin.edit-products');
})->name('admin-edit-product');

Route::get('/admin-edit-user', function(){
    return view('admin.edit-users');
})->name('admin-edit-user');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');