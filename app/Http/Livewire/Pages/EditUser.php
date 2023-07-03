<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.pages.edit-user');
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    
}
