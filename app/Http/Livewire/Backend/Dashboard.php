<?php

namespace App\Http\Livewire\Backend;

use App\Models\{User, Blog};
use Livewire\Component;

class Dashboard extends Component
{
    public $blog;
    public $admin;

    public function mount()
    {
        $this->blog = Blog::count();
        $this->admin= User::count();
    }

    public function render()
    {
        return view('livewire.backend.dashboard.dashboard');
    }

}
