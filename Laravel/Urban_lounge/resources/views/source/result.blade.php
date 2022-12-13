@extends('layout.app')
@section('title', 'Order')

@section('content')
    <section class="mx-96 my-96">

        <form>
            <div class="group relative z-0 mb-6 w-full">
                <input disabled type="email" name="floating_email" id="floating_email"
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    placeholder=" " />
                <label for="floating_email"
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-900 peer-focus:dark:text-blue-500">{{ $person->email }}</label>
            </div>


            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="group relative z-0 mb-6 w-full">
                    <input disabled type="text" name="floating_first_name" id="floating_first_name"
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                        placeholder=" " />
                    <label for="floating_first_name"
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-900 peer-focus:dark:text-blue-500">{{ $person->fname }}</label>
                </div>

            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="group relative z-0 mb-6 w-full">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                        placeholder=" " disabled />
                    <label for="floating_phone"
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-900 peer-focus:dark:text-blue-500">+{{ $person->tel }}</label>
                </div>
                <div class="group relative z-0 mb-6 w-full">
                    <input type="text" name="floating_company" id="floating_company"
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                        placeholder=" " disabled />
                    <label for="floating_company"
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-900 peer-focus:dark:text-blue-500">{{ $person->pcode }},
                        {{ $person->hnumber }}</label>
                </div>
            </div>
        </form>


        <div class="relative my-16 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="bg-slate-500 text-xl text-black">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            #
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            QTY
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Preview
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr class="border-b bg-white">
                            <th scope="row" class="whitespace-nowrap py-4 px-6 font-medium text-black">
                                <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                            </th>
                            <td class="py-4 px-6 text-black">
                                {{ $item->name }}
                            </td>
                            <td class="py-4 px-6 text-black">
                                {{ $item->price }}
                            </td>
                            <td class="py-4 px-6 text-center text-black">
                                {{ $item->quantity }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="Preview/{{ $item->id }}/"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500"><i
                                        class="bi bi-search"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    <form action="send-email">
                        <button>Confirm</button>
                    </form>
                </tbody>
            </table>
        </div>

        <div class="flex justify-center">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_YR4tm26ymt.json" background="transparent"
                speed="1" style="width: 300px; height: 300px; border-radius:50%;" loop autoplay></lottie-player>
        </div>

        <div class="timer">
            <p id="demo"></p>
        </div>

    </section>
@endsection
