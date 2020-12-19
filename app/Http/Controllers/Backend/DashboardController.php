<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\{User, Blog};

class DashboardController extends Controller
{
    public function __invoke()
    {
        $blog   = Blog::count();
        $admin  = User::count();
        return view('livewire.backend.dashboard.dashboard', compact('blog', 'admin'));
    }
}
