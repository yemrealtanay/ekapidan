<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="max-w-md mx-auto mt-16 bg-white shadow-lg rounded-lg p-8">

    {{-- Logo --}}
    <div class="flex justify-center mb-6">
        <a href="/" wire:navigate>
            <img src="{{ asset('images/ekapidan.png') }}" alt="Ekapıdan" class="h-14">
        </a>
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Kayıt Ol</h2>

    {{-- Social Login Buttons --}}
    <div class="space-y-3 mb-6">
        <button class="w-full flex items-center justify-center gap-3 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow transition">
            <i class="fab fa-google"></i>
            Google ile Kayıt Ol
        </button>
        <button class="w-full flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow transition">
            <i class="fab fa-facebook-f"></i>
            Facebook ile Kayıt Ol
        </button>
    </div>

    {{-- Divider --}}
    <div class="flex items-center justify-center my-6">
        <span class="border-t border-gray-300 w-full"></span>
        <span class="mx-4 text-gray-400 text-sm">veya</span>
        <span class="border-t border-gray-300 w-full"></span>
    </div>

    {{-- Register Form --}}
    <form wire:submit="register" class="space-y-6">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Ad Soyad')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Şifre')" />
            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Şifreyi Onayla')" />
            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between">
            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('login') }}" wire:navigate>
                Zaten hesabın var mı?
            </a>

            <x-primary-button>
                Kayıt Ol
            </x-primary-button>
        </div>
    </form>
</div>

