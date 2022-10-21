@extends('layout.app')
@section('title', 'Menu')
@section('content')
    <div class="openingBoxContainer">
        <p class="text-2xl" id="sign"></p>
    </div>
    <section class="body-font mt-56 flex text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="outer-menu-box">
                <div class="category-title">
                    <h1 class="categoryTitle text-2xl font-semibold italic">Breakfast</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="main">
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
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
                                category: "Breakfast",
                            },
                        ];

                        function generateListItemsBreakfast(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items +=
                                    `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`
                            }
                            return items;
                        }
                        document.getElementById('main').innerHTML = `
                          ${generateListItemsBreakfast(productsOntbijt)}`;
                    </script>
                </div>
            </div>



            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="pizza">Pizza</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainPizza">
                    <script>
                        const productsPizza = [{
                                productvalue: "1",
                                name: "Bacon & cheese gril",
                                tag: "https://bestellen.dominos.nl/ManagedAssets/NL/product/PCRB/NL_PCRB_all_hero_7544.jpg?v-328673902",
                                price: '€5.95',
                                description: 'Tomato sauce, mozzarella, Gouda and cheddar cheese mix & soft French cheese.',
                                time: "23 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "2",
                                name: "Pizza cheese & grilled beef",
                                tag: "https://www.dominos.nl/media/0qzbiyqt/p4_menu_400x290px_nl_cheese-grilled-beef-1.jpg",
                                price: '€6.95',
                                description: 'Tomato sauce, mozzarella, mushrooms, grilled beef, Gouda and cheddar cheese mix, soft French cheese & spring onion.',
                                time: "11 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "3",
                                name: "Pizza grillled beef meatlover",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PPUL/NL_PPUL_all_menu_8769.jpg?v746033714",
                                price: '€9.95',
                                description: 'Crème frache, BBQ swirl, mozzarella, grilled beef, bacon, ham, onion and spring onion.',
                                time: "36 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "4",
                                name: "Pizza bbq Mixed grill",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PBMG/NL_PBMG_all_hero_7544.png?v-1334956449",
                                price: '€8.99',
                                description: 'BBQ sauce, mozzarella, bacon, ham, grilled chicken, minced beef, bell pepper & onion.',
                                time: "08 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "5",
                                name: "Pizza frikan'Dutchman",
                                tag: "https://www.dominos.nl/media/gfacsp4z/400x290_meaty-macho-1.jpg?width=400&height=290",
                                price: '€8.99',
                                description: 'Tomato sauce, mozzarella, frikandel, onion, a swirl of mayonnaise and curry.',
                                time: "17 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "6",
                                name: "Pizza BBQ Chicken & Bacon",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PCNB/NL_PCNB_all_hero_8263.jpg?v1349080163",
                                price: '€7.99',
                                description: 'BBQ sauce, mozzarella, grilled chicken & bacon.',
                                time: "26 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "7",
                                name: "Pizza Shoarma",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_all_hero_9068.jpg?v29382211",
                                price: '€8.99',
                                description: 'Tomato sauce, mozzarella, shoarma & a swirl of garlic sauce.',
                                time: "25 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "8",
                                name: "Pizza Chicken Kebab",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PKEB/NL_PKEB_all_hero_9068.jpg?v348136352",
                                price: '€8.99',
                                description: 'Tomato sauce, mozzarella, chicken kebab, onion and a swirl of garlic sauce.',
                                time: "15 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            }, {
                                productvalue: "9",
                                name: "Pizza Pepperoni Party",
                                tag: "https://www.dominos.be/ManagedAssets/BE/product/PDPP/BE_PDPP_all_hero_9585.jpg?v-793974938",
                                price: '€7.99',
                                description: 'Tomato sauce, extra pepperoni and mozzarella.',
                                time: "12 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "10",
                                name: "Pizza american Supreme Meatlover",
                                tag: "https://bestellen.dominos.nl/ManagedAssets/NL/product/PMLS/NL_PMLS_all_hero_8743.jpg?v1000954861",
                                price: '€9.99',
                                description: 'BBQ sauce, mozzarella, pepperoni, minced beef, chicken kebab, bacon & onion.',
                                time: "20 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "11",
                                name: "Pizza Hawaii",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PHAW/NL_PHAW_all_hero_9068.jpg?v-619998184",
                                price: '€7.99',
                                description: 'Tomato sauce, ham, pineapple & extra mozzarella.',
                                time: "07 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                            {
                                productvalue: "12",
                                name: "Pizza Extravaganzza",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PEXT/NL_PEXT_all_hero_7544.jpg?v-671108335",
                                price: '€8.99',
                                description: 'Tomato sauce, ham, pepperoni, minced beef, mushrooms, black olives, bell pepper, onion & extra mozzarella.',
                                time: "18 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pizza",
                            },
                        ];



                        function generateListItemsPizza(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-2xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainPizza').innerHTML = `
        ${generateListItemsPizza(productsPizza)}`;
                    </script>
                </div>
            </div>





            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="vegan">Vegan</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainVegan">
                    <script>
                        const productsVegan = [{
                                productvalue: "1",
                                name: "Pizza Veggi",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVVE/NL_PVVE_all_hero_9508.jpg?v-1039492046",
                                price: '€7.95',
                                description: 'Tomato sauce, mozzarella, mushrooms, bell pepper, onion, fresh spinach and fresh tomato.',
                                time: "15 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "2",
                                name: "Pizza Caprese",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PCAP/NL_PCAP_all_hero_9398.jpg?v609786223",
                                price: '€7.99',
                                description: 'Tomato sauce, fresh spinach, fresh tomato, pizza herbs, pesto & extra mozzarella.',
                                time: "12 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "3",
                                name: "Pizza Veggi Pesto Pollo",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVPP/NL_PVPP_all_hero_7823.jpg?v-524881868",
                                price: '€7.95',
                                description: 'Tomato sauce, mozzarella, vegetarian chicken, fresh tomato, onion and a pesto swirl.',
                                time: "09 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "4",
                                name: "Pizza Vegan Veggi",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVEG/NL_PVEG_all_hero_9398.jpg?v1465047760",
                                price: '€8.99',
                                description: 'Tomato sauce, vegan cheese, mushrooms, fresh tomato, bell pepper, spinach and onion.',
                                time: "19 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },

                            {
                                productvalue: "5",
                                name: "Vegan Margaritha",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVMA/NL_PVMA_all_hero_9508.jpg?v-180133423",
                                price: '€8.99',
                                description: 'Tomato sauce, vegan cheese, extra vegan cheese & pizza herbs',
                                time: "26 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "6",
                                name: "Vegan Funghi",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PVFH/NL_PVFH_all_hero_9508.jpg?v-1413036897",
                                price: '€8.99',
                                description: 'Tomato sauce, vegan cheese, mushrooms & pizza herbs.',
                                time: "11 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "7",
                                name: "Pizza Margaritha (Glutenvrij)",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PMAFGG/NL_PMAFGG_all_hero_9398.jpg?v-1158225617",
                                price: '€9.99',
                                description: 'Tomato sauce, extra mozzarella and a gluten-free base (20 cm).',
                                time: "17 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "8",
                                name: "Pizza Perfect Pepperoni(Glutenvrij)",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PPPFGG/NL_PPPFGG_all_hero_7544.jpg?v34823017",
                                price: '€9.99',
                                description: 'Tomato sauce, mozzarella and & pepperoni on a gluten-free base (20 cm).',
                                time: "14 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "9",
                                name: "Vegan Zwarte Truffel",
                                tag: "https://images.newyorkpizza.nl/Products/Original/Vegan_truffel-8068.png",
                                price: '€10.99',
                                description: 'Tomato sauce, vegan cheese, mushroom, truffle tapenade, parsley and garlic on the rim.',
                                time: "10 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "10",
                                name: "Vegan Shoarma Pizza",
                                tag: "https://images.newyorkpizza.nl/Products/Original/Vegan_Shoarma-8070.png",
                                price: '€10.99',
                                description: '-',
                                time: "28 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "11",
                                name: "Pizza Tonno",
                                tag: "https://www.dominos.nl/ManagedAssets/NL/product/PTON/NL_PTON_all_hero_7544.jpg?v1659828722",
                                price: '€11.99',
                                description: '-',
                                time: "15 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                            {
                                productvalue: "12",
                                name: "BBQ Bacon & Chicken(Glutenvrij)",
                                tag: "https://images.newyorkpizza.nl/Products/Original/BBQ_Bacon-8045.png",
                                price: '€12.99',
                                description: '-',
                                time: "13 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Vegan",
                            },
                        ];

                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items +=
                                    `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                            <div class="block relative h-48 rounded overflow-hidden store-image-box">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                    src="${arg[i].tag}">
                            </div>
        
                            <div class="flex justify-between">
                            <div class="store-info-box mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                                <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                                <p class="mt-1">${arg[i].price}</p>
                                <p class="hidden">${arg[i].inCart}</p>
                            </div>
                             <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                                    <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                                </div>
                                </div>
                        </a>`
                            }
                            return items;
                        }
                        document.getElementById('mainVegan').innerHTML = `
                ${generateListItems(productsVegan)}`;
                    </script>
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="pasta">Pasta</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainPasta">
                    <script>
                        const productsPasta = [{
                                productvalue: "1",
                                name: "Shirmp Pasta Alfredo",
                                tag: "https://www.dinneratthezoo.com/wp-content/uploads/2018/06/shrimp-alfredo-6.jpg",
                                price: '€9.95',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "2",
                                name: "Pasta BigolÍ",
                                tag: "https://media-cdn.greatbritishchefs.com/media/mdmlndcb/img76899.jpg?mode=crop&width=768&height=512",
                                price: '€9.95',
                                time: "15 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "3",
                                name: "Pasta Tortellini",
                                tag: "https://image.15gram.be/uploads/recipes/9579_tortellini-met-spinazie-en-mascarponecitroensaus_1597233961-1920x1280.jpg",
                                price: '€10.95',
                                time: "20 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "4",
                                name: "Fettuccine Alfredo",
                                tag: "https://www.modernhoney.com/wp-content/uploads/2018/08/Fettuccine-Alfredo-Recipe-1.jpg",
                                price: '€10.99',
                                time: "19 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },

                            {
                                productvalue: "5",
                                name: "Lasagna",
                                tag: "https://www.modernhoney.com/wp-content/uploads/2019/08/Classic-Lasagna-14-scaled.jpg",
                                price: '€11.95',
                                time: "24 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "6",
                                name: "Garlic Glazed Noodle",
                                tag: "https://tiffycooks.com/wp-content/uploads/2021/09/Screen-Shot-2021-09-21-at-5.21.37-PM.png",
                                price: '€11.99',
                                time: "22 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "7",
                                name: "Bacon Mac & Cheese",
                                tag: "https://www.dinneratthezoo.com/wp-content/uploads/2019/07/bacon-mac-and-cheese-4.jpg",
                                price: '€12.95',
                                time: "26 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "8",
                                name: "Pasta Calamarata",
                                tag: "https://antichefattorietemplari.it/wp-content/uploads/2019/01/calamarata-napoletanta-con-calamarata-di-gragnano.jpg",
                                price: '€12.99',
                                time: "14 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "9",
                                name: "Lo Mein Noodles",
                                tag: "https://www.chewoutloud.com/wp-content/uploads/2021/05/lo-mein-square.jpg",
                                price: '€13.95',
                                time: "11 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "10",
                                name: "Rasta Pasta",
                                tag: "https://food.theffeed.com/wp-content/uploads/sites/7/2021/03/ae62e664375b2b9397cf0c8dbc272b82-e1616700645354-768x768.jpg",
                                price: '€13.99',
                                time: "14 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "11",
                                name: "Pasta alla Pescatora",
                                tag: "http://www.italianfoodforever.com/wp-content/uploads/2011/12/pescatore1.jpg",
                                price: '€14.95',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                            {
                                productvalue: "12",
                                name: "Spaghetti Vongole",
                                tag: "https://img.static-rmg.be/a/food/image/q75/w640/h400/1722/spaghetti-vongole.jpg",
                                price: '€14.99',
                                time: "15 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Pasta",
                            },
                        ];



                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainPasta').innerHTML = `
                        
        ${generateListItems(productsPasta)}`;
                    </script>
                </div>
            </div>



            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="dinner">Dinner</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainDinner">
                    <script>
                        const productsDinner = [{
                                productvalue: "1",
                                name: "Chicken Caesar Salad",
                                tag: "https://images.themodernproper.com/billowy-turkey/production/posts/2019/Easy-italian-salad-recipe-10.jpg?w=1200&h=1200&q=82&fm=jpg&fit=crop&fp-x=0.5&fp-y=0.5&dm=1614096227&s=c0f63a30cef3334d97f9ecad14be51da",
                                price: '€10.95',
                                description: 'One can never go wrong with a chicken caesar salad. Healthy option with greens and proteins!',
                                time: "12 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "2",
                                name: "Caribbean Mixed Rice",
                                tag: "https://i.ytimg.com/vi/RRjNuRw7RTg/maxresdefault.jpg",
                                price: '€10.95',
                                description: 'Rice, vegetables, meat, sauce, herbs, spices, egg',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "3",
                                name: "Curry goat/mutton/chicken",
                                tag: "https://www.simplyrecipes.com/thmb/Atrxn7aREhzIuLu2h9QmmXd9ziA=/1600x900/smart/filters:no_upscale()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2010__09__jamaican-curry-goat-horiz-a-1600-b03148154b1a4ab4a9d1859b64039174.jpg",
                                price: '€10.98',
                                description: 'Incredibly tasty slow cooked Jamaican Spiced Curry that is full of flavor and tender to the bone!',
                                time: "21 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "4",
                                name: "Crispy Fried Red Snapper With Sauce",
                                tag: "https://i.pinimg.com/originals/e3/40/f0/e340f0ff6b7c3a027c1e4aa86d3ee56b.jpg",
                                price: '€10.99',
                                description: 'It is best to ask if the fishmonger cleans the Snappers, that is the most convenient.',
                                time: "12 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },

                            {
                                productvalue: "5",
                                name: "Steamed Fish with Dumplings",
                                tag: "https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_38/1777805/ginger-scallion-fish-main-jc-210921.jpg",
                                price: '€11.95',
                                description: 'This is an easy way to cook whole fish, but one that few western cooks have mastered.',
                                time: "13 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "6",
                                name: "Red Peas Soup",
                                tag: "https://cdn.foodaciously.com/static/recipes/dda36f05-21e4-4183-925a-b4424a7061db/jamaican-red-pea-soup-with-gluten-free-531d634f8fa81acebb5ffc9b6398f314-2560-q60.jpg",
                                price: '€11.99',
                                description: 'A traditional Antillean soup, for the Antilleans this soup with red kidney beans is the ultimate comfort food.',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "7",
                                name: "Chilaquiles",
                                tag: "https://i2.wp.com/chilipeppermadness.com/wp-content/uploads/2020/11/Chilaquales-Recipe-Chilaquiles-Rojos-1.jpg",
                                price: '€12.95',
                                description: '-',
                                time: "16 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "8",
                                name: "Tutu & Kabritu",
                                tag: "https://i.pinimg.com/474x/fa/8b/b7/fa8bb75be8381a1a446580fbd18bfbe0.jpg",
                                price: '€12.99',
                                description: 'goat, broth, garlic, onion, pepper, tomato, herbs, vegetables, sauce.',
                                time: "17 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "9",
                                name: "STEWED OXTAIL",
                                tag: "https://soulfood.nl/wp-content/uploads/2021/05/website1-2-1170x780.jpg",
                                price: '€13.95',
                                description: 'Making the traditional oxtail stew takes some time, but as they say: "then you have something!". It is the ideal dish to make on the weekend.',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "10",
                                name: "Tandoori Chicken",
                                tag: "https://i.ytimg.com/vi/BKxGodX9NGg/maxresdefault.jpg",
                                price: '€13.20',
                                description: 'Amazing Indian dish with tenderloin chicken off the sizzles 🔥',
                                time: "16 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "11",
                                name: "Chicken Foot Soup",
                                tag: "https://www.bestdressedchicken.com/wp-content/uploads/2019/01/DJI_Cycle_4_JBG_20181218_0037.jpg",
                                price: '€14.95',
                                description: 'Chicken foot soup is a popular Jamaican one-pot dish with ingredients such as chicken foot, pumpkins, carrots, yams, potatoes and seasonings such as allspice, thyme and salt. It is traditionally prepared on Saturdays for dinner.',
                                time: "27 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                            {
                                productvalue: "12",
                                name: "Ratatouille",
                                tag: "https://bettyskitchen.nl/wp-content/uploads/2020/11/ratatouille_maken_%C2%A9-bettyskitchen_IMG_9351.jpg",
                                price: '€15.00',
                                description: 'Its ratatouille season! Ratatouille is a classic French end- of - summer stew thats fun to say (rat-tuh-TOO-ee) and fun to make.',
                                time: "24 min",
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Dinner"
                            },
                        ];



                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainDinner').innerHTML = `
        ${generateListItems(productsDinner)}`;
                    </script>
                </div>
            </div>



            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="beverage">Beverage</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainBeverage">
                    <script>
                        const productsDrink = [{
                                productvalue: "1",
                                name: "Tick Shake Strawberry",
                                tag: "https://www.chelseasmessyapron.com/wp-content/uploads/2020/04/Strawberry-Milkshake-1.jpg",
                                price: '€3.95',
                                description: 'Tick Shake Strawberry',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "2",
                                name: "Thick Shake Banana",
                                tag: "https://foodtasia.com/wp-content/uploads/2021/07/banana-milkshake-34.jpg",
                                price: '€3.95',
                                description: 'Thick Shake Banana',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "3",
                                name: "Thick shake Premium caramel",
                                tag: "https://www.amytreasure.com/wp-content/uploads/2019/07/2K3A4574.jpg",
                                price: '€3.95',
                                description: 'Thick shake Premium caramel',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "4",
                                name: "0.25 LT Fuze Tea Green Tea",
                                tag: "https://static-images.jumbo.com/product_images/080920212317_428484FLS-1_360x360_2.png",
                                price: '€2.50',
                                description: '0.25 LT Fuze Tea Green Tea',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },

                            {
                                productvalue: "5",
                                name: "0.33 Liter Coca Cola",
                                tag: "https://images.quickoffice.nl/002/600x450/897061p1.jpg",
                                price: '€2.00',
                                description: '0.33 Liter Coca Cola',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "6",
                                name: "0.33 liter Fernandes Cherry",
                                tag: "https://media.foox.nl/FT/AFB/high/9492.jpg",
                                price: '€2.00',
                                description: '0.33 liter Fernandes Cherry',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "7",
                                name: "0.33 liter Fanta",
                                tag: "https://www.officepalace.nl/autoimg/1406057/400x400/ffffff/frisdrank-fanta-orange-blikje-0-33l-1.jpg",
                                price: '€2.00',
                                description: '0.33 liter Fanta',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "8",
                                name: "0.33 liter Fanta Cassis",
                                tag: "https://images.quickoffice.nl/002/600x450/897064p1.jpg",
                                price: '€2.00',
                                description: '0.33 liter Fanta Cassis',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "9",
                                name: "0.33 liter Fernandes Red Grape",
                                tag: "https://jilpaqshop.nl/wp-content/uploads/2020/08/2445279268583aa6e403e4cf19cd2a40_mid_r.jpg",
                                price: '€2.00',
                                description: '0.33 liter Fernandes Red Grape',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "10",
                                name: "Fria Grape",
                                tag: "https://www.antilliaanse-toko.nl/media/catalog/product/cache/1ca3c8b1c6458f0eb1a5e1747c261955/f/r/fria_grape_chiki.png",
                                price: '€2.75',
                                description: 'Fria Grape',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "11",
                                name: "0.5 liter Spa water",
                                tag: "https://static-images.jumbo.com/product_images/010820221916_448284FLS-1_720x720.png",
                                price: '€2.95',
                                description: '0.5 liter Spa water',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                            {
                                productvalue: "12",
                                name: "Minute Maid",
                                tag: "https://www.minutemaid.com/content/dam/nagbrands/us/minutemaidus/en/products/mm-lemonade-product-page.png",
                                price: '€4.95',
                                description: 'Minute Maid 1-liter',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Non-alcohol Beverage",
                            },
                        ];

                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainBeverage').innerHTML = `
        ${generateListItems(productsDrink)}`;
                    </script>
                </div>
            </div>




            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="alcohol">Alcohol</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainAlcohol">
                    <script>
                        const productsAlcohol = [{
                                productvalue: "1",
                                name: "Smirnoff Ice Vodka Mixed Drink 70cl",
                                tag: "https://assets.sainsburys-groceries.co.uk/gol/3999417/1/640x640.jpg",
                                price: '€3.50',
                                description: 'Smirnoff Ice Vodka Mixed Drink 70cl',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "2",
                                name: "White Claw Hard Seltzer 330ml",
                                tag: "https://static-images.jumbo.com/product_images/040420221002_499263STK-1_360x360_2.png",
                                price: '€3.95',
                                description: '4 - White Claw Hard Seltzer 330ml.',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "3",
                                name: "Heineken Premium Pilsener Bier",
                                tag: "https://static.ah.nl/static/gall/img_340806_Gall_500.png",
                                price: '€10.95',
                                description: 'Heineken Premium Pilsener Bier 6 * 50cl',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "4",
                                name: "Bavaria - Pils 33cl",
                                tag: "https://syndy-content.azureedge.net/media/products/9bd7d5da-6b58-4634-95f5-487c7fb81164/images/AW0HA3GItENDpZ-NPK0ohvI./AABKcyf-AwDc9AjZUaxZxw.580x580.jpg",
                                price: '€7.50',
                                description: 'Bavaria - Pils 33cl',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },

                            {
                                productvalue: "5",
                                name: "Jupiler Belgisch Pils 33cl",
                                tag: "https://static.ah.nl/static/gall/img_50591_Gall_500.png",
                                price: '€8.00',
                                description: 'Jupiler Belgisch Pils 33cl',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "6",
                                name: "Grolsch - Pils - 25cl",
                                tag: "https://static.ah.nl/dam/product/AHI_43545239383235343039?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary",
                                price: '€9.40',
                                description: 'Grolsch - Pils - 25cl',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "7",
                                name: "Orbea - Pinot Grigio - 750ML",
                                tag: "https://www.supermarktaanbiedingen.com/public/images/product/2019/27/0-270258fls-orbea-blush-pinot-grigio-750ml.jpg",
                                price: '€4.90',
                                description: 'Orbea - Pinot Grigio - 750ML',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "8",
                                name: "Excellence - Chardonnay - 750ML",
                                tag: "https://www.supermarktaanbiedingen.com/public/images/discount/2018/06/701237.png",
                                price: '€5.99',
                                description: 'Excellence - Chardonnay - 750ML',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "9",
                                name: "Leffe Blond Belgisch Abdijbier Flessen",
                                tag: "https://static-images.jumbo.com/product_images/170420210207_275061PAK-1_720x720.png",
                                price: '€4.00',
                                description: '6 x 30 CL',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "10",
                                name: "Ponche Crema Curacao",
                                tag: "https://www.universalfws.com/images/product/large/087236657994.jpg",
                                price: '€9.75',
                                description: 'Ponche Crema Curacao',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "11",
                                name: "Pistachio Curacao",
                                tag: "https://res.cloudinary.com/saucey/image/upload/v1556913484/ehudf9miyedbpju9jdt7.jpg",
                                price: '€8.95',
                                description: 'Pistachio Curacao',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                            {
                                productvalue: "12",
                                name: "Moët & Chandon - Brut Impérial in giftbox",
                                tag: "https://cdn.webshopapp.com/shops/82078/files/318220230/image.jpg",
                                price: '€6.95',
                                description: 'Moët & Chandon - Brut Impérial in giftbox',
                                inCart: 0,
                                totalPrice: "€0",
                                category: "Alcohol beverage",
                            },
                        ];


                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainAlcohol').innerHTML = `
        ${generateListItems(productsAlcohol)}`;
                    </script>
                </div>
            </div>


            <div class="outer-menu-box my-28">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold italic" id="dessert">Dessert</h1>
                    <hr>
                </div>
                <div class="-m-4 flex flex-wrap" id="mainDessert">
                    <script>
                        const productDesserts = [{
                                productvalue: "1",
                                name: "Dutch Stroopwafel",
                                tag: "https://cdn.pixabay.com/photo/2021/01/28/12/02/stroopwafels-5957805_960_720.jpg",
                                price: '€3.95',
                                description: 'Stroopwafels feature two thin, crispy waffle- like wafers surrounding a creamy, caramel - flavored center made from molasses, brown sugar, butter, and cinnamon.',
                                time: "05 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "2",
                                name: "Dutch Apple Pie",
                                tag: "https://www.cookingclassy.com/wp-content/uploads/2019/11/dutch-apple-pie-4.jpg",
                                price: '€4.95',
                                description: 'The crust is warm and flaky, and the filling is chunky, sweet, and spicy. But you would not stop there!',
                                time: "03 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "3",
                                name: "Oliebollen (Dutch Doughnuts)",
                                tag: "https://leitesculinaria.com/wp-content/uploads/2018/11/oliebollen-dutch-doughnuts-fp.jpg",
                                price: '€5.95',
                                description: 'Its hard to decide what to love more about these warm, deep-fried delicacies: their incredible taste or how fun it is to say their name.',
                                time: "06 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "4",
                                name: "Bulla cake",
                                tag: "http://cdn.shopify.com/s/files/1/1621/1905/products/IMG_20180918_124054_grande.jpg?v=1538400932",
                                price: '€6.99',
                                description: 'Bulla cake has a round and flat shape, and it is made with flour, molasses, and baking powder. It can be either light- or dark-colored and is often spiced with ginger or nutmeg.',
                                time: "26 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "5",
                                name: "Sweet potato pudding",
                                tag: "https://serenalissy.com/wp-content/uploads/2021/11/Jamaican-Sweet-Potato-Pudding-Recipe-500x375.jpg",
                                price: '€7.95',
                                description: 'Sweet potato pudding is a favorite Sunday dessert throughout Jamaica, consisting of sweet potatoes, flour, coconut milk, dried fruits, and flavorings such as vanilla, nutmeg, sugar, and salt.',
                                time: "29 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "6",
                                name: "Bun & Cheese",
                                tag: "https://www.caribbeannationalweekly.com/wp-content/uploads/2020/04/BunCheese.jpg",
                                price: '€8.99',
                                description: 'Bun and Cheese comes packaged as a traditional loaf, and is most commonly eaten sandwich-style, by cutting individual slices and adding slices of cheese in between, hence the “Bun and Cheese.(ONLY Available: during easter).',
                                time: "08 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "7",
                                name: "Li di fruta",
                                tag: "https://cdn.shopify.com/s/files/1/0554/0298/7717/collections/20210320_074648_1400x.jpg?v=1617767397",
                                price: '€2.95',
                                description: 'Gecondenseerde melk, melk, bosvruchten, suiker, essence',
                                time: "08 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "8",
                                name: "Li di Pinda",
                                tag: "http://recepten999.nl/cache/37/3768cebfc27f4a12e6a0ad15c3cebf5d.jpg",
                                price: '€2.99',
                                description: 'semi-skimmed milk, water, white sugar, vanilla aroma, peanut butter',
                                time: "04 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "9",
                                name: "Caramel Pecan Ice-cream",
                                tag: "https://cdn.shopify.com/s/files/1/0179/4028/3492/products/75261821204-1_832x1000.jpg?v=1606339658",
                                price: '€3.95',
                                description: '1 pint of Caramel Pecan Ice-cream',
                                time: "03 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "10",
                                name: "Tumba Ice-Cream",
                                tag: "https://static.wixstatic.com/media/5f01d5_1138df17952c44849608286b4091bba9~mv2.png/v1/fill/w_960,h_350,al_c,lg_1,q_85,enc_auto/5f01d5_1138df17952c44849608286b4091bba9~mv2.png",
                                price: '€3.99',
                                description: '4 diffrent flavours: Vanilla, Tamarinda, Strawberry, Peanut',
                                time: "04 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "11",
                                name: "Arepa di pampuna",
                                tag: "https://i1.wp.com/www.kruimelsenkaneel.nl/wp-content/uploads/2016/11/pompoenpannekoeken.jpg?fit=2636%2C1768&ssl=1",
                                price: '€4.95',
                                description: 'Arepa di pampuna are Antillean pumpkin pancakes.',
                                time: "10 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                            {
                                productvalue: "12",
                                name: "Pandushi",
                                tag: "https://www.antilliaansekeuken.nl/wp-content/uploads/2014/04/rsz_pandushi_kokolishi.jpg",
                                price: '€4.99',
                                description: 'Making delicious Pandushi Kokolishi for a delicious and sweet dessert',
                                time: "18 min",
                                inCart: 0,
                                totalPrice: "€0",
                            },
                        ]


                        function generateListItems(arg) {
                            let items = "";
                            for (let i = 0; i < arg.length; i++) {
                                items += `<a class="lg:w-1/4 md:w-1/2 p-2 w-full card px-12">
                    <div class="block relative h-48 rounded overflow-hidden store-image-box">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="${arg[i].tag}">
                    </div>

                    <div class="flex justify-between">
                    <div class="store-info-box mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">${arg[i].category}</h3>
                        <h2 class="text-gray-900 title-font text-base font-medium" id="items-name">${arg[i].name}</h2>
                        <p class="mt-1">${arg[i].price}</p>
                        <p class="hidden">${arg[i].inCart}</p>
                    </div>
                     <div class="add-button-div rounded-full bg-red-500 w-16 h-10 flex justify-center mt-16 hover:bg-red-800">
                            <button class="text-xl text-white add-button" id="add-button"><i class="bi bi-bag-plus-fill"></i><button>   
                        </div>
                        </div>
                </a>`

                            }
                            return items;
                        }
                        document.getElementById('mainDessert').innerHTML = `
        ${generateListItems(productDesserts)}`;
                    </script>
                </div>
            </div>

        </div>
        @include('components.cart')
    </section>
@endsection
