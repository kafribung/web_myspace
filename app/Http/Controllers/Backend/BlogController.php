<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BlogReqeust;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create()
    {
        $blog = new Blog;
        return view('livewire.backend.blog.blog-create', compact('blog'));
    }

    public function store(BlogReqeust $request)
    {
        $data = $request->validated();
        $request->user()->blogs()->create($data);
        return redirect('/blogs')->with('msg', 'Blog successfully add');
    }
}
