<nav class="font-sans shadow-xl shadow-gray-300" x-data="{ navbarOpen: false }">

    <div class="flex flex-wrap items-center justify-between py-2 px-2 lg:mx-1 lg:space-x-8">

        <div class="inline-flex items-center tracking-wider">
            <a href="{{ route('index') }}">
                <img src="./assets/logo.png" alt="logo-image" class="h-24" />
            </a>
            <h1 class="font-sans text-3xl font-medium italic">Urban Lounge!</h1>
        </div>




        <button
            class="borrder ml-auto inline-flex h-10 w-10 items-center justify-center rounded-md text-black outline-none focus:outline-none lg:hidden"
            @click="navbarOpen = !navbarOpen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>



        <div class="mt-2 w-full lg:mt-0 lg:inline-flex lg:w-auto"
            :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
            <ul class="flex flex-col space-y-8 lg:flex-row lg:items-center lg:space-x-2 lg:space-y-0">



                {{-- dropdown --}}
                <li class="relative" x-data="{ dropdownOpen: false }">
                    <button
                        class="flex w-full rounded-md px-20 py-2 text-lg font-medium text-black outline-none hover:font-bold hover:text-sky-400 focus:outline-none"
                        @click="dropdownOpen = !dropdownOpen">Menu</button>
                    {{-- drop menu --}}
                    <div class="right-0 rounded-md bg-white p-2 lg:absolute"
                        :class="{ 'hidden': !dropdownOpen, 'flex flex-col': dropdownOpen }">
                        <ul class="space-y-2 lg:w-48">
                            <li><a href="{{ route('breakfast') }}"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Breakfast</a>
                            </li>
                            <li><a href="{{ route('pizza') }}#pizza"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Pizza</a>
                            </li>
                            <li><a href="{{ route('vegan') }}#vegan"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Vegan
                                    <ion-icon name="leaf-outline" class="text-green-700"></ion-icon>
                                </a>
                            </li>
                            <li><a href="{{ route('pasta') }}#pasta"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Pasta</a>
                            </li>
                            <li><a href="{{ route('dinner') }}#dinner"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Dinner</a>
                            </li>
                            <li><a href="{{ route('beverage') }}#beverage"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Beverage</a>
                            </li>
                            <li><a href="{{ route('alcohol') }}#alcohol"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Alcohol</a>
                            </li>
                            <li><a href="{{ route('dessert') }}#alcohol"
                                    class="flex rounded-md p-2 font-medium text-gray-600 hover:bg-gray-200 hover:text-black">Dessert</a>
                            </li>
                        </ul>
                    </div>
                    {{-- drop menu --}}
                </li>

                <li><a class="flex rounded-md px-20 py-2 text-lg font-medium text-black hover:font-bold hover:text-sky-400"
                        href="{{ route('gallery') }}">Gallery</a>
                </li>


                <li><a class="flex rounded-md px-20 py-2 text-lg font-medium text-black hover:font-bold hover:text-sky-400"
                        href="{{ route('events') }}">Events</a>
                </li>


                <li><a class="flex rounded-md px-20 py-2 text-lg font-medium text-black hover:font-bold hover:text-sky-400"
                        href="{{ route('about') }}">About us</a>
                </li>


                <li>
                    <a class="flex rounded-md px-4 py-2 text-lg font-medium text-black hover:font-bold"
                        href="#"><i class="bi bi-search"></i>
                    </a>
                </li>

                <li class="open-shopping-cart-box flex cursor-pointer rounded-md px-20 py-2 text-lg font-medium text-black hover:font-bold hover:uppercase hover:underline"
                    onclick="myFunction()">
                    <i class="bi bi-bag-fill px-2"></i>
                    <p class="cart-price-total-nav" id="cart-price-total-nav">0.00</p>
                </li>
                <li class="lg:ml-auto">
                    <div class="flex py-8 lg:mx-3 lg:mt-auto">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 underline dark:text-gray-500">{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="mx-2 rounded-full border-2 border-black px-5 font-medium hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300 active:bg-gray-700">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="mx-2 rounded-full border-2 border-black bg-black px-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 active:bg-gray-700">Join
                                    Now</a>
                            @endif
                        @endauth



                    </div>
                </li>

            </ul>
        </div>

    </div>
</nav>
