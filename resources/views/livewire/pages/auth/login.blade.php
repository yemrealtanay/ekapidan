<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="max-w-md mx-auto mt-16 bg-white shadow-lg rounded-lg p-8">

    {{-- Logo --}}
    <div class="flex justify-center mb-6">
        <a href="/" wire:navigate>
            <img src="{{ asset('images/ekapidan.png') }}" alt="Ekapıdan" class="h-14">
        </a>
    </div>

    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Giriş Yap</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Social Login Placeholder --}}
    <div class="space-y-3 mb-6">
        <button class="w-full flex items-center justify-center gap-3 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow transition">
            <i class="fab fa-google"></i>
            Google ile Giriş Yap
        </button>
        <button class="w-full flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow transition">
            <i class="fab fa-facebook-f"></i>
            Facebook ile Giriş Yap
        </button>
    </div>

    <form wire:submit="login" class="space-y-6">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Şifre')" />
            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me + Forgot -->
        <div class="flex items-center justify-between">
            <label for="remember" class="flex items-center text-sm text-gray-600">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 mr-2">
                Beni Hatırla
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}" wire:navigate>
                    Şifrenizi mi unuttunuz?
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="flex justify-end">
            <x-primary-button class="w-full justify-center">
                Giriş Yap
            </x-primary-button>
        </div>
    </form>
</div>

