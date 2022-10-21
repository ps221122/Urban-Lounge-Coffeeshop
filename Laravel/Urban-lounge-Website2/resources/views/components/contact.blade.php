@extends('layout.app')
@section('title', 'Contact')

@section('content')
    <section class="body-font text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="-m-4 flex flex-wrap" id="mainContact">
                <script>
                    const restaurantLocation = [{
                            name: "Urban Lounge Neunen",
                            street: "Ruwe Putten 30",
                            city: 'Neunen',
                            province: 'Eindhoven',
                            postCode: '5674 SL',
                            email: "Info@UrbanNeunen.nl",
                            tag: "https://media-cdn.tripadvisor.com/media/photo-s/0c/46/6d/c3/de-zaal.jpg",
                            phone: "06-77208429",
                        },
                        {
                            name: "Urban Lounge Ter Apel",
                            street: 'Barnflair West 162',
                            city: 'Ter Apel',
                            province: 'Groningen',
                            postCode: '9561 NE',
                            email: "Info@UrbanApel.nl",
                            tag: "https://i.pinimg.com/736x/5d/b1/90/5db1909bb7205533906fdfdd68a8467a--holland-amsterdam.jpg",
                            phone: "06-36503069",
                        },
                        {
                            name: "Urban Lounge Zwijndrecht",
                            street: 'Rotterdamseweg 134',
                            city: 'Zwijndrecht',
                            province: 'Zuid-Holland',
                            postCode: '3332 AK',
                            email: "Info@UrbanZwijndrecht.nl",
                            tag: "https://cdn.sortiraparis.com/images/80/96046/696754-datsha-underground.jpg",
                            phone: "06-14197961",
                        },
                        {
                            name: "Urban Lounge Venlo",
                            street: 'Amundsenweg 154',
                            city: 'Venlo',
                            province: 'Limburg',
                            postCode: '5928 LT',
                            email: "Info@UrbanLimburg.nl",
                            tag: "https://thumbs.dreamstime.com/b/amsterdam-netherlands-april-local-outside-cafe-rokin-street-king-s-day-53965853.jpg",
                            phone: "06-17240565",
                        },
                        {
                            name: "Urban Lounge Grou",
                            street: "Kleine Buren 104",
                            city: 'Grou',
                            province: 'Friesland',
                            postCode: '9001 AV',
                            email: "Info@UrbanGrou.nl",
                            tag: "https://cdn.pixabay.com/photo/2016/11/18/22/21/restaurant-1837150_960_720.jpg",
                            phone: "06-32762636",
                        },
                        {
                            name: "Urban Lounge Hilversum",
                            street: " Betje Wolfflaan 99",
                            city: 'Hilversum',
                            province: 'Noord-Holland',
                            postCode: '1215 HV',
                            email: "Info@UrbanHilversum.nl",
                            tag: "https://cdn.pixabay.com/photo/2016/11/21/16/02/outdoor-dining-1846137_960_720.jpg",
                            phone: "06-42492222",
                        },
                        {
                            name: "Urban Lounge Sittard",
                            street: "Linde 51",
                            city: 'Sittard',
                            province: 'Limburg',
                            postCode: '6131 GG',
                            email: "Info@UrbanSittard.nl",
                            tag: "https://cdn.pixabay.com/photo/2013/06/07/21/33/brighton-122824_960_720.jpg",
                            phone: "06-53323827",
                        },
                        {
                            name: "Urban Lounge Den Haag",
                            street: "Acaciastraat 55",
                            city: 'Den Haag',
                            province: 'Zuid-Holland',
                            postCode: '2565 KJ',
                            email: "Info@UrbanDenHaag.nl",
                            tag: "https://cdn.pixabay.com/photo/2013/04/18/21/08/stralsund-105664_960_720.jpg",
                            phone: "06-89543792",
                        },
                        {
                            name: "Urban Lounge Deurne",
                            street: "Korstmos 51",
                            city: 'Deurne',
                            province: 'Noord-Brabant',
                            postCode: '5754 GJ',
                            email: "Info@UrbanDeurne.nl",
                            tag: "https://cdn.pixabay.com/photo/2014/04/23/11/36/rooftop-restaurant-330473_960_720.jpg",
                            phone: "06-35860131",
                        },
                        {
                            name: "Urban Lounge Dedemsvaart",
                            street: "Adelaarweg 147",
                            city: 'Dedemsvaart',
                            province: 'Overijssel',
                            postCode: '7701 KK',
                            email: "Info@UrbanDedemsvaart.nl",
                            tag: "https://cdn.pixabay.com/photo/2013/04/18/14/39/netherlands-105599_960_720.jpg",
                            phone: "06-63794262",
                        },
                        {
                            name: "Urban Lounge Bronneger",
                            street: "Dorpsstraat 129",
                            city: 'Bronneger',
                            province: 'Drenthe',
                            postCode: '9527 TC',
                            email: "Info@UrbanBronneger.nl",
                            tag: "https://media.istockphoto.com/photos/view-through-the-window-of-people-inside-attendant-cafe-and-bar-in-picture-id1158468115?k=20&m=1158468115&s=612x612&w=0&h=Y_c8JYac4L391HUMPmACJmQF4RxEOq8y36iqAcnBFus=",
                            phone: "06-59279018",
                        },
                        {
                            name: "Urban Lounge Apeldoorn",
                            street: "Tweelingenlaan 17",
                            city: 'Apeldoorn',
                            province: 'Gelderland',
                            postCode: '7324 AT',
                            email: "Info@UrbanApelDoorn.nl",
                            tag: "https://media.istockphoto.com/photos/restaurant-pub-in-gastown-downtown-vancouver-canada-picture-id1065677424?s=612x612",
                            phone: "06-20948980",
                        },
                        // {
                        //     street: "",
                        //     city: '',
                        //     province: '',
                        //     postCode: '',
                        //     email: "",
                        //     tag: "",
                        //     phone: "06-22054037",
                        // },
                    ];




                    function generateListItemsPizza(arg) {
                        let items = "";
                        for (let i = 0; i < arg.length; i++) {
                            items += `
                <div class="p-4 md:w-1/3">
                    <div class="h-full overflow-hidden rounded-lg border-2 border-gray-200 border-opacity-60">
                        <img class="w-full object-cover object-center md:h-36 lg:h-48" src="${arg[i].tag}"
                            alt="blog" />
                        <div class="p-6">
                            <h2 class="title-font mb-1 text-xs font-medium tracking-widest text-gray-400"></h2>
                            <h1 class="title-font mb-3 text-lg font-medium text-gray-900">${arg[i].name}</h1>
                        <ul class="list-disc mx-6 my-5">
                            <li class="mb-1 leading-relaxed">${arg[i].email}</li>
                            <li class="mb-1 leading-relaxed">${arg[i].phone}</li>
                            <li class="mb-1 leading-relaxed">${arg[i].street}</li>
                            <li class="mb-1 leading-relaxed">${arg[i].postCode}</li>
                            <li class="mb-1 leading-relaxed">${arg[i].city}</li>
                            <li class="mb-1 leading-relaxed">${arg[i].province}</li>
                            
                            </ul>
                            <div class="flex flex-wrap items-center">
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
                                    <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`

                        }
                        return items;
                    }
                    document.getElementById('mainContact').innerHTML = `
        ${generateListItemsPizza(restaurantLocation)}`;
                </script>



            </div>
        </div>
    </section>

@endsection
