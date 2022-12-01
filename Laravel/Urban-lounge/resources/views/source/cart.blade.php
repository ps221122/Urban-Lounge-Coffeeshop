@extends('layout.app')
@section('title', 'Cart')

@section('content')
    <main class="my-32">
        <div class="container mx-auto my-8 px-6">
            <div class="my-6 flex justify-center">
                <div class="pin-r pin-y flex w-full flex-col bg-white p-8 text-gray-800 shadow-lg md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="mb-3 rounded bg-green-400 p-4">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-bold modal__header my-12 text-3xl">Summary</h3>
                    <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0" id="table1">
                            <thead>
                                <tr class="h-12">
                                    <th class="hidden md:table-cell"></th>
                                    <th class="text-left">Name</th>
                                    <th class="pl-5 text-left lg:pl-0 lg:text-right">
                                        <span class="lg:hidden" title="Quantity">Qtd</span>
                                        <span class="hidden lg:inline">Quantity</span>
                                    </th>
                                    <th class="hidden text-right md:table-cell"> price</th>
                                    <th class="hidden text-right md:table-cell"> Remove </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="hidden pb-4 md:table-cell">
                                            <a href="#">
                                                <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                                    alt="Thumbnail">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                            </a>
                                        </td>
                                        <td class="mt-6 justify-center md:flex md:justify-end">
                                            <div class="h-10 w-28">
                                                <div class="relative flex h-8 w-full flex-row">

                                                    <form action="{{ route('cart.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <div class="flex">
                                                            <input type="number" name="quantity"
                                                                value="{{ $item->quantity }}"
                                                                class="w-12 bg-gray-300 text-center" />
                                                            <button type="submit"
                                                                class="ml-2 rounded-md bg-blue-500 px-2 pb-2 text-white">update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <span class="text-sm font-medium lg:text-base">
                                                €{{ $item->price }}
                                            </span>
                                        </td>
                                        <td class="hidden text-right md:table-cell">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button
                                                    class="rounded-full bg-red-400 px-4 py-2 text-white hover:bg-red-700"><i
                                                        class="bi bi-trash3-fill"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="my-8 text-end text-lg underline">
                            Total: €{{ Cart::getTotal() }}
                        </div>
                        <div class="flex justify-around">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="rounded-lg bg-red-300 px-6 py-2 text-red-800">Remove All Cart</button>
                            </form>

                            <div>
                                <button
                                    class="btn-checkout rounded-lg bg-green-500 px-12 py-2 text-lime-800">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.checkoutForm')
        </div>
    </main>
@endsection
