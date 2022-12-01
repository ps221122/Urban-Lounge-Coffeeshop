@extends('layout.app')
@section('title', 'Events')

@section('content')
    <div class="container mx-auto my-40 px-6">
        <h3 class="text-2xl font-medium text-gray-700">Upcoming events.</h3>
        <div class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($event as $product)
                <div class="my-10 mx-16 w-full max-w-sm overflow-hidden rounded-md shadow-md">
                    <img src="{{ url($product->image) }}" alt="" class="max-h-64 w-full">
                    <div class="flex w-full items-end justify-end bg-cover">

                    </div>
                    <div class="px-4 py-3">
                        <h3 class="uppercase text-gray-700">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="rounded bg-blue-800 px-4 py-2 text-white">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

@endsection
