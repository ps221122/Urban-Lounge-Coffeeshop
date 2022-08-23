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

function checkoutClicked(params) {
    alert("Thank you for your purchase");
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

    var cartItemRow = `<div class="cart-img-box">
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
