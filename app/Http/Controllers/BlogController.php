<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view ('admin.blog.HomeBlog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.Add');
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
            'nama_blog' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required'
        ]);

        $blog= new Blog();
        $blog->nama_blog=$request->nama_blog;
        $blog->harga=$request->harga;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $blog->foto = $request->file('foto')->getClientOriginalName();  
        }

        $blog->deskripsi=$request->deskripsi;
                           
        return redirect('blog')->with('success', 'Blog Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.ShowBlog')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.EditBlog')->with('blog', $blog);
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
            'nama_blog' => 'required',
            'deskripsi' => 'required'
        ]);

        $blog = Blog::find($id);
        $blog->nama_blog=$request->nama_blog;
        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $input['foto'] = $request->file('foto')->getClientOriginalName();  
        }
        $blog->deskripsi=$request->deskripsi;
        $blog->update();
        return redirect('blog')->with('success', 'Blog berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blog')->with('success', 'Blog Deleted!');
    }
}