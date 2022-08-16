<div id="purchase-box-model" class="purchase-box mr-28 bg-gray-300 h-96 w-2/12">
    <!-- Header -->
    <div class="modal__header flex justify-between my-3 ">
        <h1 class="text-3xl text-black">Summary</h1>
        <button class="text-red-700 text-2xl"><i id="myBtn" class="bi bi-x-lg"></i></button>
    </div>

    <!-- Content -->
    ...

    <!-- Footer -->
    <div class="modal__footer">
        <div class="flex content-center justify-between">
            <h1 class="text-lg text-black py-4">Total price:</h1>
            <p class="py-4 text-lg text-black">€0.00</p>
        </div>
        <button
            class="border-solid border-2 border-black bg-black text-white px-28 rounded-2xl py-1 text-lg">Checkout</button>
    </div>
</div>

<script>
    document.getElementById("myBtn").addEventListener("click", function() {
        var boxy = document.getElementById("purchase-box-model");
        if (boxy.style.display === "block") {
            boxy.style.display = "none";
        }
    });
</script>
