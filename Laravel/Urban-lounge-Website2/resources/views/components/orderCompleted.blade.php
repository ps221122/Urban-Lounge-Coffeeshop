@extends('layout.app')
@section('title', 'Delivered')

@section('content')
    <div class="m-96">
        <h1>Thank you for your purchase at Urban lounge!</h1>
        <p>Hope to see you soon.</p>
        {{-- <lottie-player src="/assets/check-mark.json" background="transparent" speed="0.5"
            style="width: 300px; height: 300px;" loop autoplay></lottie-player> --}}
        <lottie-player src="/assets/tasty.json" background="transparent" speed="0.5" style="width: 300px; height: 300px;"
            loop autoplay></lottie-player>
    </div>

@endsection
