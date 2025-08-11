<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        $data['slug'] = Str::slug($data['titulo']);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Post criado com sucesso!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'imagem' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        $data['slug'] = Str::slug($data['titulo']);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Post atualizado com sucesso!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Post excluído com sucesso!');
    }

    public function siteIndex()
    {

        $seo = [
            'title' => 'Instituto Soares',
            'description' => null,
            'favicon' => null
        ];

        $blogs = Blog::where('status', 1)->orderBy('id', 'ASC')->paginate(20);

        return view('site.blogs', compact('seo','blogs'));


    }

    public function siteBlogs($url = false)
    {

        if($url){
            redirect('/');
        }

        $blog = Blog::where('slug', $url)->first();
        $recents = Blog::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();

        $seo = [
            'title' => 'Instituto Soares',
            'description' => null,
            'favicon' => null
        ];

        return view('site.blog', compact('seo','blog','recents'));
    }

}
