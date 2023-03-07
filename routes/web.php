<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Category;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index', [
        "judul" => "Dashboard"
    ]);
});

Route::get('/lebam', function () {
    return view('lebam/index', [
        "judul" => "Lebam"
        
    ]);
});

Route::get('/pemdik', function () {
    return view('pemdik/index', [
        "judul" => "Pemdik"
        
    ]);
});

Route::get('/pesanan', function () {
    return view('pesanan/index', [
        "judul" => "Pesanan"
        
    ]);
});

Route::get('/edit_profile', function () {
    return view('edit_profile/index', [
        "judul" => "Edit Profile"
        
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "judul" => "Edit Profile"
        
    ]);
});


Route::get('/register', [CategoryController::class, 'index']);
//di bawah ini cara pertama , logic: kirim params ke controller dulu baru query
// Route::get('/register/{user_id}',[UserController::class, 'find']);

//di bawah ini cara kedua , logic: query dulu baru kirim data ke Controller

//jika penulisannya {user} maka yang akan di kirim kan adalah id sebagai default nya , jika ingin mengirimkan yang lain tambahin : , contoh {user:slug}
Route::get('/register/{user}',[UserController::class, 'find']);
Route::get('/post/{category:slug}',[CategoryController::class, 'show']);
Route::get('/categori', [CategoryController::class, 'index']);
Route::get('/posts/{post:slug}',[PostController::class, 'show']);