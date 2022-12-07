<div class="">
    <h1 class="py-4 text-base lg:text-xl">Personal Information</h1>
    <p>Update your account's profile information and email address.</p>

    <div class="my-5">
        <form action="/Profile/{{ Auth::user()->id }}/update" method="GET">
            <div class="mb-6">
                <label for="email" class="mb-2 block text-sm font-medium text-black">Your
                    email</label>
                <input type="email" id="email" name="u_email"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm tracking-wide text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    placeholder="enter email" required value="{{ Auth::user()->email }}">
            </div>
            <div class="mb-6">
                <label for="name" class="mb-2 block text-sm font-medium text-black">Your name</label>
                <input type="text" id="name" name="u_name"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    required value="{{ Auth::user()->name }}">
            </div>

            <button type="submit"
                class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Save</button>
        </form>

    </div>
</div>
