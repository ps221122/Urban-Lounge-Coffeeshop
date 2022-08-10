{{-- <nav class="shadow-lg">
    <div class="m-4 flex items-center justify-between">


        <div class="inline-flex tracking-wider items-center">
            <a href="#">
                <img src="./assets/logo.png" alt="logo-image" class="h-28" />
            </a>
            <h1 class="font-sans italic text-3xl font-medium">Urban Lounge Coffeeshop</h1>
        </div>



        
        <div class="flex justify-evenly">
            <p class="mx-2">Home</p>
            <p class="mx-2">Menu</p>
            <p class="mx-2">About us</p>
        </div>


       
        <div class="flex justify-evenly">
            <a class="mx-3">Cart</a>
            <a
                class="mx-2 border-2 border-black px-5 rounded-full font-medium hover:bg-gray-300 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Sign
                in</a>
            <a
                class="mx-2 border-2 border-black px-5 rounded-full bg-black text-white font-medium hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Join
                now</a>
        </div>

    </div>
</nav> --}}



<nav class="shadow-lg" x-data="{ navbarOpen: false }">
 
    <div class=" lg:mx-2 py-2 flex flex-wrap px-2 lg:space-x-20 items-center justify-between">
        
        <div class="inline-flex tracking-wider items-center">
            <a href="#">
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
            <ul
                class="flex lg:flex-row lg:space-x-8  flex-col space-y-8  lg:space-y-0 w-full lg:w-auto lg:items-center">



                {{-- dropdown --}}
                <li class="relative" x-data="{ dropdownOpen: false }">
                    <button
                        class="w-full outline-none focus:outline-none flex px-4 py-2 font-medium text-black hover:bg-sky-400 rounded-md hover:text-white"
                        @click="dropdownOpen = !dropdownOpen">Menu</button>
                    {{-- drop menu --}}
                    <div class="lg:absolute bg-white right-0 rounded-md p-2"
                        :class="{ 'hidden': !dropdownOpen, 'flex flex-col': dropdownOpen }">
                        <ul class="space-y-2 lg:w-48">
                            <li><a href="#"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Ontbijt</a>
                            </li>
                            <li><a href="#"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Pizza</a>
                            </li>
                            <li><a href="#"
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Vegan
                                    <ion-icon name="leaf-outline" class="text-green-700"></ion-icon>
                                </a>
                            </li>
                            <li><a href=""
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Pasta</a>
                            </li>
                            <li><a href=""
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Hoofdgerecht</a>
                            </li>
                            <li><a href=""
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Drankjes</a>
                            </li>
                            <li><a href=""
                                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-200 hover:text-black">Alcohol</a>
                            </li>
                        </ul>
                    </div>
                    {{-- drop menu --}}
                </li>

                <li><a class="flex px-4 py-2 font-medium text-black hover:bg-sky-400 rounded-md hover:text-black"
                        href="">About us</a>
                </li>
                <li class="lg:ml-auto">
                    <div class="flex py-8 lg:mx-3  lg:mt-auto">
                        <a
                            class="mx-2 border-2 border-black px-5 rounded-full font-medium hover:bg-gray-300 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Sign
                            in</a>

                        <a
                            class="mx-2 border-2 border-black px-5 rounded-full bg-black text-white font-medium hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">Join
                            now</a>
                    </div>
                </li>
            </ul>
        </div>
        {{-- menu --}}

    </div>
    {{-- container --}} 


</nav>
