@extends('layout.app')
@section('title', 'Menu')
@section('content')
    <div class="openingBoxContainer mt-20 md:mt-40">
        <p class="px-2 text-lg sm:text-2xl md:text-xl" id="sign"></p>
    </div>

    <section class="body-font menulist -mt-28 flex items-baseline text-gray-600 lg:mt-24">
        <div class="container mx-auto py-2 px-5 lg:py-24">

            <div class="outer-menu-box lg:my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="breakfast">Breakfast</h1>
                    <hr>
                </div>

                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($breakfast as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce" class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">{{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box lg:my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="pizza">Pizza</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($pizza as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce" class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">{{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="vegan">Vegan</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($vegan as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce" class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">{{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="pasta">Pasta</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($pasta as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce" class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">{{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="dinner">Dinner</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($dinner as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce"
                                    class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">
                                        {{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="beverage">Non-alcoholic beverage</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($beverage as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce"
                                    class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">
                                        {{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="alcohol">Alcoholic beverage</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($alcohol as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce"
                                    class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">
                                        {{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="dessert">Dessert</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
                    @foreach ($dessert as $item)
                        <div class="w-full p-12 md:w-1/2 lg:w-1/3">
                            <a class="relative block h-48 overflow-hidden rounded">
                                <img alt="ecommerce"
                                    class="store-image-box block h-full w-full object-cover object-center"
                                    src="{{ $item->image }}">
                            </a>
                            <div class="flex items-center justify-between">
                                <div class="store-info-box mt-4">
                                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-400">
                                        {{ $item->category }}
                                    </h3>
                                    <h2 class="title-font text-lg font-medium text-gray-900" id="items-name">
                                        {{ $item->name }}
                                    </h2>
                                    <p class="mt-1">€{{ $item->price }}</p>
                                    <p class="hidden">0</p>
                                </div>
                                <div
                                    class="add-button-div mt-16 flex h-10 w-16 justify-center rounded-full bg-red-500 hover:bg-red-800">
                                    <button class="add-button text-xl text-white" id="add-button"><i
                                            class="bi bi-bag-plus-fill"></i><button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        @include('components.cart')
    </section>

    {{-- @include('components.Scart') --}}
@endsection
