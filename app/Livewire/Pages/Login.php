<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Login extends Component
{
    public string $email = '';
    public string $password = '';

    // Log the user in
    public function login()
    {
        $this->validate([
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Check if the user has too many login attempts
        if (RateLimiter::tooManyAttempts(request()->ip(), 10)) {
            $seconds = RateLimiter::availableIn(request()->ip(), 10);

            throw ValidationException::withMessages(['login_failed' => "Too many login attempts. Please try again in $seconds seconds."]);
        }

        // Get user by email
        $user = User::where('email', $this->email)->first();

        // Check if the user exists and the password is correct
        if (!$user || !Hash::check($this->password, $user->password)) {
            RateLimiter::hit(request()->ip());

            // Set validation error to be viewed in blade
            throw ValidationException::withMessages(['login_failed' => 'Invalid email or password. Please try again.']);
        }

        // Clear login attempts
        RateLimiter::clear(request()->ip());

        // Login the user
        Auth::login($user);

        return $this->redirect('/', navigate: true);
    }


    #[Title('Login')]
    public function render()
    {
        return view('livewire.pages.login');
    }
}
