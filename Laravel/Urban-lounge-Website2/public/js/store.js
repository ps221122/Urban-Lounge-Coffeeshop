
function myFunction() {
    var x = document.getElementById("purchase-box-model");
    if (x.style.display === "none") {
        x.style.display = "block";

    }
    else {
        x.style.display = "none";
    }
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready();
}

function ready() {
    setTime();
    var removeItems = document.getElementsByClassName("trash-can");
    // console.log(removeItems);
    for (var i = 0; i < removeItems.length; i++) {
        var button = removeItems[i]
        button.addEventListener("click", removeCartItems)
    }

    var quantityInputs = document.getElementsByClassName("cart-item-unit");
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    var addToCart = document.querySelectorAll(".add-button");
    addToCart.forEach(function (btn) {
        btn.addEventListener('click', addToCartClicked)
    })

    document.getElementsByClassName("btn-checkout")[0].addEventListener("click", checkoutClicked);
    document.getElementsByClassName("btn-clear")[0].addEventListener("click", clearClicked);
}

function checkoutClicked(items) {
    displayFormBox();
    getProductInfo(items);
}

function getProductInfo() {
    var name = document.getElementsByClassName("title");

    var value = document.getElementsByClassName("cart-item-unit");



    for (let index = 0; index < name.length; index++) {
        for (let index = 0; index < value.length; index++);
        const unit = value[index].value;
        const element = name[index].innerText;

        var obj = {
            name: element,
            unit: unit
        }



        giveId(obj);
    }

}

function giveId(obj) {
    var id = 0;

    if (obj.name == "Coconut Pancakes") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 1,
        }
    }
    else if (obj.name == "French Toast") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 2,
        }

    }
    else if (obj.name == "Elvis Presley waffles") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 3,
        }
    }
    else if (obj.name == "Cornmeal porridge") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 4,
        }
    }
    else if (obj.name == "Ackee and saltfish") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 5,
        }
    }
    else if (obj.name == "Fried eggs sandwich") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 6,
        }
    }
    else if (obj.name == "All in 1 special") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 7,
        }
    }
    else if (obj.name == "EggyBurrito menu") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 8,
        }
    }
    else if (obj.name == "Steamed cabbage") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 9,
        }
    }
    else if (obj.name == "Big Breakfast menu") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 10,
        }
    }
    else if (obj.name == "Breakfast pizza") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 11,
        }
    }
    else if (obj.name == "Ayaka") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 12,
        }
    }
    else if (obj.name == "Bacon & cheese gril") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 13,
        }
    }
    else if (obj.name == "Pizza cheese & grilled beef") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 14,
        }
    }
    else if (obj.name == "Pizza grillled beef meatlover") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 15,
        }
    }
    else if (obj.name == "Pizza bbq Mixed grill") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 16,
        }
    }
    else if (obj.name == "Pizza frikan'Dutchman") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 17,
        }
    }
    else if (obj.name == "Pizza BBQ Chicken & Bacon") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 18,
        }
    }
    else if (obj.name == "Pizza Shoarma") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 19,
        }
    }
    else if (obj.name == "Pizza Chicken Kebab") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 20,
        }
    }
    else if (obj.name == "Pizza Pepperoni Party") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 21,
        }
    }
    else if (obj.name == "Pizza american Supreme Meatlover") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 22,
        }
    }
    else if (obj.name == "Pizza Hawaii") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 23,
        }
    }
    else if (obj.name == "Pizza Extravaganzza") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 24,
        }
    }
    else if (obj.name == "Pizza Veggi") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 25,
        }
    }
    else if (obj.name == "Pizza Caprese") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 26,
        }
    }
    else if (obj.name == "Pizza Veggi Pesto Pollo") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 27,
        }
    }
    else if (obj.name == "Pizza Vegan Veggi") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 28,
        }
    }
    else if (obj.name == "Vegan Margaritha") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 29,
        }
    }
    else if (obj.name == "Vegan Funghi") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 30,
        }
    }
    else if (obj.name == "Pizza Margaritha (Glutenvrij)") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 31,
        }
    }
    else if (obj.name == "Pizza Perfect Pepperoni(Glutenvrij)") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 32,
        }
    }
    else if (obj.name == "Vegan Zwarte Truffel") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 33,
        }
    }
    else if (obj.name == "Vegan Shoarma Pizza") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 34,
        }
    }
    else if (obj.name == "Pizza Tonno") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 35,
        }
    }
    else if (obj.name == "BBQ Bacon & Chicken(Glutenvrij)") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 36,
        }
    }
    else if (obj.name == "Shirmp Pasta Alfredo") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 37,
        }
    }
    else if (obj.name == "Pasta BigolÍ") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 38,
        }
    }
    else if (obj.name == "Pasta Tortellini") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 39,
        }
    }
    else if (obj.name == "Fettuccine Alfredo") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 40,
        }
    }
    else if (obj.name == "Lasagna") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 41,
        }
    }
    else if (obj.name == "Garlic Glazed Noodle") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 42,
        }
    }
    else if (obj.name == "Bacon Mac & Cheese") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 43,
        }
    }
    else if (obj.name == "Pasta Calamarata") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 44,
        }
    }
    else if (obj.name == "Lo Mein Noodles") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 45,
        }
    }
    else if (obj.name == "Rasta Pasta") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 46,
        }
    }
    else if (obj.name == "Pasta alla Pescatora") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 47,
        }
    }
    else if (obj.name == "Spaghetti Vongole") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 48,
        }
    }
    else if (obj.name == "Chicken Caesar Salad") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 49,
        }
    }
    else if (obj.name == "Caribbean Mixed Rice") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 50,
        }
    }
    else if (obj.name == "Curry goat/mutton/chicken") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 51,
        }
    }
    else if (obj.name == "Crispy Fried Red Snapper With Sauce") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 52,
        }
    }
    else if (obj.name == "Steamed Fish with Dumplings") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 53,
        }
    }
    else if (obj.name == "Red Peas Soup") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 54,
        }
    }
    else if (obj.name == "Chilaquiles") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 55,
        }
    }
    else if (obj.name == "Tutu & Kabritu") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 56,
        }
    }
    else if (obj.name == "STEWED OXTAIL") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 57,
        }
    }
    else if (obj.name == "Tandoori Chicken") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 58,
        }
    }
    else if (obj.name == "Chicken Foot Soup") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 59,
        }
    }
    else if (obj.name == "Ratatouille") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 60,
        }
    }
    else if (obj.name == "Tick Shake Strawberry") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 61,
        }
    }
    else if (obj.name == "Thick Shake Banana") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 62,
        }
    }
    else if (obj.name == "Thick shake Premium caramel") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 63,
        }
    }
    else if (obj.name == "0.25 LT Fuze Tea Green Tea") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 64,
        }
    }
    else if (obj.name == "0.33 Liter Coca Cola") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 65,
        }
    }
    else if (obj.name == "0.33 liter Fernandes Cherry") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 66,
        }
    }
    else if (obj.name == "0.33 liter Fanta") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 67,
        }
    }
    else if (obj.name == "0.33 liter Fanta Cassis") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 68,
        }
    }
    else if (obj.name == "0.33 liter Fernandes Red Grape") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 69,
        }
    }
    else if (obj.name == "Fria Grape") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 70,
        }
    }
    else if (obj.name == "0.5 liter Spa water") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 71,
        }
    }
    else if (obj.name == "Minute Maid") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 72,
        }
    }
    else if (obj.name == "Smirnoff Ice Vodka Mixed Drink 70cl") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 73,
        }
    }
    else if (obj.name == "White Claw Hard Seltzer 330ml") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 74,
        }
    }
    else if (obj.name == "Heineken Premium Pilsener Bier") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 75,
        }
    }
    else if (obj.name == "Bavaria - Pils") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 76,
        }
    }
    else if (obj.name == "Jupiler Belgisch Pils") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 77,
        }
    }
    else if (obj.name == "Grolsch - Pils - 25cl") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 78,
        }
    }
    else if (obj.name == "Orbea - Pinot Grigio - 750ML") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 79,
        }
    }
    else if (obj.name == "Excellence - Chardonnay - 750ML") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 80,
        }
    }
    else if (obj.name == "Leffe Blond Belgisch Abdijbier Flessen") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 81,
        }
    }
    else if (obj.name == "Ponche Crema Curacao") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 82,
        }
    }
    else if (obj.name == "Pistachio Curacao") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 83,
        }
    }
    else if (obj.name == "Moët & Chandon - Brut Impérial in giftbox") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 84,
        }
    }
    else if (obj.name == "Dutch Stroopwafel") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 85,
        }
    }
    else if (obj.name == "Dutch Apple Pie") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 86,
        }
    }
    else if (obj.name == "Oliebollen (Dutch Doughnuts)") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 87,
        }
    }
    else if (obj.name == "Bulla cake") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 88,
        }
    }
    else if (obj.name == "Sweet potato pudding") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 89,
        }
    }
    else if (obj.name == "Bun & Cheese") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 90,
        }
    }
    else if (obj.name == "Li di fruta") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 91,
        }
    }
    else if (obj.name == "Li di Pinda") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 92,
        }
    }
    else if (obj.name == "Caramel Pecan Ice-cream") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 93,
        }
    }
    else if (obj.name == "Tumba Ice-Cream") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 94,
        }
    }
    else if (obj.name == "Arepa di pampuna") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 95,
        }
    }
    else if (obj.name == "Pandushi") {
        obj = {
            name: obj.name,
            unit: obj.unit,
            id: 96,
        }
    }


    createArray(obj);
}

function createArray(obj) {
    const cartItemRows = document.createElement("div");

    var cartItems = document.getElementsByClassName("form")[0];

    cartItemRows.classList.add("flex", "mt-4");

    var cartItemName = cartItems.getElementsByClassName("title");

    for (let i = 0; i < cartItemName.length; i++) {
        if (cartItemName[i].innerText == element) {
            alert("This item is already added to the cart");
            return;
        }

    }

    var cartItemRow = `
       <input class="italic font-semibold px-1 w-12  text-center text-lg bg-transparent " type="number" name="id[]" id="id"
                placeholder="" value="${obj.id}" readonly>

        <input class="italic font-semibold px-1 w-12  text-center text-lg bg-transparent" type="number" name="unit[]" id="unit"
                placeholder="" value="${obj.unit}" readonly>

        <p class="text-xl text-white tracking-wider" name="name[]" id="name">${obj.name}</p>`;

    cartItemRows.innerHTML = cartItemRow;
    cartItems.append(cartItemRows);
    passArray(obj);
}

function displayFormBox(params) {
    const box = document.getElementById('content-box');

    const childBox = document.getElementById("img");

    if (box.contains(childBox)) {
        var dialog = document.getElementById('dialog');
        var closeButton = document.getElementById('close');
        var overlay = document.getElementById('overlay');

        // show the overlay and the dialog

        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');


        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    }
    else {
        alert("Add items first!");
    }

}

function clearClicked(params) {
    var cartItems = document.getElementsByClassName("cart-row")[0];
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
        updateCartTotal();

    }
}

function addToCartClicked(event) {
    var button = event.target;
    if (button.parentElement.classList.contains('add-button')) {
        let fullImagePath = event.target.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.src;


        let productName = event.target.parentElement.parentElement.previousElementSibling.children[1].textContent;

        let productPrice = event.target.parentElement.parentElement.previousElementSibling.children[2].textContent;

        let productIncart = event.target.parentElement.parentElement.previousElementSibling.children[3].textContent;

        productIncart = 1;

        const items = {};

        items.img = fullImagePath;
        items.name = productName;
        items.price = productPrice;
        items.inCart = productIncart;

        addItemToCart(items);
        updateCartTotal();
    }
}

function addItemToCart(items) {
    const cartItemRows = document.createElement("div");

    var cartItems = document.getElementsByClassName("cart-row")[0];

    cartItemRows.classList.add("flex", "justify-between", "mt-2", "cart-items");

    var cartItemName = cartItems.getElementsByClassName("title");

    for (let i = 0; i < cartItemName.length; i++) {
        if (cartItemName[i].innerText == items.name) {
            alert("This item is already added to the cart");
            return;
        }

    }

    var cartItemRow = `<div id="img" class="cart-img-box">
                <img class="h-16 w-20 rounded-full"
                    src="${items.img}" alt="${items.name}">
            </div>

            <div class="cart-name-box flex flex-col">
                <p class="text-lg font-medium italic title">${items.name}</p>
                <div class="flex justify-evenly">
                    <input type="number"
                        class="italic font-semibold px-1 w-12 cart-item-unit text-center text-lg bg-transparent"
                        value="${items.inCart}" />
                    <p class="text-lg italic font-semibold text-black cart-item-price">${items.price}</p>
                </div>
            </div>

            <div class="cart-delete-button-box mt-2">
                <button type="button" id="trash" class="text-red-600 text-2xl hover:text-black trash-can"><i
                        class="bi bi-trash3-fill"></i></button>
            </div>`;

    cartItemRows.innerHTML = cartItemRow;
    cartItems.append(cartItemRows);
    cartItemRows.getElementsByClassName("trash-can")[0].addEventListener("click", removeCartItems);
    cartItemRows.getElementsByClassName("cart-item-unit")[0].addEventListener("change", quantityChanged);
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function removeCartItems(event) {
    var buttonClick = event.target
    buttonClick.parentElement.parentElement.parentElement.outerHTML = "";
    updateCartTotal();
}

function updateCartTotal() {
    var cartItemsContainer = document.getElementsByClassName("cart-row")[0];
    var cartRows = cartItemsContainer.getElementsByClassName(" cart-items");
    var total = 0;
    for (let i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName("cart-item-price")[0];
        var quantityElement = cartRow.getElementsByClassName("cart-item-unit")[0];
        var price = parseFloat(priceElement.innerText.replace("€", " "));

        var quantity = quantityElement.value;
        total = total + (price * quantity);

    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName("cart-total-price")[0].innerText = "€" + total;
    document.getElementById("cart-price-total-nav").textContent = "€" + total;
}

function dateVariation(params) {
    const date = new Date()
    var data = date.toLocaleString();

    if (data == "01-08") {
        console.log("autumn");
        document.body.style.backgroundColor = "#e9bf8b";
    }
    else if (data == "01-11") {
        console.log("winter");
        document.body.style.backgroundColor = "#b6d6c8";
    }
    else if (data == "01-02") {
        console.log("spring");
        document.body.style.backgroundColor = "#AFD297";
    }
    else if (data == "01-05") {
        console.log("summer");
        document.body.style.backgroundColor = "#f0f2e7";
    }
    else {
        document.body.style.backgroundColor = "#F6F6F5";
    }

}

function setTime(params) {
    var objDate = new Date();
    var Hours = objDate.getHours() * 100 + objDate.getMinutes();
    var day;
    var sign = document.getElementById("sign");
    switch (new Date().getDay()) {
        case 0://Sunday
            sign.innerHTML = "Sorry unfortunately we are closed today, we'll be back on Monday at 12:30pm";
            sign.style.color = "red";
            break;
        case 1: //Monday
            if (Hours >= 1230 && Hours <= 1800) {
                sign.innerHTML = "Yes, we are open between 12:30 - 18:00.";
                sign.style.color = "green";
            }
            else {
                sign.innerHTML = "We are closed now and will reopen tomorrow";
                sign.style.color = "red";
            }
            break;
        case 2://Tuesday
        case 3://Wednesday
        case 4://Thursday
            if (Hours >= 830 && Hours <= 1800) {
                sign.innerHTML = "Yes, we are open between 08:30 - 18:00.";
                sign.style.color = "green";

            }
            else {
                sign.innerHTML = "We are closed now and will reopen tomorrow";
                sign.style.color = "red";
            }
            break;
        case 5://Friday
            if (Hours >= 830 && Hours <= 1930) {
                sign.innerHTML = "Yes, we are open between 08:30 - 19:30.";
                sign.style.color = "forestgreen";
            }
            else {
                sign.innerHTML = "We are closed now and will reopen tomorrow";
                sign.style.color = "red";
            }
            break;
        case 6://Saturday
            if (Hours >= 900 && Hours <= 1700) {
                sign.innerHTML = "Yes, we are open between 09:00 - 17:00.";
                sign.style.color = "green";
            }
            else {
                sign.innerHTML = "We are closed now and will reopen tomorrow";
                sign.style.color = "red";
            }
            break;
        default:
            alert("Er is iets die mis gaat");
            break;
    }

}


var falling = true;

TweenLite.set("#container", { perspective: 600 })
TweenLite.set("img", { xPercent: "-50%", yPercent: "-50%" })

var total = 30;
var container = document.getElementById("container"), w = window.innerWidth, h = window.innerHeight;

for (i = 0; i < total; i++) {
    var Div = document.createElement('div');
    TweenLite.set(Div, { attr: { class: 'dot' }, x: R(0, w), y: R(-200, -150), z: R(-200, 200) });
    container.appendChild(Div);
    animm(Div);
}

function animm(elm) {
    TweenMax.to(elm, R(6, 15), { y: h + 100, ease: Linear.easeNone, repeat: -1, delay: -15 });
    TweenMax.to(elm, R(4, 8), { x: '+=100', rotationZ: R(0, 180), repeat: -1, yoyo: true, ease: Sine.easeInOut });
    TweenMax.to(elm, R(2, 8), { rotationX: R(0, 360), rotationY: R(0, 360), repeat: -1, yoyo: true, ease: Sine.easeInOut, delay: -5 });
};

function R(min, max) { return min + Math.random() * (max - min) };




dateVariation();


