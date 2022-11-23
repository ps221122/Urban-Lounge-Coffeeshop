@extends('layout.app')
@section('title', 'Events')

@section('content')
    <section class="body-font mt-14 flex text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="mb-20 flex w-full flex-col text-center">
                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">Upcoming events*</h1>
                <p class="mx-auto text-base leading-relaxed lg:w-2/3">There are several options you can consider like
                    “Something Big is Coming Your Way”, “Be The First To Know”, or “Drop By Again Soon”. You can also ask
                    teaser questions that can capture their interests like “Are You Ready For This?”, “Do You Have What it
                    Takes?” and so much more.</p>
            </div>

            <div class="-m-4 flex flex-wrap">
                @foreach ($event as $item)
                    <form class="p-4 sm:w-1/2 lg:w-1/3" action="/test">
                        <div class="relative flex">
                            <input value="{{ $item->id }}" type="number" name="id" class="h-2 w-2" />

                            <input type="image" name="image" alt="gallery"
                                class="absolute inset-0 h-full w-full flex-shrink-0 rounded-md object-cover object-center"
                                src="{{ $item->image }}">

                            <div
                                class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                                <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500"><i
                                        class="bi bi-calendar-event"></i>
                                    {{ $item->date }}</h2>


                                <input name="name" type="text"
                                    class="title-font mb-3 w-full border-none text-base font-medium text-gray-900"
                                    value="{{ $item->name }}">

                                <div class="flex">
                                    <input class="w-8 border-none text-red-600 hover:border-none focus:border-none"
                                        type="text" name="tickets" id="tickets" value="{{ $item->ticket }}" readonly>
                                    <p>tickets available</p>
                                </div>

                                <p class="leading-relaxed">{{ $item->description }}</p>
                                <input class="mx-4 w-28 font-semibold" type="text" name="price" id="e-price"
                                    value="€ {{ $item->price }} p.p">


                                <button
                                    class="title-font rounded border border-red-600 bg-white px-5 py-2 text-lg font-medium text-gray-900 hover:bg-red-300 hover:text-xl hover:font-bold">
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
        {{-- @include('components.cart') --}}
    </section>
@endsection
