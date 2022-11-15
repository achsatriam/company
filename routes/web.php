<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Models\Produk;
use App\Models\Blog;

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

//Home
Route::get('/', function () {
    return view('klien.HomePage');
   
});

//Blog
Route::get('/details_blog/{blog}', function (Blog $blog) {
    return view('klien/blog/DetailsBlog', compact('blog'));
})->name('blog.detail');

Route::get('/list_blog', function () {
    $blogs = Blog::all();
    return view('klien/blog/ListBlog', compact('blogs'));
});

//Shop
Route::get('/details_product/{produk}', function (Produk $produk) {
    return view('klien/shop/DetailsProduct', compact('produk'));
})->name('produk.detail');

Route::get('/list_product', function () {
    $produks = Produk::all();
    return view('klien/shop/ListProduct', compact('produks'));
});

//Contact Us
Route::get('/contact_us', function () {
    return view('klien/ContactUs');
});

//admin
// Route::resource('/admin', ProdukController::class);

Route::get('/admin', 'App\Http\Controllers\ProdukController@index');

Route::post('/foo', function () {
    echo 1;
    return;
});

//kategori

Route::resource('/kategori', KategoriController::class);

//Blog
Route::resource('/blog', BlogController::class);