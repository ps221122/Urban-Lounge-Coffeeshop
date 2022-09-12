@extends('layout.app')
@section('title', 'Homepage')

@section('content')
    <div class="mx-14 index-body">
        <div class="fade-in-out font-serif">
            <span>W</span>
            <span>e</span>
            <span>l</span>
            <span>c</span>
            <span>o</span>
            <span>m</span>
            <span>e</span>
            <span class="mx-2"></span>
            <span>bij</span>
            <span class="mx-2"></span>
            <span>U</span>
            <span>r</span>
            <span>b</span>
            <span>a</span>
            <span>n</span>
        </div>


        <div class="carouselBox mt-10">
            <!-- component -->
            <!-- This is an example component -->
            <div class="m-2 mt-6">

                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="flex justify-evenly outerBox">
                                <div class="firstBox">
                                    <p class="companyName py-2 from-neutral-300 font-medium">Closca Bottle</p>
                                    <h1 class="productTaste py-2 text-6xl">Beach</h1>
                                    <p class="productPrice py-2 text-2xl">€ 39.90</p>
                                    <div class="productDescription py-3">
                                        <p class='bottle-title'>
                                            In 20 years, there could be more plastic in our oceans than fish.
                                        </p>
                                        <p class="bottle-subtitle">Plastic pollution injures more than 100.000 marine
                                            animals
                                            every year.It takes
                                            around 450 years for one plastic bottle to decompose.</p>
                                    </div>
                                    <div class="flex justify-center hover:animate-bounce">
                                        Shop Now
                                        <i class="bi bi-arrow-right pt-1 pl-1"></i>
                                    </div>
                                </div>

                                <div class="secondBox flex" id="item1">
                                    <img class="bottle-bg"
                                        src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/Beach_1920.jpg?v=1029210661698833530"
                                        alt="" />
                                    <img class="bottle-img"
                                        src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/bottle_beach.png?v=11784267851598469514" />
                                </div>

                                <div class="thirdBox">1/4</div>
                            </div>
                        </div>





                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="flex justify-evenly outerBox">
                                <div class="firstBox1">
                                    <p class="companyName py-2 from-neutral-300 font-medium">Closca Bottle</p>
                                    <h1 class="productTaste py-2 text-6xl">Savanna</h1>
                                    <p class="productPrice py-2 text-2xl">€ 39.90</p>
                                    <div class="productDescription py-2">
                                        <p class='bottle-title'>
                                            The Earth's area affected by desertification is approx 11 times India's size.
                                        </p>
                                        <p class="bottle-subtitle">
                                            The Savannas act as a carbon sink, absorbing CO2 from the atmosphere and helping
                                            to
                                            maintain the balance of global temperatures.
                                        </p>
                                    </div>
                                    <div class="flex justify-center hover:animate-bounce mt-2">
                                        Shop Now
                                        <i class="bi bi-arrow-right pt-1 pl-1"></i>
                                    </div>
                                </div>
                                <div class="secondBox flex" id="item2">
                                    <img class="bottle-bg"
                                        src="https://images.unsplash.com/photo-1613109526778-27605f1f27d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                        alt="" />
                                    <img class="bottle-img"
                                        src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/savanna_OK.png?v=4783820813181844557" />
                                </div>
                                <div class="thirdBox">2/4</div>
                            </div>
                        </div>



                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="flex justify-evenly outerBox">
                                <div class="firstBox">
                                    <p class="companyName py-2 from-neutral-300 font-medium">Closca Bottle</p>
                                    <h1 class="productTaste py-2 text-6xl">Glacier</h1>
                                    <p class="productPrice py-2 text-2xl">€ 39.90</p>
                                    <div class="productDescription py-3">
                                        <p class='bottle-title'>
                                            Glaciers contain 75% of the World's freshwater.
                                        </p>
                                        <p class="bottle-subtitle">
                                            The effects of melting ice glaciers are biodiversity loss, the rising of the sea
                                            level and the deficiency of freshwater, among others.
                                        </p>
                                    </div>
                                    <div class="flex justify-center hover:animate-bounce">
                                        Shop Now
                                        <i class="bi bi-arrow-right pt-1 pl-1"></i>
                                    </div>
                                </div>
                                <div class="secondBox flex" id="item3">
                                    <img class="bottle-bg"
                                        src="https://www.discover-the-world.com/app/uploads/2018/05/chile-patagonia-calving-glacier-is-1150x863-c-default.jpg"
                                        alt="" />
                                    <img class="bottle-img"
                                        src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/Glacier_OK.png?v=7185877315400411030" />
                                </div>
                                <div class="thirdBox">3/4</div>
                            </div>
                        </div>




                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="flex justify-evenly outerBox">
                                <div class="firstBox">
                                    <p class="companyName py-2 from-neutral-300 font-medium">Closca Bottle</p>
                                    <h1 class="productTaste py-2 text-6xl">Coral</h1>
                                    <p class="productPrice py-2 text-2xl">€ 39.90</p>
                                    <div class="productDescription py-3">
                                        <p class='bottle-title'>
                                            We will have lost 60% of our coral reefs by 2030.
                                        </p>
                                        <p class="bottle-subtitle">
                                            Coral reefs are essential to humans, as they protect the shorelines and are a
                                            source
                                            of
                                            nutrients and habitat for thousands of marine species.
                                        </p>
                                    </div>
                                    <div class="flex justify-center hover:animate-bounce">
                                        Shop Now
                                        <i class="bi bi-arrow-right pt-1 pl-1"></i>
                                    </div>
                                </div>
                                <div class="secondBox flex" id="item4">
                                    <img class="bottle-bg"
                                        src="https://images.unsplash.com/photo-1546500840-ae38253aba9b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3260&q=80"
                                        alt="" />
                                    <img class="bottle-img"
                                        src="https://cdn.shopify.com/s/files/1/0689/1443/t/34/assets/Coral_OK.png?v=14596995446202437119" />
                                </div>
                                <div class="thirdBox">4/4</div>
                            </div>
                        </div>


                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute -bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>

                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>

                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>

                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" id="prev"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" id="next"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>
        </div>

        <div class="promotionBox">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col">
                        <div class="h-1 bg-gray-200 rounded overflow-hidden">
                            <div class="w-24 h-full bg-orange-700"></div>
                        </div>
                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Coming soon!
                            </h1>
                            <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">It's the first day of autumn! A
                                time
                                of hot chocolatey mornings, and toasty marshmallow evenings, and, best of all, leaping
                                into
                                leaves. We never forget our fall customer's!</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full"
                                    src="https://media.istockphoto.com/photos/cup-of-espresso-with-coffee-beans-picture-id1177900338?k=20&m=1177900338&s=612x612&w=0&h=rwLAoPzPiKdSbcdBFs4-TTt5O1Qpe0EFVY5KRqRPKmI=">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Hot tasty coffee</h2>
                            <p class="text-base leading-relaxed mt-2">We work with suppliers who only buy Specialty Coffee
                                . Suppliers who are aware of the journey that our coffee beans travel from A to Z. Which
                                quality bean the farmer has produced and ensures that this farmer receives a fair price for
                                his coffee.</p>
                            <p class="text-base leading-relaxed mt-2 font-semibold">By giving the farmer the right reward
                                for his
                                efforts, we can process the best beans into delicious coffee in our coffee roaster.</p>
                            <a class="text-orange-800 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full"
                                    src="https://twisper.com/wp-content/uploads/2020/11/Fall-foods-to-experience-autumn-header-scaled.jpg">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5"> Blazing hot flammekueche</h2>
                            <p class="text-base leading-relaxed mt-2">There coming back soon! Our flaming hot flammekueche will be here on october 1st, one of Urban Lounge favorite dishes.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full"
                                    src="https://media.istockphoto.com/photos/sweet-iced-pumpkin-spice-latte-picture-id864735376?k=20&m=864735376&s=612x612&w=0&h=BnZX_-N7YiHN9DrW3rYnERrL9XFkpAkixs3nOJh87QI=">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Pumpkin spice latte</h2>
                            <p class="text-base leading-relaxed mt-2">Fall favorites return with the blissful Pumpkin Spice
                                Latte and smooth Pumpkin Cream Cold Brew.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="statsBox">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4 text-center">
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                            <p class="leading-relaxed">Users</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                            <p class="leading-relaxed">Subscribes</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                            <p class="leading-relaxed">Downloads</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">96</h2>
                            <p class="leading-relaxed"> Delicious Meals</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class="testimonalBox">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="leading-relaxed text-lg">{{ $quote }}</p>
                        <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">{{ $author }}
                        </h2>
                        <p class="text-gray-500">~~~~~~~~~~</p>
                    </div>
                </div>
            </section>
        </div>

    </div>


@endsection
