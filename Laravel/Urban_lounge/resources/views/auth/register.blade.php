@extends('layout.app')
@section('title', 'Register')
@section('content')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">

            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf


                <!-- image -->
                <x-input id="image" class="mt-1 block w-full" type="hidden" name="image"
                    value="https://cdn.pixabay.com/photo/2015/11/17/13/13/puppy-1047521_960_720.jpg" />





                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                        autocomplete="new-password" />

                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="mt-1 block w-full" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
@endsection
