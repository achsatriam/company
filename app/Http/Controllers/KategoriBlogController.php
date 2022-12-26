<?php

namespace App\Http\Controllers;

use App\Models\KategoriBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class KategoriBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_blog = KategoriBlog::all();
        return view ('admin.kategoriblog.HomekategoriBlog',compact('kategori_blog'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategoriblog.AddKategoriBlog');
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
            'kategori_blog' => 'required',
        ]);

        $kategori_blog= new KategoriBlog();
        $kategori_blog->kategori_blog=$request->kategori_blog;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $kategori_blog->foto = $request->file('foto')->getClientOriginalName();  
        }

        $kategori_blog->save();

        return redirect('kategori_blog')->with('success', 'Kategori Blog Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_blog = KategoriBlog::find($id);
        return view('admin.kategoriblog.ShowKategoriBlog')->with('kategori_blog', $kategori_blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_blog = KategoriBlog::find($id);
        return view('admin.kategoriblog.EditKategoriBlog')->with('kategori_blog', $kategori_blog);
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
            'kategori_blog' => 'required',
        ]);

        $kategori_blog = KategoriBlog::find($id);
        $kategori_blog->kategori_blog=$request->kategori_blog;

        if ($request->file('foto')) {
            File::delete('post-images/'. $kategori_blog->foto);
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $kategori_blog->foto = $request->file('foto')->getClientOriginalName();  
        }

        $kategori_blog->update();

        return redirect('kategori_blog')->with('success', 'Kategori_blog blog berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriBlog::destroy($id);
        return response()->json(['status' => 'Kategori blog Berhasil di hapus!']);
    }
}
