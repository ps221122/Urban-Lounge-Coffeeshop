@extends('layout.app')
@section('title', 'Breakfast')
@section('content')
    <section class="text-gray-600 body-font mt-56 flex">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4" id="main">
                <script>
                    const productsOntbijt = [{
                            productvalue: "1",
                            name: "Coconut Pancakes",
                            tag: "https://media.istockphoto.com/photos/banana-pancakes-with-maple-syrup-picture-id500965580?k=20&m=500965580&s=612x612&w=0&h=NaYdj60LRDKlB6XBrL88nf3sHrY_H_LMf8FCPnsf_yg=",
                            price: '€6.95',
                            description: 'The Caribbean flavors of these coconut pancakes with fried pineapple in a sauce of brown sugar, cinnamon and rum.',
                            time: "15 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "2",
                            name: "French Toast",
                            tag: "https://media.istockphoto.com/photos/french-toast-with-fruit-and-syrup-on-a-marble-countertop-picture-id171269841?k=20&m=171269841&s=612x612&w=0&h=dPKhFO8ThDnsbVQ77NDxtdtRbOIMcKCljWM5fCi2Xg8=",
                            price: '€7.95',
                            description: 'French Toast I really think is pure comfort food.',
                            time: "14 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "3",
                            name: "Elvis Presley waffles",
                            tag: "https://media.istockphoto.com/photos/waffle-and-bacon-picture-id584479478?b=1&k=20&m=584479478&s=170667a&w=0&h=d5ZShxj9NACMbD2JObqcsLn0ZdUUVUOdn-a8qFS7J_w=",
                            price: '€8.99',
                            description: 'Elvis Waffles! Delicious soft waffles topped with banana, peanut butter and caramelized bacon.',
                            time: "18 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "4",
                            name: "Cornmeal porridge",
                            tag: "https://thatgirlcookshealthy.com/wp-content/uploads/2020/03/cornmeal-porridge-image.jpg",
                            price: '€8.99',
                            description: 'An old favorite among Jamaicans, cornmeal porridge is a go-to meal if you want a hearty, healthy start to the day..',
                            time: "25 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "5",
                            name: "Ackee and saltfish",
                            tag: "https://originalflava.com/wp-content/uploads/2014/05/Ackee-saltfish.jpg",
                            price: '€9.95',
                            description: 'Saltfish and ackee is the national dish of Jamaica and is traditionally served with these dumplings.',
                            time: "23 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "6",
                            name: "Fried eggs sandwich",
                            tag: "https://www.24kitchen.nl/files/styles/social_media_share/public/2020-11/shutterstock_537319213.jpg?itok=C_Gr65ZO",
                            price: '€9.99',
                            description: 'Fried eggs and plantain with butter toasted bread with chocolate & or coffee',
                            time: "16 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "7",
                            name: "All in 1 special",
                            tag: "https://simply-delicious-food.com/wp-content/uploads/2018/10/breakfast-board-500x375.jpg",
                            price: '€9.85',
                            description: 'Pastries,Eggs,Bacon,Yogurt,Jams and spreads,Fruit',
                            time: "09 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "8",
                            name: "EggyBurrito menu",
                            tag: "https://www.cookingclassy.com/wp-content/uploads/2019/08/breakfast-burrito-01.jpg",
                            price: '€10.95',
                            description: 'Spice up your morning with bell pepper, onions, fluffy scrambled eggs, sausage and melty cheese, all wrapped in a soft tortilla.',
                            time: "10 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "9",
                            name: "Steamed cabbage",
                            tag: "https://i.pinimg.com/736x/0e/ca/c3/0ecac3d403d00bc7fd5625bf1b47d579.jpg",
                            price: '€10.99',
                            description: 'But when its cooked, its not only an excellent choice - its also very tasty.And this particular recipe is particularly good.',
                            time: "29 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "10",
                            name: "Big Breakfast menu",
                            tag: "https://img.favpng.com/12/20/20/breakfast-scrambled-eggs-mcdonald-s-big-mac-english-muffin-hash-browns-png-favpng-avrpthAAwqaZ6LzYcifZYB2Cq.jpg",
                            price: '€12.34',
                            description: 'Delicious scrambled eggs, bread and sausage muffin. You can also ask for it with hash browns and a nourishing orange juice or an aromatic coffee.',
                            time: "28 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "11",
                            name: "Breakfast pizza",
                            tag: "https://skinnyms.com/wp-content/uploads/2013/10/Avocado-Breakfast-Pizzas-1.jpg",
                            price: '€12.95',
                            description: 'Breakfast pizza with avocado and fried egg with hot coffee or chocolate milk',
                            time: "08 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                        {
                            productvalue: "12",
                            name: "Ayaka",
                            tag: "https://www.savemorefoodstores.com/storage/app/uploads/public/5a9/d45/d1b/thumb_386_600_400_0_0_auto.jpg",
                            price: '€12.96',
                            description: 'Hallaca is a traditional dish from Venezuela that looks like a tamal but differs in taste, texture, ingredients and cultural significance',
                            time: "25 min",
                            inCart: 0,
                            totalPrice: "€0",
                        },
                    ];

                    function generateListItems(arg) {
                        let items = "";
                        for (let i = 0; i < arg.length; i++) {
                            items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>
                    <div class="flex justify-between">
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Breakfast</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button">add</button>
                        </div>
                        </div>
                </a>`

                        }
                        return items;
                    }
                    document.getElementById('main').innerHTML = `
        ${generateListItems(productsOntbijt)}`;
                </script>
            </div>
        </div>
        @include('components.cart')
    </section>

    {{-- cart --}}

@endsection
