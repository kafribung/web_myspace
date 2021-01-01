<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Blog extends Component
{
    public function delete($id)
    {
        $data = \App\Models\Blog::findOrFail($id);
        $data->delete();
        session()->flash('msg', 'Blog Delete Succesfully');
    }

    public function active($id)
    {
        \App\Models\Blog::findOrFail($id)->update([
            'active' => 1
        ]);
        session()->flash('msg', 'Blog active status');
    }
    public function render()
    {
        $blogs = \App\Models\Blog::with('user')->latest()->get();
        return view('livewire.backend.blog.blog', compact('blogs')) 
        ->extends('layouts.master_dash', ['title' => 'BLogs | Kafri Bung Space'])
        ->section('content');
    }
}
