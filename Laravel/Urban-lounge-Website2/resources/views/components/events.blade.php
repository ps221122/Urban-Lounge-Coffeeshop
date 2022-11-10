@extends('layout.app')
@section('title', 'Events')

@section('content')
    <section class="body-font text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="mb-20 flex w-full flex-col text-center">
                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">Upcoming events*</h1>
                <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
                    bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="-m-4 flex flex-wrap">
                @foreach ($event as $item)
                    <div class="p-4 sm:w-1/2 lg:w-1/3">
                        <div class="relative flex">
                            <img alt="gallery"
                                class="absolute inset-0 h-full w-full flex-shrink-0 rounded-md object-cover object-center"
                                src="{{ $item->image }}">
                            <div
                                class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                                <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500"><i
                                        class="bi bi-calendar-event"></i>
                                    {{ $item->date }}</h2>
                                <h1 class="title-font mb-3 text-lg font-medium text-gray-900">{{ $item->name }}</h1>
                                <p class="leading-relaxed">There are <em
                                        class="px-1 text-lg text-orange-700">{{ $item->ticket }}</em> tickets
                                    left. So hurry and get your.</p>
                                <p class="leading-relaxed">{{ $item->description }}</p>
                                <button
                                    class="title-font rounded border border-red-600 bg-white px-5 py-2 text-lg font-medium text-gray-900 hover:bg-red-300 hover:text-xl hover:font-bold"><i
                                        class="bi bi-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
