<?php

namespace App\Livewire\Navigation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TopNavigation extends Component
{
    public function logoutUser()
    {
        Auth::logout();

        return $this->redirect('/', navigate: true);
    }


    public function render()
    {
        return view('livewire.navigation.top-navigation');
    }
}
