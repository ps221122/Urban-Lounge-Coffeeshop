@extends('layout.app')
@section('title', 'Gallery')

@section('content')
    <section class="body-font text-gray-600">


        <div class="container mx-auto flex flex-wrap px-5 py-24">
            <div class="mb-20 flex w-full flex-wrap">
                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl lg:mb-0 lg:w-1/3">Summer Party</h1>
                <p class="mx-auto text-base leading-relaxed lg:w-2/3 lg:pl-6">Urban Lounge's 2022 summer party was the
                    biggest of all. Family & friends gathering together with sweet summer fun, barbeque and sweet delicious
                    pastry's. Like never before alongside employees trying to cool down with our summer secret drink.
                    shhhhhh!!</p>
            </div>
            <div class="-m-1 flex flex-wrap md:-m-2">
                <div class="flex w-1/2 flex-wrap">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2017/08/06/05/27/people-2589091_960_720.jpg">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2017/08/03/21/48/drinks-2578446_960_720.jpg">
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2014/09/07/17/42/girl-438139_960_720.jpg">
                    </div>
                </div>
                <div class="flex w-1/2 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2014/09/07/17/43/girls-438152_960_720.jpg">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2015/06/24/13/31/barbecue-820010_960_720.jpg">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full object-cover object-center"
                            src="https://www.adailylee.com/wp-content/uploads/2016/08/dutch-food-trucks-1.jpg">
                    </div>
                </div>
            </div>
        </div>





        <div class="container mx-auto px-5 py-24">
            <div class="mb-20 flex w-full flex-wrap">
                <div class="mb-6 w-full lg:mb-0 lg:w-1/2">
                    <h1 class="title-font mb-2 text-2xl font-medium text-gray-900 sm:text-3xl">Employees</h1>
                    <div class="h-1 w-20 rounded bg-indigo-500"></div>
                </div>
                <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">The roots of all goodness lie in the soil of
                    appreciation for goodness. It's your dedication that contributed to our success. Thank you for inspiring
                    us! Your dedication and hard work have left everyone in utter amazement in the company, and here I take
                    this moment to convey my heartiest wishes and best of luck to all of you.</p>
            </div>
            <div class="-m-4 flex flex-wrap">
                <div class="p-4 md:w-1/2 xl:w-1/4">
                    <div class="rounded-lg bg-gray-100 p-6">
                        <img class="mb-6 h-40 w-full rounded object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2016/08/25/19/38/baker-1620504_960_720.jpg" alt="content">
                        <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Head chef</h3>
                        <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Carlos Freeman</h2>
                        <p class="text-base leading-relaxed">Words will fall short if I am to praise you for everything you
                            have done for the company. However, this won't stop me from telling you how valuable you have
                            become for us now. I wish you all the success in life!</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 xl:w-1/4">
                    <div class="rounded-lg bg-gray-100 p-6">
                        <img class="mb-6 h-40 w-full rounded object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2017/06/06/09/22/waitress-2376728_960_720.jpg"
                            alt="content">
                        <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Waiter</h3>
                        <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Shanay Hunter</h2>
                        <p class="text-base leading-relaxed">You have shown us some commendable skills for which I can only
                            put out the best appreciation words for you. Keep progressing, and keep up your great work!.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 xl:w-1/4">
                    <div class="rounded-lg bg-gray-100 p-6">
                        <img class="mb-6 h-40 w-full rounded object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2017/11/02/14/26/model-2911329_960_720.jpg" alt="content">
                        <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Manager</h3>
                        <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Aj Wickens</h2>
                        <p class="text-base leading-relaxed">Thank you for being a great addition to our team. Your
                            willingness to deliver high-quality work is really admirable. Thank you!</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 xl:w-1/4">
                    <div class="rounded-lg bg-gray-100 p-6">
                        <img class="mb-6 h-40 w-full rounded object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2022/01/05/15/22/man-6917326_960_720.jpg" alt="content">
                        <h3 class="title-font text-xs font-medium tracking-widest text-indigo-500">Carrier</h3>
                        <h2 class="title-font mb-4 text-lg font-medium text-gray-900">Malaki Derrick</h2>
                        <p class="text-base leading-relaxed">Thank you for always showing us the right way with your
                            attention to detail. We feel lucky to have someone like you amidst us. Cheers.</p>
                    </div>
                </div>
            </div>
        </div>








        <div class="container mx-auto px-5 py-24">
            <div class="mb-20 flex w-full flex-col text-center">
                <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">Urban Lounge's relationships</h1>
                <p class="mx-auto text-base leading-relaxed lg:w-2/3">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
                    bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="-m-4 flex flex-wrap">
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://twinklemagazine.nl/2016/11/picnic-naar-10-tot-15-nieuwe-gebieden-in-2017/Picnic_winstgevend.png">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">1.
                            </h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">Picnic</h1>
                            <p class="leading-relaxed">Picnic delivers all your groceries to your home for free. In the
                                Picnic app you will find exactly the same groceries as in the supermarket, but for the
                                lowest price.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://image4.owler.com/logo/ssc-stichting-studiefinanciering-curacao_owler_20160229_203241_large.png">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">2.
                            </h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">SSC</h1>
                            <p class="leading-relaxed">The Curaçao Student Finance Foundation (SSC) is a financing
                                institution that was established on December 27, 1990 by the Executive Council of the Island
                                Territory of Curaçao in the context of the privatization of the service responsible for
                                providing student finance.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://dehora.com/wp-content/uploads/sites/4/2017/07/client_logo_ah.png">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">3.
                            </h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">Albert heijn</h1>
                            <p class="leading-relaxed">At Albert Heijn, we believe that food and drink play an essential
                                role in solving society's major challenges. </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://www.vvroden.nl/wp-content/uploads/2016/03/logo-jumbo-2012.jpg">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">4.
                            </h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">Jumbo</h1>
                            <p class="leading-relaxed">Jumbo is a supermarket chain in the Netherlands and Belgium. It is
                                part of the privately owned Van Eerd Group. Van Eerd was originally a grocery wholesale
                                company, established in 1921.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://www.onderwijsbeurszuid.nl/sites/default/files/inline-images/Suma-College-logo.jpg">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">5.
                            </h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">Summa College</h1>
                            <p class="leading-relaxed">Within the scope of a comprehensive range of international education
                                types, Summa College Eindhoven is executing a project under the name Summa International.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="relative flex">
                        <img alt="gallery" class="absolute inset-0 h-full w-full object-cover object-center"
                            src="https://thesoftwaretestingcompany.nl/wp-content/uploads/2019/03/The-Software-Testing-Company-opdrachtgever-Shell-logo.jpg">
                        <div
                            class="relative z-10 w-full border-4 border-gray-200 bg-white px-8 py-10 opacity-0 hover:opacity-100">
                            <h2 class="title-font mb-1 text-sm font-medium tracking-widest text-indigo-500">6.</h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">Shell</h1>
                            <p class="leading-relaxed">Shell.nl/feitenenfigures provides an overview of our ambitions,
                                activities and results. From the retail stations, the trade in products to the factories in
                                Moerdijk and Pernis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="container mx-auto flex flex-wrap px-5 py-24">
            <div class="mx-auto lg:w-2/3">
                <h1 class="title-font mx-20 mb-4 flex justify-around text-2xl font-medium text-gray-900 sm:text-3xl">Future
                    Meals</h1>
                <div class="relative mb-4 flex w-full flex-wrap bg-gray-100 py-32 px-10">
                    <img alt="gallery" class="absolute inset-0 block h-full w-full object-cover object-center opacity-25"
                        src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2020_45/1630778/cake-pops-today-110520-tease.jpeg">
                    <div class="relative z-10 w-full text-center">
                        <h2 class="title-font mb-2 text-2xl font-medium text-gray-900">Cake Pops</h2>
                        <p class="leading-relaxed">These fun cake pops are easy to make and great for parties. Kids and
                            adults will love these colourful chocolate-covered bites.</p>
                        <a href="https://www.bbcgoodfood.com/recipes/cake-pops"
                            class="mt-3 inline-flex items-center text-indigo-500">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="ml-2 h-4 w-4" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="-mx-2 flex flex-wrap">
                    <div class="w-1/2 px-2">
                        <div class="relative flex w-full flex-wrap bg-gray-100 py-16 px-6 sm:py-24 sm:px-10">
                            <img alt="gallery"
                                class="absolute inset-0 block h-full w-full object-cover object-center opacity-25"
                                src="https://kristineskitchenblog.com/wp-content/uploads/2018/11/biscotti-700-3516-text.jpg">
                            <div class="relative z-10 w-full text-center">
                                <h2 class="title-font mb-2 text-xl font-medium text-gray-900">Biscotti & Cookies</h2>
                                <p class="leading-relaxed">This classic biscotti recipe makes the best biscotti cookies! A
                                    basic biscotti recipe plus recipes for almond biscotti, chocolate biscotti and cranberry
                                    orange biscotti. These homemade biscotti cookies are easy to make and perfect for
                                    holiday gifts and cookie trays!</p>
                                <a href="https://kristineskitchenblog.com/classic-biscotti-recipe/"
                                    class="mt-3 inline-flex items-center text-indigo-500">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="ml-2 h-4 w-4"
                                        viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-2">
                        <div class="relative flex w-full flex-wrap bg-gray-100 py-16 px-6 sm:py-24 sm:px-10">
                            <img alt="gallery"
                                class="absolute inset-0 block h-full w-full object-cover object-center opacity-25"
                                src="https://www.theworktop.com/wp-content/uploads/2019/10/Overnight-Oats-with-Yogurt-16x9.jpg">
                            <div class="relative z-10 w-full text-center">
                                <h2 class="title-font mb-2 text-xl font-medium text-gray-900">Oatmeal & Yogurt</h2>
                                <p class="leading-relaxed">Start your morning with a creamy, protein-packed bowl of oatmeal
                                    with this easy recipe for Greek yogurt oatmeal! You'll love how creamy the yogurt
                                    tastes.</p>
                                <a href="https://www.eatingbirdfood.com/greek-yogurt-oatmeal/"
                                    class="mt-3 inline-flex items-center text-indigo-500">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="ml-2 h-4 w-4"
                                        viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="container mx-auto flex flex-col items-center justify-center px-5 py-24">
            <img class="mb-10 w-5/6 rounded object-cover object-center md:w-3/6 lg:w-2/6" alt="hero"
                src="https://www.aprio.com/wp-content/uploads/2022/06/Restaurant-owners-options-for-growth-capital.jpg">
            <div class="w-full text-center lg:w-2/3">
                <h1 class="title-font mb-4 text-3xl font-medium text-gray-900 sm:text-4xl">Jeff Grant (Employee of the
                    month)</h1>
                <p class="mb-8 leading-relaxed">Congrats on your outstanding work. We are continually impressed by the
                    results you produce! You play a crucial role in our team and the company's success. It's been a long
                    time working towards accomplishing this, and you've exceeded our expectations at every step.</p>
            </div>
        </div>





        <div class="container my-5 mx-auto space-y-2 lg:grid lg:grid-cols-3 lg:gap-2 lg:space-y-0">
            <div class="img-box flex justify-center">
                <h1 class="title-font mb-4 self-center text-3xl font-medium text-gray-900 sm:text-4xl">Summer vibe
                </h1>
            </div>
            <div class="w-full rounded hover:opacity-50">
                <img src="https://cdn.pixabay.com/photo/2014/11/13/17/04/heart-529607__340.jpg" alt="image">
            </div>
            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://cdn.pixabay.com/photo/2016/03/14/14/21/bride-1255520_960_720.jpg" alt="image">
            </div>
            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://cdn.pixabay.com/photo/2016/11/22/19/16/bride-1850126_960_720.jpg" alt="image">
            </div>
            <div class="w-full rounded hover:opacity-50">
                <img src="https://cdn.pixabay.com/photo/2017/09/01/19/27/hands-2705251_960_720.jpg" alt="image">
            </div>

            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://navbharattimes.indiatimes.com/photo/msid-88430696,imgsize-64100/pic.jpg" alt="image">
            </div>
            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://cdn.pixabay.com/photo/2016/08/03/10/19/cake-sale-1566261_960_720.jpg" alt="image">
            </div>

            <div class="w-full rounded hover:opacity-50">
                <img src="https://www.theknot.com/tk-media/images/2644040f-4c30-4a2b-8c67-c3cdc0e5650c~rs_768.h"
                    alt="image">
            </div>

            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://www.weddingideasmag.com/wp-content/uploads/2014/04/8-processional-songs-guaranteed-to-have-your-groom-in-tears-kipbeelmanphotography-main.jpg"
                    alt="image">
            </div>

            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://cdn0.hitched.co.uk/article/5645/3_2/1280/jpg/35465-choose-wedding-flowers-bouquet-thumbnail-75c4c70.jpeg"
                    alt="image">
            </div>
            <div class="w-full rounded hover:opacity-50">
                <img src="https://www.themonastery.org/assets/themonastery/images/wedding-scripts/funny-wedding-ceremony-script-bb7b4f.jpg"
                    alt="image">
            </div>

            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://d.newsweek.com/en/full/1506524/cul-summerfestivals-08-1138234608.jpg?w=1600&h=1200&q=88&f=a565219831fc3ea46b059e84f4b0ab9e"
                    alt="image">
            </div>
            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://lumaweddings.com/wp-content/uploads/2018/01/admirals-house-wedding-venue-seattle-photographer-luma-weddings_0032.jpg"
                    alt="image">
            </div>
            <div class="w-full rounded hover:opacity-50">
                <img src="https://assets.vogue.com/photos/5dea718ed3d4d50008c2fc0f/4:3/w_1540,h_1155,c_limit/Lydia%20and%20Roo%20FINAL%20(low%20res)-439.jpg"
                    alt="image">
            </div>
            <div class="w-full rounded hover:shadow-2xl">
                <img src="https://www.theknot.com/tk-media/images/8e5250d2-f223-44d2-95e2-4768e7455319~rs_768.h"
                    alt="image">
            </div>
            
        </div>




    </section>
@endsection
