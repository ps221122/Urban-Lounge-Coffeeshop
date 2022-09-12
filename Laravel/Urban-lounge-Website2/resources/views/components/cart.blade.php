<div id="purchase-box-model" class="purchase-box mr-28 bg-gray-300 h-2/4 w-2/12">
    <!-- Header -->
    <div class="modal__header flex justify-between my-3 ">
        <h1 class="text-3xl text-black">Summary</h1>
        <button class="text-red-700 text-2xl"><i id="myBtn" class="bi bi-x-lg"></i></button>
    </div>




    <!-- Content -->
    <div id="content-box" class="cart-row py-4 px-0">
    </div>






    <!-- Footer -->
    <div class="modal__footer mt-8 mb-5">
        <div class="flex content-center justify-between">
            <h1 class="text-lg text-black py-4">Total price:</h1>
            <p class="py-4 text-lg text-black font-sans cart-total-price" id="cart-total">€0.00</p>
        </div>
        <div class="flex justify-evenly">
            <button class="text-white  rounded-2xl py-1 text-lg bg-slate-500 px-8 btn-clear"
                id="clear-cart-button">clear
                cart</button>

            <button
                class="border-solid border-2 border-black bg-black text-white rounded-2xl py-1 text-lg px-8 btn-checkout">Checkout</button>

        </div>

    </div>
</div>

@include('components.checkoutForm')
