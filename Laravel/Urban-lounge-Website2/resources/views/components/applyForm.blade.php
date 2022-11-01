<!-- Overlay element -->
<div id="overlay" class="fixed inset-0 z-40 hidden h-screen w-screen bg-gray-900 bg-opacity-60"></div>

<!-- The dialog -->
<div id="dialog"
    class="fixed top-1/2 left-1/2 z-50 hidden w-96 -translate-x-1/2 -translate-y-1/2 space-y-5 rounded-md px-8 py-6 drop-shadow-lg"
    style="background-image:url('https://cdn.pixabay.com/photo/2017/01/06/23/21/soap-bubble-1959327_960_720.jpg');">
    <div class="flex justify-between">
        <input type="text" name="position"
            class="title-block border-0 bg-transparent text-2xl font-semibold text-slate-200" id="title-block">
        <button class="text-2xl" id="close"><i class="bi bi-x-lg text-red-700 hover:text-slate-200"></i></button>
    </div>

    <div class="border-t border-b border-gray-300 py-5">
        <form action="/Jobs" method="POST" class="applicant-form flex flex-col" name="myForm">
            @csrf

            <input type="text" name="position"
                class="title-block border-0 bg-transparent text-2xl font-semibold text-transparent"
                id="title-block-hidden">

            <label class="text-lg tracking-wider text-white" for="name">Name:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="text" name="fname" id="fname"
                placeholder="Enter first name">

            <label class="text-lg tracking-wider text-white" for="name">Last name:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="text" name="lname" id="lname"
                placeholder="Enter last name">

            <label class="text-lg tracking-wider text-white" for="phone">Phone number:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="tel" name="tel" id="tel"
                placeholder="Enter phone number" pattern="^\(?([+]31|0031|0)-?6(\s?|-)([0-9]\s{0,3}){8}$">


            <label class="text-lg tracking-wider text-white" for="Usermail">Email:</label>
            <input class="mb-6 mt-2 rounded-lg px-1 text-black" type="email" id="email" name="email"
                placeholder="Enter email">


            <div class="flex justify-around">
                <label class="text-lg tracking-wider text-white" for="Userage">Above 25 years of age:</label>
                <input type="checkbox" class="mb-6 mt-2 rounded-sm px-2 text-black" id="age" name="age"
                    value="true">
            </div>

            <label class="text-lg tracking-wider text-white" for="Uemail">Location:</label>
            <select name="city" id="" class="mb-12 mt-2 rounded-lg px-1 text-lg text-black">
                <option value="Neunen">Neunen</option>
                <option value="Ter Apel">Ter Apel</option>
                <option value="Zwijndrecht">Zwijndrecht</option>
                <option value="Venlo">Venlo</option>
                <option value="Grou">Grou</option>
                <option value="Hilversum">Hilversum</option>
                <option value="Sittard">Sittard</option>
                <option value="Den Haag">Den Haag</option>
                <option value="Deurne">Deurne</option>
                <option value="Dedemsvaart">Dedemsvaart</option>
                <option value="Bronneger">Bronneger</option>
                <option value="Apeldoorn">Apeldoorn</option>
            </select>

            <input class="submit rounded-xl bg-green-600 px-3 py-3 text-lg text-white" type="submit" name="submit"
                id="submit">

        </form>
    </div>
</div>
