<?php

namespace App\Http\Livewire\Backend;

use App\Models\{User, Blog};
use Livewire\Component;

class Dashboard extends Component
{
    public $blog, $admin;
    public function mount()
    {
        $this->blog = Blog::count();
        $this->admin= User::count();
    }

    public function render()
    {
        return view('livewire.backend.dashboard.dashboard')
            ->extends('layouts.master_dash', ['title' => 'Dashboard | Kafri Bung Space'])
            ->section('content');
    }
}
