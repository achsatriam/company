<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view ('admin.kategori.Homekategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.AddKategori');
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
            'jenis_kategori' => 'required',
            'foto' => 'required',
        ]);

        $kategori= new kategori();
        $kategori->jenis_kategori=$request->jenis_kategori;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $kategori->foto = $request->file('foto')->getClientOriginalName();  
        }

        $kategori->save();

        return redirect('kategori')->with('success', 'Kategori Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.ShowKategori')->with('kategori', $kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.Editkategori')->with('kategori', $kategori);
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
            'jenis_kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        $kategori = Kategori::find($id);
        $kategori->jenis_kategori=$request->jenis_kategori;
        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $input['foto'] = $request->file('foto')->getClientOriginalName();  
        }
        $kategori->deskripsi=$request->deskripsi;
        $kategori->update();
        return redirect('kategori')->with('success', 'kategori berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::destroy($id);
        return redirect('kategori')->with('success', 'kategori Deleted!');
    }
}