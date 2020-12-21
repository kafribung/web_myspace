<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BlogReqeust;
use App\Models\Blog;

class BlogController extends Controller
{
    // Create
    public function create()
    {
        $blog = new Blog;
        return view('livewire.backend.blog.blog-create', compact('blog'));
    }

    // Store
    public function store(BlogReqeust $request)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($request->title);
        $request->user()->blogs()->create($data);
        return redirect('/blogs')->with('msg', 'Blog successfully add');
    }

    // Edit
    public function edit(Blog $blog)
    {
        return view('livewire.backend.blog.blog-edit', compact('blog'));
    }

    // update
    public function update(BlogReqeust $request, Blog $blog)
    {
        $data = $request->validated();
        $data['slug'] = \Str::slug($request->title);
        $blog->update($data);
        return redirect('/blogs')->with('msg', 'Blog successfully updated');
    }

}
