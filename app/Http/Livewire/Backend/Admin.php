<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Admin extends Component
{
    public $name, $email, $oldPassword, $newPassword, $userId;
    public $updateMode = false;
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->updateMode = true;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->userId = $id;
    }

    public function update()
    {
        $data = $this->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:20|unique:users,email,' . $this->userId,
            'oldPassword' => 'required|string|min:8',
            'newPassword' => 'required|string|min:8',
        ]);
        $oldPassword    = $data['oldPassword'];
        $currentPassword= auth()->user()->password;
        if (Hash::check($oldPassword, $currentPassword)) {
            auth()->user()->update([
                'name'     => $data['name'],
                'email'    => $data['email'],
                'password' => bcrypt($data['newPassword'])
            ]);
            auth()->logout();
            return redirect('/login');
        }else  return session()->flash('msg', 'this old password cant match.');
    }

    public function render()
    {
        $users = User::where('role',1)->get();
        return view('livewire.backend.admin.admin', ['users' => $users])
            ->extends('layouts.master_dash', ['title' => 'Admin | Kafri Bung Space'])
            ->section('content');
    }
}
