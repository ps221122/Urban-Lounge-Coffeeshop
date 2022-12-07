<div class="">
    <h1 class="py-4 text-base lg:text-xl">Delete Account</h1>
    <p>Once your account is deleted all of its resources any data will be permanently deleted. Before deleting your
        accoun. Please download any data or information that you wish to retain.</p>

    <div class="my-5">
        <form action="/Profile/{{ Auth::user()->id }}/delete">
            <button type="submit"
                class="w-full rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-700 dark:hover:bg-red-700 dark:focus:ring-red-800 sm:w-auto">Delete</button>
        </form>

    </div>
</div>
