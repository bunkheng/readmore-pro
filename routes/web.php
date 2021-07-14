<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;

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

Route::get('/contact', function () {
    return view('contact-ext');
});

Route::get('/blog', function () {
    return view('blog-ext');
});

Route::get('/book-dt', function () {
    return view('book-dt-ext');
});


Route::get('/', 'App\Http\Controllers\HomepageBookController@index');

Route::get('/genre', 'App\Http\Controllers\HomepageBookController@index4');

Route::get('/chapter', 'App\Http\Controllers\HomepageBookController@index5');

Route::get('/chapter1', 'App\Http\Controllers\HomepageBookController@index6');

Route::get('/home', [App\Http\Controllers\HomepageBookController::class, 'index2'])->name('home');

Route::get('/bookmark', 'App\Http\Controllers\HomepageBookController@index3');

Route::resource('/book', 'App\Http\Controllers\BookDetailController');

Route::resource('/bookmarks', 'App\Http\Controllers\HomepageBookController');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class)->middleware('isAdmin');
    Route::resource('users', UserController::class)->middleware('isAdmin');
    Route::resource('products', ProductController::class)->middleware('isAdmin');
    Route::resource('books', BookController::class)->middleware('isAdmin');
});
