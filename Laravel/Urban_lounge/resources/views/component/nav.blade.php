<nav class="fixed top-0 left-0 z-20 w-full bg-white px-2 py-2.5 shadow-lg sm:px-4">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <a href="{{ route('index') }}" class="mx-0 flex items-center lg:-ml-36 lg:mr-80">
            <img src="./assets/logo.png" class="mr-3 h-10 sm:h-16" alt="Logo">
            <span class="self-center whitespace-nowrap text-xl font-medium italic text-black lg:text-5xl">Urban
                Lounge!</span>
        </a>

        <div class="flex md:order-2">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center rounded-lg p-2 text-sm text-black hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-black dark:hover:bg-gray-100 dark:focus:ring-gray-600 md:hidden"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto lg:-mr-96"
            id="navbar-sticky">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 dark:border-gray-200 dark:bg-gray-200 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium">
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex w-full items-center justify-between rounded py-2 pr-4 pl-3 font-medium text-black hover:bg-gray-100 dark:border-gray-200 dark:text-black dark:hover:bg-gray-200 dark:hover:text-blue-800 dark:focus:text-gray-400 md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-800 md:dark:hover:bg-transparent lg:text-xl">Menu
                        <svg class="ml-1 h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-100">
                        <ul class="py-1 text-sm text-black dark:text-black" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('breakfast') }}#breakfast"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Breakfast</a>
                            </li>
                            <li>
                                <a href="{{ route('pizza') }}#pizza"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Pizza</a>
                            </li>
                            <li>
                                <a href="{{ route('breakfast') }}#breakfast"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Vegan</a>
                            </li>
                            <li>
                                <a href="{{ route('pasta') }}#pasta"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Pasta</a>
                            </li>
                            <li>
                                <a href="{{ route('dinner') }}#dinner"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Dinner</a>
                            </li>
                            <li>
                                <a href="{{ route('beverage') }}#beverage"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Non-alcoholic
                                    beverage</a>
                            </li>
                            <li>
                                <a href="{{ route('alcohol') }}#alcohol"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-200 dark:hover:text-blue-800">Alcoholic
                                    beverage</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('dessert') }}#dessert"
                                class="block py-2 px-4 text-sm text-black hover:bg-gray-100 dark:text-black dark:hover:bg-gray-200 dark:hover:text-blue-800">Dessert</a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{ route('gallery') }}"
                        class="block rounded py-2 pr-4 pl-3 text-black hover:bg-gray-100 dark:border-gray-200 dark:text-black dark:hover:bg-gray-200 dark:hover:text-blue-800 md:p-0 md:hover:bg-transparent md:hover:text-blue-800 md:dark:hover:bg-transparent md:dark:hover:text-blue-800 lg:text-xl">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('events') }}"
                        class="block rounded py-2 pr-4 pl-3 text-black hover:bg-gray-100 dark:border-gray-200 dark:text-black dark:hover:bg-gray-200 dark:hover:text-blue-800 md:p-0 md:hover:bg-transparent md:hover:text-blue-800 md:dark:hover:bg-transparent md:dark:hover:text-blue-800 lg:text-xl">Events</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="block rounded py-2 pr-4 pl-3 text-black hover:bg-gray-100 dark:border-gray-200 dark:text-black dark:hover:bg-gray-200 dark:hover:text-blue-800 md:p-0 md:hover:bg-transparent md:hover:text-blue-800 md:dark:hover:bg-transparent md:dark:hover:text-blue-800 lg:text-xl">About
                        us</a>
                </li>
                <li>
                    <ul class="md:flex md:p-0">
                        <li
                            class="open-shopping-cart-box flex cursor-pointer items-center px-4 pb-2 font-medium text-black hover:font-bold hover:uppercase hover:underline md:text-lg lg:px-14">
                            <a href="/cart"><i class="bi bi-bag-fill px-2"></i></a>
                            <p class="cart-price-total-nav" id="cart-price-total-nav"> {{ Cart::getTotalQuantity() }}
                            </p>
                        </li>
                        <li>
                            <div class="flex">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-black underline dark:text-black">{{ Auth::user()->name }}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="mx-2 rounded-full border-2 border-black px-2 text-sm font-medium text-black hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300 active:bg-gray-700 sm:px-5 lg:text-xl">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="mx-2 rounded-full border-2 border-black bg-black px-4 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 active:bg-gray-700 sm:px-5 lg:text-xl">Join
                                            Now</a>
                                    @endif
                                @endauth
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- @include('components.Scart') --}}
</nav>
