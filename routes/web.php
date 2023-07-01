<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/profil', function () {
    return view('Profil', [
        "title" => "Profil",
        "name" => "Ngurah Gede Prema Satya Ananda",
        "nim" => "2015091047",
        "prodi" => "Sistem Informasi",
        "email" => "prema.satya@undiksha.ac.id",
        "image" => "prema.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
