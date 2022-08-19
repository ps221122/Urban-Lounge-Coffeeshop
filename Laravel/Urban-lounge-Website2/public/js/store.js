(function () {
    const cartBtn = document.querySelectorAll(".add-button");

    cartBtn.forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            // console.log(event.target);


            if (event.target.parentElement.classList.contains('add-button')) {
                let fullImagePath = event.target.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.src;


                let productName = event.target.parentElement.parentElement.previousElementSibling.children[1].textContent;

                let productPrice = event.target.parentElement.parentElement.previousElementSibling.children[2].textContent;

                let productIncart = event.target.parentElement.parentElement.previousElementSibling.children[3].textContent;

                productIncart++;

                productPrice.slice(1).trim;
                productPrice = productPrice.replace("€", "");


                const items = {};


                items.img = fullImagePath;
                items.name = productName;
                items.price = productPrice;
                items.incart = productIncart;

                // localStorage.setItem("cartItemsStorageLocation", JSON.stringify(items));

                // if (items != null) {
                //     if (items[items.tag] == undefined) {
                //         items.incart = 1;
                //     }
                // }

                // console.log(cartItemsStorageLocation);

                const cartItemsBox = document.createElement("div");
                cartItemsBox.classList.add("flex", "justify-between", "mt-2");

                cartItemsBox.innerHTML = `<div class="cart-img-box">
                <img class="h-16 w-20 rounded-full"
                    src="${items.img}"
                    alt="-">
            </div>

            <div class="cart-name-box flex flex-col">
                <p class="text-lg font-medium italic">${items.name}</p>
                <div class="flex">
                    <p class="text-lg italic font-semibold px-8 cart-item-unit">${items.incart}x</p>
                    <p class="text-lg italic font-semibold text-black cart-item-price">${items.price}</p>
                </div>
            </div>

            <div class="cart-delete-button-box mt-2">
                <button class="text-red-600 text-2xl hover:text-black"><i class="bi bi-trash3-fill"></i></button>
            </div>`;

                //select cart
                const cart = document.getElementById("purchase-box-model");
                const total = document.querySelector(".modal__footer");

                cart.insertBefore(cartItemsBox, total);
                // console.log("your product has been added");

                showTotal();

            }
        })
    })
    function showTotal() {
        const total = [];
        const items = document.querySelectorAll(".cart-item-price");

        items.forEach(function (item) {
            total.push(parseFloat(item.textContent));
        })

        //console.log(total);


        const priceTotal = total.reduce(function (total, item) {
            total += item;
            return total;
        }, 0)
        const priceTotalValue = priceTotal.toFixed(2);

        document.getElementById("cart-total").textContent = "€" + priceTotalValue;
        document.getElementById("cart-total-price").textContent = "€" + priceTotalValue;
    }
})();




































function myFunction() {
    var x = document.getElementById("purchase-box-model");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
    else {
        x.style.display = "none";
    }
}

