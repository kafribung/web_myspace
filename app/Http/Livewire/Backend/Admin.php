<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    
    public function render()
    {
        $users = User::where('role',1)->get();
        return view('livewire.backend.admin.admin', ['users' => $users])
            ->extends('layouts.master_dash', ['title' => 'Dashboard Admin'])
            ->section('content');
    }
}
