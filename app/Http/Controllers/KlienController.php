<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Blog;
use App\Models\KategoriProduk;
use App\Models\KategoriBlog;

use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function HomePage()
    {
        $produk = Produk::all()->where('show', '=', 'Aktif');
        $blog = Blog::all()->where('show', '=', 'Aktif');
        $kategori = KategoriProduk::all();
        return view('klien/HomePage', compact('produk', 'blog', 'kategori'));
    }

    public function ListBlog(Request $request)
    {
        if($request->search && $request->category){
            $blogs = Blog::where('nama_blog','LIKE','%'.$request->search.'%')->where('kategori_blog_id', '=', $request->category)->get();

        }elseif($request->search && !$request->category){
            $blogs = Blog::where('nama_blog','LIKE','%'.$request->search.'%')->get();

        }elseif(!$request->search && $request->category){
            $blogs = Blog::where('kategori_blog_id', '=', $request->category)->get();

        }else{
            $blogs = Blog::all();
        }

        

        $kategoris = KategoriBlog::all();

        return view('klien/blog/ListBlog', compact('blogs', 'kategoris'));
    }

    public function DetailsBlog(Blog $blog)
    {
        return view('klien/blog/DetailsBlog', compact('blog')); 
    }

    public function ListProduct(Request $request)
    {

        if($request->search && $request->category){
            $produks = Produk::where('nama_produk','LIKE','%'.$request->search.'%')->where('kategori_produk_id', '=', $request->category)->get();

        }elseif($request->search && !$request->category){
            $produks = Produk::where('nama_produk','LIKE','%'.$request->search.'%')->get();

        }elseif(!$request->search && $request->category){
            $produks = Produk::where('kategori_produk_id', '=', $request->category)->get();

        }else{
            $produks = Produk::all();
        }

        
        $kategoris = KategoriProduk::all();

        return view('klien/shop/ListProduct', compact('produks', 'kategoris'));
    }
    
    public function DetailsProduct(Produk $produk)
    {
        $related_produk = Produk::all()->where('kategori_produk_id', '=', $produk->kategori_produk_id);
        return view('klien/shop/DetailsProduct', compact('produk', 'related_produk'));
    }

    public function HowToOrder()
    {
        return view('klien/HowToOrder');
    }

    public function AboutUs()
    {
        return view('klien/AboutUs');
    }

    public function ContactUs()
    {
        return view('klien/ContactUs');
    }


}
