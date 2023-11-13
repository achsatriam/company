<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\KategoriBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::with('kategori_blog')->paginate();
        return view ('admin.blog.HomeBlog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_blog = KategoriBlog::all();
        return view('admin.blog.AddBlog', compact('kategori_blog'));
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
            'tanggal_blog' => 'required',
            'kategori_blog_id' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png'
        ]);
        
        $show='';
        if($request->show)
        {
            $show='Aktif';
        }else{
            $show='Nonaktif';
        }
        
        $blog= new Blog();
        $blog->nama_blog=$request->nama_blog;
        $blog->tanggal_blog=$request->tanggal_blog;
        $blog->show=$show;
        $blog->kategori_blog_id=$request->kategori_blog_id;

        if ($request->file('foto')) {
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $blog->foto = $request->file('foto')->getClientOriginalName();  
        }

        $blog->deskripsi=$request->deskripsi;

        $blog->save();
                           
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
        $kategori_blog = KategoriBlog::all();
        return view('admin.blog.ShowBlog', compact('blog', 'kategori_blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_blog = KategoriBlog::all();
        $blog = Blog::with('kategori_blog')->find($id);
        return view('admin.blog.EditBlog', compact('blog', 'kategori_blog'));
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
            'tanggal_blog' => 'required',
            'kategori_blog_id'  => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,png'
        ]);

        
        $blog = Blog::find($id);

        $blog->nama_blog=$request->nama_blog;

        $blog->tanggal_blog=$request->tanggal_blog;

        $show='';
        if($request->show)
        {
            $show='Aktif';
        }else{
            $show='Nonaktif';
        }

        $blog->show=$show;
        
        $blog->kategori_blog_id=$request->kategori_blog_id;

        if ($request->file('foto')) {
            File::delete('post-images/'. $blog->foto);
            $request->file('foto')->move('post-images/', $request->file('foto')->getClientOriginalName());
            $blog->foto = $request->file('foto')->getClientOriginalName();  
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
        $blog = Blog::find($id);
        File::delete('post-images/' . $blog->foto); 
        $blog->delete();
        return response()->json(['status' => 'Blog Berhasil di hapus!']);
    }
}