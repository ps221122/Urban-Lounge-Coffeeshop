<div id="purchase-box-model" class="purchase-box mx-28 bg-gray-300 lg:mt-40 lg:h-2/4 lg:w-3/12">
    <!-- Header -->
    <div class="modal__header my-3 flex justify-between">
        <h1 class="text-3xl text-black">Summary</h1>
        <button class="text-2xl text-red-700"><i id="btnClose" class="bi bi-x-lg"></i></button>
    </div>




    <!-- Content -->
    <div id="content-box" class="cart-row py-4 px-0">
    </div>






    <!-- Footer -->
    <div class="modal__footer mt-8 mb-5">
        <div class="flex content-center justify-between">
            <h1 class="py-4 text-lg text-black">Total price:</h1>
            <p class="cart-total-price py-4 font-sans text-lg text-black" id="cart-total">€0.00</p>
        </div>
        <div class="flex justify-evenly">
            <button class="btn-clear rounded-2xl bg-slate-500 py-1 px-8 text-lg text-white" id="clear-cart-button">clear
                cart</button>

            <button
                class="btn-checkout rounded-2xl border-2 border-solid border-black bg-black py-1 px-8 text-lg text-white">Checkout</button>

        </div>

    </div>
</div>

@include('components.checkoutForm')
