@extends('layout.app')
@section('title', '')
@section('content')
    <div class="min-h-screen bg-gray-100 lg:mt-20">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                {{ $header ?? '' }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <main class="sm:my-24 sm:w-max">
            {{ $slot }}
        </main>
    </div>
@endsection
