<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    // READ
    public function index()
    {
        $blogs = Blog::with('user')->where('status', 1)->paginate(5);
        return BlogResource::collection($blogs);
    }

    //SHOW
    public function show(Blog $blog)
    {
        return BlogResource::make($blog);
    }
}
