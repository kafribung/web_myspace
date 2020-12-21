<?php

namespace App\Http\Livewire\Backend;

use App\Models\Blog;
use Livewire\Component;

class BlogCreate extends Component
{
    public $title, $description;

    public function store()
    {
        $data = $this->validate([
            'title'       => 'required|string|min:3|max:30,unique:blogs,title',
            'description' => 'required|string',
        ]);
        dd($data);
        // auth()->user()->blogs()->create($data);
        // session()->flash('msg', 'Blog successfully add');
        // return redirect('/blogs');
    }

    public function render()
    {
        $blog = new Blog;
        return view('livewire.backend.blog.blog-create', compact('blog'))
        ->extends('layouts.master_dash', ['title' => 'Dashboard Blogs Create'])
        ->section('content');
    }
}
