@extends ('layout.app')
@section('title', 'FAQ')
@section('content')
    <section class="my-32 mx-0 lg:mx-28">
        <div class="container">
            <div class="FAQ-body">
                <h1 class="text-xl font-light italic underline lg:text-4xl">Frequently asked question</h1>
                <div class="mx-0 my-12 h-auto">
                    <div class="rounded border lg:mx-auto lg:w-6/12">
                        <div class="bg-white p-3 shadow-sm lg:p-10">
                            <h3 class="text-lg font-medium text-gray-800">Several Windows stacked on each other</h3>
                            <p class="my-3 text-sm font-light text-gray-600">
                                The accordion is a graphical control element comprising a vertically stacked list of items
                                such as labels or thumbnails
                            </p>

                            <div class="mx-auto my-5 h-1 w-full border-b"></div>

                            <!-- What is term -->
                            <div class="transition hover:bg-indigo-50">
                                <!-- header -->
                                <div
                                    class="accordion-header flex h-16 cursor-pointer items-center space-x-5 px-5 transition">
                                    <i class="fas fa-plus"></i>
                                    <h3>What is term?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content max-h-0 overflow-hidden px-5 pt-0">
                                    <p class="pl-9 text-justify font-light leading-6">
                                        Our asked sex point her she seems. New plenty she horses parish design you. Stuff
                                        sight equal of my woody. Him children bringing goodness suitable she entirely put
                                        far daughter.
                                    </p>
                                    <button
                                        class="font-lg my-5 ml-9 rounded-full bg-indigo-600 px-6 py-2 font-medium text-white">Learn
                                        more</button>
                                </div>
                            </div>

                            <!-- When to use Accordion Components -->
                            <div class="transition hover:bg-indigo-50">
                                <!-- header -->
                                <div
                                    class="accordion-header flex h-16 cursor-pointer items-center space-x-5 px-5 transition">
                                    <i class="fas fa-plus"></i>
                                    <h3>When to use Accordion Components?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content max-h-0 overflow-hidden px-5 pt-0">
                                    <p class="pl-9 text-justify font-light leading-6">
                                        Our asked sex point her she seems. New plenty she horses parish design you. Stuff
                                        sight equal of my woody. Him children bringing goodness suitable she entirely put
                                        far daughter.
                                    </p>
                                    <button
                                        class="font-lg my-5 ml-9 rounded-full bg-indigo-600 px-6 py-2 font-medium text-white">Learn
                                        more</button>
                                </div>
                            </div>

                            <!-- Accordion Wrapper -->
                            <div class="transition hover:bg-indigo-50">
                                <!-- header -->
                                <div
                                    class="accordion-header flex h-16 cursor-pointer items-center space-x-5 px-5 transition">
                                    <i class="fas fa-plus"></i>
                                    <h3>How can it be defined?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content max-h-0 overflow-hidden px-5 pt-0">
                                    <p class="pl-9 text-justify font-light leading-6">
                                        Our asked sex point her she seems. New plenty she horses parish design you. Stuff
                                        sight equal of my woody. Him children bringing goodness suitable she entirely put
                                        far daughter.
                                    </p>
                                    <button
                                        class="font-lg my-5 ml-9 rounded-full bg-indigo-600 px-6 py-2 font-medium text-white">Learn
                                        more</button>
                                </div>
                            </div>

                            <!-- Accordion Wrapper -->
                            <div class="transition hover:bg-indigo-50">
                                <!-- header -->
                                <div
                                    class="accordion-header flex h-16 cursor-pointer items-center space-x-5 px-5 transition">
                                    <i class="fas fa-plus"></i>
                                    <h3>Chamber reached do he nothing be?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content max-h-0 overflow-hidden px-5 pt-0">
                                    <p class="pl-9 text-justify font-light leading-6">
                                        Our asked sex point her she seems. New plenty she horses parish design you. Stuff
                                        sight equal of my woody. Him children bringing goodness suitable she entirely put
                                        far daughter.
                                    </p>
                                    <button
                                        class="font-lg my-5 ml-9 rounded-full bg-indigo-600 px-6 py-2 font-medium text-white">Learn
                                        more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .accordion-content {
                        transition: max-height 0.3s ease-out, padding 0.3s ease;
                    }
                </style>

                <script>
                    const accordionHeader = document.querySelectorAll(".accordion-header");
                    accordionHeader.forEach((header) => {
                        header.addEventListener("click", function() {
                            const accordionContent = header.parentElement.querySelector(".accordion-content");
                            let accordionMaxHeight = accordionContent.style.maxHeight;

                            // Condition handling
                            if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
                                accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
                                header.querySelector(".fas").classList.remove("fa-plus");
                                header.querySelector(".fas").classList.add("fa-minus");
                                header.parentElement.classList.add("bg-indigo-50");
                            } else {
                                accordionContent.style.maxHeight = `0px`;
                                header.querySelector(".fas").classList.add("fa-plus");
                                header.querySelector(".fas").classList.remove("fa-minus");
                                header.parentElement.classList.remove("bg-indigo-50");
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </section>
@endsection
