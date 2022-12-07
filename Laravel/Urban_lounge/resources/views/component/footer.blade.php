<footer class="rounded-md p-4 shadow md:px-6 md:py-0">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('index') }}" class="mb-4 flex items-center sm:mb-0">
            <img src="./assets/logo.png" class="mr-3 h-8 sm:h-16" alt="Logo">
            <span class="self-center whitespace-nowrap text-2xl font-semibold">Urban Lounge</span>
        </a>
        <ul class="mb-6 flex flex-wrap items-center text-sm text-gray-500 dark:text-gray-400 sm:mb-0">
            <li>
                <a href="{{ route('jobs') }}" class="mr-4 text-black hover:underline md:mr-6">Jobs</a>
            </li>
            <li>
                <a href="{{ route('privacy') }}" class="mr-4 text-black hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="{{ route('terms') }}" class="mr-4 text-black hover:underline md:mr-6">Terms</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="text-black hover:underline">FAQ</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8">
    <span class="block text-sm text-black sm:text-center">© 2022 <a href="" class="hover:underline">Urban
            Lounge™</a>. All Rights Reserved.
    </span>
</footer>
