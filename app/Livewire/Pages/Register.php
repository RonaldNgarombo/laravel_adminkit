<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Register extends Component
{
    public string $name = "";
    public string $email = "";
    public string $password = "";


    // Register new user
    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|max:255',
        ]);

        RateLimiter::hit(request()->ip());

        // Check if the user has too many registration attempts
        if (RateLimiter::tooManyAttempts(request()->ip(), 10)) {
            $seconds = RateLimiter::availableIn(request()->ip(), 10);

            throw ValidationException::withMessages(['registration_failed' => "Too many register attempts. Please try again in $seconds seconds."]);
        }

        // Create a new user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Clear login attempts
        RateLimiter::clear(request()->ip());

        // Log the user in after registration
        Auth::login($user);

        return $this->redirect('/', navigate: true);
    }


    #[Title('Register')]
    public function render()
    {
        return view('livewire.pages.register');
    }
}
