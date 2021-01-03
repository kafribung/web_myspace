<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show(Blog $blog)
    {
        try {
            $view = $blog->view;
            return response(['data' => ['view' => $view] ], 200);
        } catch (\Throwable $th) {
            return response(['msg' => $th->getMessage()],400);
        }
    }
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'view' => ['required', 'integer']
        ]);
        try {
            $blog->update([
                'view' => $request->view,
            ]);
            return response(['msg' => 'he item was created successfully'], 201);
        } catch (\Throwable $th) {
            return response(['msg' => $th->getMessage()],400);
        }
    }
}
