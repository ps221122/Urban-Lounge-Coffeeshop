@extends('layout.app')
@section('title', 'Events')

@section('content')
    <section class="body-font text-gray-600">
        <div class="container mx-auto my-44 px-5 py-24">
            <div class="-m-4 flex flex-wrap">
                @foreach ($event as $item)
                    <form action="#" method="GET" class="mx-8 my-8 w-full p-4 md:w-1/2 lg:w-1/4">
                        <a class="relative block h-48 overflow-hidden rounded">
                            <img alt="ecommerce" class="block h-full w-full object-cover object-center"
                                src="{{ $item->image }}">
                        </a>
                        <div class="mt-4 flex flex-col items-start">
                            <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Upcomig Event</h3>
                            <h2 class="title-font text-lg font-medium text-gray-900">{{ $item->name }}</h2>
                            <p class="mt-1">€{{ $item->price }}</p>
                            <a href="preview/{{$item->id}}/">Learn More</a>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </section>

@endsection
