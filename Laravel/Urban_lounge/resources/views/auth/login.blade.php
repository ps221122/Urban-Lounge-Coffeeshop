@extends('layout.app')
@section('title', 'Login')
@section('content')
    <div class="login-box">
        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <h1 class="text-4xl font-semibold">Sign in or create an account</h1>
                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 text-lg text-red-800" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="user-box my-16">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="off" />
                    </div>

                    <!-- Password -->
                    <div class="class= mt-4"user-box my-16">
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>
                    <!-- Remember Me -->
                    <div class="mt-4 block">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="mt-4 flex items-center justify-end">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-gray-600 underline hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
    </div>
@endsection
