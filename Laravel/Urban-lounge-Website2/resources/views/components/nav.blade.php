<nav class="shadow-xl font-sans shadow-gray-300 sticky" x-data="{ navbarOpen: false }">

    <div class=" lg:mx-2 py-2 flex flex-wrap px-2 lg:space-x-8 items-center justify-between">

        <div class="inline-flex tracking-wider items-center">
            <a href="{{ route('index') }}">
                <img src="./assets/logo.png" alt="logo-image" class="h-28" />
            </a>
            <h1 class="font-sans italic text-3xl font-medium">Urban Lounge Coffeeshop</h1>
        </div>




        <button
            class="lg:hidden inline-flex items-center justify-center borrder h-10 w-10 text-black rounded-md outline-none focus:outline-none ml-auto"
            @click="navbarOpen = !navbarOpen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>



        <div class=" lg:inline-flex lg:w-auto mt-2 w-full  lg:mt-0"
            :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
            <ul class="flex lg:flex-row lg:space-x-2  flex-col space-y-8  lg:space-y-0  lg:items-center">



                {{-- dropdown --}}
                <li class="relative" x-data="{ dropdownOpen: false }">
                    <button
                        class="w-full outline-none focus:outline-none flex px-20 py-2 font-medium text-black hover:text-sky-400 rounded-md hover:font-bold text-lg"
                        @click="dropdownOpen = !dropdownOpen">Menu</button>
                    {{-- drop menu --}}
                    <div class="lg:absolute bg-white right-0 rounded-md p-2"
                        :class="{ 'hidden': !dropdownOpen, 'flex flex-col': dropdownOpen }">
                        <ul class="space-y-2 lg:w-48">
                            <li><a href="{{ route('breakfast') }}"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Breakfast</a>
                            </li>
                            <li><a href="{{ route('pizza') }}#pizza"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Pizza</a>
                            </li>
                            <li><a href="{{ route('vegan') }}#vegan"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Vegan
                                    <ion-icon name="leaf-outline" class="text-green-700"></ion-icon>
                                </a>
                            </li>
                            <li><a href="{{ route('pasta') }}#pasta"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Pasta</a>
                            </li>
                            <li><a href="{{ route('dinner') }}#dinner"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Dinner</a>
                            </li>
                            <li><a href="{{ route('beverage') }}#beverage"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Beverage</a>
                            </li>
                            <li><a href="{{ route('alcohol') }}#alcohol"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Alcohol</a>
                            </li>
                        </ul>
                    </div>
                    {{-- drop menu --}}
                </li>

                <li><a class="flex px-20 py-2 font-medium text-black hover:text-sky-400 rounded-md hover:font-bold text-lg"
                        href="">About us</a>
                </li>

                <li class="flex px-20 py-2 font-medium text-black hover:underline hover:uppercase rounded-md hover:font-bold text-lg cursor-pointer open-shopping-cart-box"
                    onclick="myFunction()">
                    <i class="bi bi-bag-fill px-2"></i>
                    <p class="cart-price-total-nav" id="cart-price-total-nav">0.00</p>
                </li>
                <li class="lg:ml-auto">
                    <div class="flex py-8 lg:mx-3  lg:mt-auto">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="mx-2 border-2 border-black px-5 rounded-full font-medium hover:bg-gray-300 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="mx-2 border-2 border-black px-5 rounded-full bg-black text-white font-medium hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Join
                                    Now</a>
                            @endif
                        @endauth



                    </div>
                </li>

            </ul>
        </div>

    </div>
</nav>
