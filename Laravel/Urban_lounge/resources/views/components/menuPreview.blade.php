@extends('layout.app')
@section('title', 'Preview')
@section('content')
    <section class="body-font my-14 overflow-hidden text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="mx-6 sm:my-6 lg:my-3">
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_4txmtwpf.json" background="transparent"
                    speed="0.5" style="width: 300px; height: 300px; border-radius:50%;" loop autoplay
                    class="hidden lg:block"></lottie-player>
            </div>
            <div class="mx-auto flex flex-wrap lg:w-4/5">
                <img alt="ecommerce" class="h-64 w-full rounded object-cover object-center lg:h-auto lg:w-1/2"
                    src="{{ $menu->image }}">
                <div class="mt-6 w-full lg:mt-0 lg:w-1/2 lg:py-6 lg:pl-10">
                    <h1 class="title-font mb-1 text-3xl font-medium text-gray-900">{{ $menu->name }}</h1>
                    <div class="mb-4 flex">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="h-4 w-4 text-yellow-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="h-4 w-4 text-yellow-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="h-4 w-4 text-yellow-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="h-4 w-4 text-yellow-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="h-4 w-4 text-yellow-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class="ml-3 text-gray-600">4 Reviews</span>
                        </span>
                        <span class="space-x-2s ml-3 flex border-l-2 border-gray-200 py-2 pl-3">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="h-5 w-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="h-5 w-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="h-5 w-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <p class="leading-relaxed">{{ $menu->description }}</p>
                    <div class="flex justify-between">
                        <span class="title-font text-2xl font-medium text-gray-900">€{{ $menu->price }}</span>

                        <div
                            class="ml-4 inline-flex h-14 w-14 items-center justify-center rounded-full border-0 bg-red-500 p-0">
                            <form action="/cart" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $menu->id }}" name="id">
                                <input type="hidden" value="{{ $menu->name }}" name="name">
                                <input type="hidden" value="{{ $menu->price }}" name="price">
                                <input type="hidden" value="{{ $menu->category }}" name="category">
                                <input type="hidden" value="{{ $menu->image }}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="add-button text-xl text-white" id="add-button"><i
                                        class="bi bi-bag-plus-fill"></i><button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
