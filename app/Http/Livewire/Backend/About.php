<?php

namespace App\Http\Livewire\Backend;

use App\Models\About as ModelsAbout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class About extends Component
{
    public $description, $aboutId;

    public function store()
    {
        if (ModelsAbout::count() >= 1) {
            return session()->flash('msg', 'About max 1');
        }
        $data = $this->validation(); 
        Auth::user()->about()->create($data);
        $this->description = '';
        session()->flash('msg', 'About Successfully add');
    }

    public function edit($id)
    {
        $about = ModelsAbout::findOrFail($id);
        $this->description = $about->description;
        $this->aboutId = $id;
    }

    public function update()
    {
        $data =  $this->validation();
        $about = ModelsAbout::findOrFail($this->aboutId);
        $about->update($data);
        $this->description = '';
        session()->flash('msg', 'About Successfully updated');
    }
    // Validasi
    public function validation()
    {
        return $this->validate([
            'description' => ['required'],
        ]);
    }

    public function render()
    {
        $abouts =  ModelsAbout::with('user')->get();
        return view('livewire.backend.about.about', compact('abouts'))
        ->extends('layouts.master_dash', ['title' => 'Abouts | Kafri Bung Space'])
        ->section('content');
    }
}
