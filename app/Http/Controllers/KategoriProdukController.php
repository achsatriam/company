<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_produk = KategoriProduk::all();
        return view ('admin.kategoriproduk.HomeKategoriProduk',compact('kategori_produk'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategoriproduk.AddKategoriProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_produk' => 'required',
        ]);

        $kategori_produk= new KategoriProduk();

        $kategori_produk->kategori_produk=$request->kategori_produk;

        $kategori_produk->save();

        return redirect('kategori_produk')->with('success', 'Kategori produk Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_produk = KategoriProduk::find($id);
        return view('admin.kategoriproduk.ShowKategoriProduk')->with('kategori_produk', $kategori_produk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_produk = KategoriProduk::find($id);
        return view('admin.kategoriproduk.EditkategoriProduk')->with('kategori_produk', $kategori_produk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'kategori_produk' => 'required',
        ]);

        $kategori_produk = KategoriProduk::find($id);
        
        $kategori_produk->kategori_produk=$request->kategori_produk;

        $kategori_produk->update();
        return redirect('kategori_produk')->with('success', 'Kategori_produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_produk = KategoriProduk::find($id);
        $kategori_produk->delete();
        return response()->json(['status' => 'Kategori Berhasil di hapus!']);
    }
}