@extends('layout.app')
@section('title', 'About us')

@section('content')
    <section class="about-body">
        <div class="title-about">About us!!</div>
        <div class="index-header h-screen" id="header"
            style="background-image: url('https://www.humphreys.nl/mysite/modules/SFIL0100/images/239_humphreys_restaurant_amsterdam_2.jpg')">
        </div>
        <div class="scroller">
            <p class="animate-bounce text-4xl text-white">Scroll down</p>
            <p class="animate-bounce text-3xl text-white"><i class="bi bi-arrow-down"></i></p>
        </div>

        <div class="first-paragraaf m-40">
            <h1 class="text-sm underline md:mt-5 lg:mt-2 lg:text-xl">Urban Lounge</h1>
            <p class="flex md:text-sm">We have 17,000 stores around the world. In the Netherlands alone we make each year
                more than 20 million pizzas. Already
                our pizzas are made fresh right after you place the order. There are no pre-prepared ingredients
                to adapt. The dough we use for the bottom is 100% pure: it contains no animal ingredients
                origin and
                is free from artificial fragrances, colors and flavors. The vegetables are also fresher than fresh! And we
                deliver
                you
                Pizza
                on average within 21 minutes. In all flavors and variations you can imagine, including vegetarian,
                vegan and
                gluten free options. Enjoy your dinner!</p>

            <div class="mt-14">
                <h1 class="text-sm underline lg:text-xl">Our mission</h1>
                <p class="flex md:text-sm">
                    We have remained committed to making the best food and the highest level of
                    service.<br>
                    We like to come up with delicious products and exciting promotions, because at StonksPizza we have
                    always known that
                    you the best is important. <br>We know what you want and we've made it faster and easier to
                    the
                    to get!
                </p>

            </div>


            <div class="container mx-auto flex flex-col items-center justify-center px-5 py-24">
                <img class="mb-10 w-5/6 rounded object-cover object-center md:w-3/6 lg:w-2/6" alt="hero"
                    src="https://thetoptenchefs.com/wp/wp-content/uploads/2017/07/Gennaro-Contaldo-top-Italain-chefs-1024x682.jpg">
                <div class="w-full text-center lg:w-2/3">
                    <h1 class="title-font mb-4 text-3xl font-medium text-gray-900 sm:text-4xl">Riccardo Bianchi</h1>
                    <p class="mb-8 leading-relaxed">If you are part of a team, it is likely that you have certain feelings
                        about the team's leader. There are many words to describe Riccardo Bianchi, A compassionate boss is
                        someone who truly cares about his/her employees; he/she is willing to listen to the concerns of the
                        employees and able to give second chances to those who make mistakes. A fair boss is someone who
                        doesn't discriminate or treat anyone with favoritism. He/she doesn't pick sides or give anyone any
                        unfair advantages. and many more</p>
                </div>
            </div>

            <div class="team">
                <div class="container mx-auto px-5 py-24">
                    <div class="mb-20 flex w-full flex-wrap">
                        <div class="mb-6 w-full lg:mb-0 lg:w-1/2">
                            <h1 class="title-font mb-2 text-2xl font-medium text-gray-900 sm:text-3xl">Enthusiastic team
                            </h1>
                            <div class="h-1 w-40 rounded bg-indigo-500"></div>
                        </div>
                        <p class="w-full leading-relaxed text-gray-500 lg:w-1/2"></p>
                    </div>
                    <div class="-m-4 flex flex-wrap">
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="rounded-lg bg-gray-100 p-6">
                                <img class="mb-6 h-40 w-full rounded object-cover object-center"
                                    src="https://www.hitsa.com.au/wp-content/uploads/types-of-chefs.jpg" alt="content">
                                <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Co-owner</h3>
                                <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Shane Moyer</h2>
                                <p class="text-base leading-relaxed">People who think they know everything are a great
                                    annoyance to those of us who do.</p>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="rounded-lg bg-gray-100 p-6">
                                <img class="mb-6 h-40 w-full rounded object-cover object-center"
                                    src="https://cdn.pixabay.com/photo/2017/01/23/19/40/woman-2003647_960_720.jpg"
                                    alt="content">
                                <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Co-owner</h3>
                                <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Jazmine Broadhurst</h2>
                                <p class="text-base leading-relaxed">There cannot be a crisis next week. My schedule is
                                    already full.</p>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="rounded-lg bg-gray-100 p-6">
                                <img class="mb-6 h-40 w-full rounded object-cover object-center"
                                    src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg"
                                    alt="content">
                                <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Co-owner</h3>
                                <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Tim Noble</h2>
                                <p class="text-base leading-relaxed">You're only as good as your last haircut.</p>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/2 xl:w-1/4">
                            <div class="rounded-lg bg-gray-100 p-6">
                                <img class="mb-6 h-40 w-full rounded object-cover object-center"
                                    src="https://cdn.pixabay.com/photo/2017/08/16/12/51/man-2647703_960_720.jpg"
                                    alt="content">
                                <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Co-owner</h3>
                                <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Trevor Bianchi</h2>
                                <p class="text-base leading-relaxed">Progress is man's ability to complicate simplicity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="location" id="header">
            <div class="container mx-auto flex flex-wrap px-5 py-24 sm:flex-nowrap">
                <div
                    class="relative flex items-end justify-start overflow-hidden rounded-lg bg-gray-300 p-10 sm:mr-10 md:w-1/2 lg:w-2/3">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                        marginheight="0" marginwidth="0" scrolling="no"
                        src="https://maps.google.com/maps?q=Ruwe%20Putten%2030&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                        style="">
                    </iframe>
                    <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                        <div class="px-12 lg:w-1/2">
                            <h1 class="title-font text-base font-semibold tracking-widest text-gray-900">Urban Lounge</h1>
                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Adres:</h2>
                            <p class="mt-1">Ruwe Putten 30</p>
                            <h2 class="title-font mt-3 text-xs font-semibold tracking-widest text-gray-900">Postcode:</h2>
                            <p class="mt-1">5674 SL</p>
                            <h2 class="title-font mt-3 text-xs font-semibold tracking-widest text-gray-900">Stad:</h2>
                            <p class="mt-1">Nuenen</p>
                        </div>
                        <div class="mt-4 px-6 lg:mt-0 lg:w-1/2">
                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Email:</h2>
                            <a class="leading-relaxed text-indigo-500">Info@Urban.nl</a>
                            <h2 class="title-font mt-4 text-xs font-semibold tracking-widest text-gray-900">Telefoonnummer:
                            </h2>
                            <p class="leading-relaxed">06 7762 - 9938 88</p>
                        </div>
                    </div>
                </div>
                <form class="mt-8 flex w-full flex-col bg-white px-6 md:ml-auto md:mt-0 md:w-1/2 md:py-8 lg:w-2/3">
                    <h2 class="title-font mb-1 text-lg font-medium text-gray-900">Feedback</h2>
                    <p class="mb-5 leading-relaxed text-gray-600">We zijn zo blij je weer te zien.</p>
                    <div class="relative mb-4">
                        <label for="name" class="text-sm leading-7 text-gray-600">Naam:</label>
                        <input type="text" id="name" name="name"
                            class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="text-sm leading-7 text-gray-600">Email:</label>
                        <input type="email" id="email" name="email"
                            class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                        <textarea id="message" name="message"
                            class="h-32 w-full resize-none rounded border border-gray-300 bg-white py-1 px-3 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
                    </div>
                    <button
                        class="rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none">Send</button>

                    <div class="note col-start-1 col-end-3 mt-2 flex items-baseline space-x-2 lg:row-start-6 lg:row-end-7">
                        <input type="checkbox" name="" id="" class="inline-block">
                        <p class="text-sm text-gray-600">Ik stem ermee in dat deze website mijn ingediende
                            informatie
                            opslaat, zodat ze op mijn vraag kunnen reageren.</p>
                    </div>
                </form>
            </div>
        </div>

        <div class="app-box">
            <div class="container mx-auto flex flex-col items-center px-5 py-24 md:flex-row">
                <div class="mb-10 w-5/6 md:mb-0 md:w-1/2 lg:w-full lg:max-w-lg">
                    <img class="rounded object-cover object-center" alt="hero" src="assets/img.png">
                </div>
                <div
                    class="flex flex-col items-center text-center md:w-1/2 md:items-start md:pl-16 md:text-left lg:flex-grow lg:pl-24">
                    <h1 class="title-font mb-4 text-3xl font-medium text-gray-900 sm:text-4xl">Urban Lounge Coffeeshop app
                    </h1>
                    <p class="mb-8 leading-relaxed">A good app is a combination of both user and business-centric elements.
                        For users, it creates value, provides a delightful experience, and great performance. So download
                        our new app making it easier to order your meal on the go!!! </p>

                    <p class="mt-2 mb-8 w-full text-sm text-red-500">~~~~~~~~~~~Use the barcode image to
                        download.~~~~~~~~~~~~~~~</p>
                    <div class="flex md:flex-col lg:flex-row">
                        <button
                            class="inline-flex items-center rounded-lg bg-gray-100 py-3 px-5 hover:bg-gray-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6"
                                viewBox="0 0 512 512">
                                <path
                                    d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                                </path>
                            </svg>
                            <span class="ml-4 flex flex-col items-start leading-none">
                                <span class="mb-1 text-xs text-gray-600">GET IT ON</span>
                                <span class="title-font font-medium">Google Play</span>
                            </span>
                        </button>
                        <button
                            class="ml-4 mt-0 inline-flex items-center rounded-lg bg-gray-100 py-3 px-5 hover:bg-gray-200 focus:outline-none md:ml-0 md:mt-4 lg:ml-4 lg:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6"
                                viewBox="0 0 305 305">
                                <path
                                    d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z">
                                </path>
                                <path
                                    d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z">
                                </path>
                            </svg>
                            <span class="ml-4 flex flex-col items-start leading-none">
                                <span class="mb-1 text-xs text-gray-600">Download on the</span>
                                <span class="title-font font-medium">App Store</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="last-box">
            <div class="container mx-auto px-5 py-24">
                <div class="mx-auto mb-10 flex flex-col items-center border-b border-gray-200 pb-10 sm:flex-row lg:w-3/5">
                    <div
                        class="inline-flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-500 sm:mr-10 sm:h-32 sm:w-32">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="h-10 w-10 sm:h-16 sm:w-16" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="mt-6 flex-grow text-center sm:mt-0 sm:text-left">
                        <h2 class="title-font mb-2 text-xl font-medium text-gray-900">Contact</h2>
                        <p class="text-base leading-relaxed"></p>
                        <a href="{{ route('contact') }}"
                            class="mt-3 inline-flex items-center text-indigo-500 hover:animate-bounce">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="ml-2 h-4 w-4" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mx-auto mb-10 flex flex-col items-center border-b border-gray-200 pb-10 sm:flex-row lg:w-3/5">
                    <div class="mt-6 flex-grow text-center sm:mt-0 sm:text-left">
                        <h2 class="title-font mb-2 text-xl font-medium text-gray-900">Location</h2>
                        <p class="text-base leading-relaxed"></p>
                        <a href="{{ route('location') }}"
                            class="mt-3 inline-flex items-center text-indigo-500 hover:animate-bounce">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="ml-2 h-4 w-4" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="order-first inline-flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-500 sm:order-none sm:ml-10 sm:h-32 sm:w-32">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-10 w-10 sm:h-16 sm:w-16"
                            viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                </div>
                <div class="mx-auto flex flex-col items-center sm:flex-row lg:w-3/5">
                    <div
                        class="inline-flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-500 sm:mr-10 sm:h-32 sm:w-32">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="bi bi-person-workspace h-10 w-10 sm:h-16 sm:w-16" viewBox="0 0 16 16">
                            <path
                                d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                        </svg>
                    </div>
                    <div class="mt-6 flex-grow text-center sm:mt-0 sm:text-left">
                        <h2 class="title-font mb-2 text-xl font-medium text-gray-900">Jobs</h2>
                        <p class="text-base leading-relaxed"></p>
                        <a href="{{ route('jobs') }}"
                            class="mt-3 inline-flex items-center text-indigo-500 hover:animate-bounce">Learn More

                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
