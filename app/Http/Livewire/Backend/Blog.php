<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogs = \App\Models\Blog::with('user')->latest()->get();
        return view('livewire.backend.blog.blog', compact('blogs')) 
        ->extends('layouts.master_dash', ['title' => 'Dashboard Blogs'])
        ->section('content');
    }
}
