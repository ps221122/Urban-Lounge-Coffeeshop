<!-- Overlay element -->
<div id="overlay" class="fixed inset-0 z-40 hidden h-screen w-screen bg-gray-900 bg-opacity-60"></div>

<!-- The dialog -->
<div id="dialog"
    class="fixed top-1/2 left-1/2 z-50 hidden w-96 -translate-x-1/2 -translate-y-1/2 space-y-5 rounded-md px-8 py-6 drop-shadow-lg"
    style="background-image:url('https://cdn.pixabay.com/photo/2017/08/01/13/47/light-2565575_960_720.jpg');">
    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold text-slate-200">My details</h1>
        <button class="text-2xl" id="close"><i class="bi bi-x-lg text-red-700 hover:text-slate-200"></i></button>
    </div>

    <div class="border-t border-b border-gray-300 py-5">
        <form action="/Order" method="POST" class="form flex flex-col" name="myForm">
            @csrf
            



            <label class="text-white" for="name">Name:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="text" name="fname" id="fname"
                placeholder="Enter name">


            <label class="text-white" for="phone">Phone number:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="tel" name="tel" id="tel"
                placeholder="Enter phone number">


            <label class="text-white" for="Uemail">Email:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="email" id="email" name="email"
                placeholder="Enter email">


            <label class="text-white" for="postcode">PostCode:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="text" name="pcode" id="pcode"
                placeholder="Enter postcode">


            <label class="text-white" for="houseN">House number:</label>
            <input class="mb-8 mt-2 rounded-lg px-1 text-black" type="number" name="hnumber" id="hnumber"
                placeholder="Enter house number">


            <input class="submit submit-checkout-button rounded-xl bg-green-600 px-3 py-3 text-lg text-white"
                type="submit" name="submit" id="submit">


            @foreach ($cartItems as $item)
                <div class="flex justify-evenly">
                    <input type="hidden" value="{{ $item->id }}" name="id[]">
                    <input type="hidden" value="{{ $item->name }}" name="title">
                    <input type="hidden" value="{{ $item->price }}" name="price">
                    <input type="hidden" value="{{ $item->image }}" name="image">
                    <input type="hidden" value="{{ $item->quantity }}" name="unit[]">
                </div>
            @endforeach
        </form>
    </div>
</div>
