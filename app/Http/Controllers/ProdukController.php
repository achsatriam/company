<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
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
        $produk = Produk::all();
        return view ('admin.produk.HomeProduk',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.produk.Add');
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
            'foto' => 'image',
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

        $produk->status=$status;
        $produk->deskripsi=$request->deskripsi;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();  
        }

        $produk->save();
                                                                          
        return redirect('admin')->with('success', 'Produk Berhasil Ditambah!');
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
        return view('admin.produk.Show')->with('produk', $produk);
        // echo 'ok';
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
        $produk = Produk::find($id);
        return view('admin.produk.Edit')->with('produk', $produk);
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
            'deskripsi' => 'required'
        ]);

        
        $status='';
        if($request->status)
        {
            $status='Aktif';
        }else{
            $status='Nonaktif';
        }

        $produk = Produk::find($id);

        $produk->status = $status;
        
        $produk->nama_produk=$request->nama_produk;
        $produk->harga=$request->harga;
        $produk->status=$status;
        if ($request->file('foto')) {
            File::delete('post-images/'. $produk->foto);
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();  
        }
        $produk->deskripsi=$request->deskripsi;
        $produk->update();

        return redirect('admin')->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::destroy($id);
        // return redirect('admin')->with('success', 'Product Deleted!');
        return response()->json(['status' => 'produk Berhasil di hapus!']);
    }
}