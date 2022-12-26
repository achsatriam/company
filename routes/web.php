<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\KategoriBlogController;
use App\Http\Controllers\KlienController;

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

//partex
//Home
Route::get('/', [KlienController::class, 'HomePage']);

//Blog
Route::get('/list_blog', [KlienController::class, 'ListBlog'])->name('list_blog');

Route::get('/details_blog/{blog}', [KlienController::class, 'DetailsBlog']);

//Shop
Route::get('/list_product', [KlienController::class, 'ListProduct'])->name('list_product');

Route::get('/details_product/{produk}', [KlienController::class, 'DetailsProduct']);

//How to order
Route::get('/how_to_order', [KlienController::class, 'HowToOrder']);

//About us
Route::get('/about_us', [KlienController::class, 'AboutUs']);

//Contact us
Route::get('/contact_us', [KlienController::class, 'ContactUs'])->name('contact');




//admin
//produk

Route::get('produk', [ProdukController::class, 'index']);

Route::get('produk/Add', [ProdukController::class, 'create']);

Route::post('produk', [ProdukController::class, 'store']);

Route::get('produk/{id}', [ProdukController::class, 'show']);

Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);

Route::post('produk/update/{id}', [ProdukController::class, 'update']);

Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

//kategori

Route::get('kategori_produk', [KategoriProdukController::class, 'index']);

Route::get('kategori_produk/Add', [KategoriProdukController::class, 'create']);

Route::post('kategori_produk', [KategoriProdukController::class, 'store']);

Route::get('kategori_produk/{id}', [KategoriProdukController::class, 'show']);

Route::get('kategori_produk/edit/{id}', [KategoriProdukController::class, 'edit']);

Route::post('kategori_produk/update/{id}', [KategoriProdukController::class, 'update']);

Route::delete('kategori_produk/{kategori}', [KategoriProdukController::class, 'destroy']);

//Blog

Route::get('blog', [BlogController::class, 'index']);

Route::get('blog/Add', [BlogController::class, 'create']);

Route::post('blog', [BlogController::class, 'store']);

Route::get('blog/{id}', [BlogController::class, 'show']);

Route::get('blog/edit/{id}', [BlogController::class, 'edit']);

Route::post('blog/update/{id}', [BlogController::class, 'update']);

Route::delete('blog/{id}', [BlogController::class, 'destroy']);

//Kategori Blog

Route::get('kategori_blog', [KategoriBlogController::class, 'index']);

Route::get('kategori_blog/Add', [KategoriBlogController::class, 'create']);

Route::post('kategori_blog', [KategoriBlogController::class, 'store']);

Route::get('kategori_blog/{id}', [KategoriBlogController::class, 'show']);

Route::get('kategori_blog/edit/{id}', [KategoriBlogController::class, 'edit']);

Route::post('kategori_blog/update/{id}', [KategoriBlogController::class, 'update']);

Route::delete('kategori_blog/{kategori}', [KategoriBlogController::class, 'destroy']);


Route::post('/foo', function () {
    echo 1;
    return;
});