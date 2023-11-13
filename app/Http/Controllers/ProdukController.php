<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\File; 

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::with('kategori_produk')->paginate();
        return view ('admin.produk.HomeProduk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        return view('admin.produk.AddProduk',compact ('kategori_produk'));
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
            'nama_produk' => 'required',
            'harga' => 'required',
            'kategori_produk_id' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);

        $produk= new Produk();

        $produk->nama_produk=$request->nama_produk;

        $produk->harga=$request->harga;

        $status='';
        if($request->status)
        {
            $status='Aktif';
        }else{
            $status='Nonaktif';
        }

        $show='';
        if($request->show)
        {
            $show='Aktif';
        }else{
            $show='Nonaktif';
        }

        $produk->status=$status;

        $produk->show=$show;
        
        $produk->kategori_produk_id=$request->kategori_produk_id;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();  
        }

        $produk->deskripsi=$request->deskripsi;

        $produk->save();
                                                                            
        return redirect('produk')->with('success', 'Produk Berhasil Ditambah!');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        $kategori_produk = KategoriProduk::all();
        return view('admin.produk.ShowProduk', compact('produk', 'kategori_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::with('kategori_produk')->find($id);
        return view('admin.produk.EditProduk', compact('produk', 'kategori_produk'));
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
            'nama_produk' => 'required',
            'harga' => 'required',
            'kategori_produk_id'  => 'required',
            'deskripsi' => 'required'
        ]);

        $produk = Produk::find($id);

        $produk->nama_produk=$request->nama_produk;
        
        $produk->harga=$request->harga;
        
        $status='';
        if($request->status)
        {
            $status='Aktif';
        }else{
            $status='Nonaktif';
        }

        $show='';
        if($request->show)
        {
            $show='Aktif'; 
        }else{
            $show='Nonaktif';
        }
        
        $produk->status=$status;

        $produk->show=$show;

        $produk->kategori_produk_id=$request->kategori_produk_id;

        if ($request->file('foto')) {
            File::delete('post-images/'. $produk->foto);
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();  
        }

        $produk->deskripsi=$request->deskripsi;
        
        $produk->update();

        return redirect('produk')->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        File::delete('post-images/' . $produk->foto); 
        $produk->delete();
        return response()->json(['status' => 'Produk Berhasil di hapus!']);
    }
}