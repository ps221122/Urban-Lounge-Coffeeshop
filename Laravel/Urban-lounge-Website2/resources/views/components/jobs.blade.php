@extends('layout.app')
@section('title', 'Jobs')

@section('content')
    <section>
        @foreach ($jobs as $job)
            <div
                class="container mx-auto flex flex-col items-center border-b-2 border-dotted border-gray-600 px-5 py-24 md:flex-row">
                <div
                    class="mb-16 flex flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:pr-16 md:text-left lg:flex-grow lg:pr-24">
                    <h1 class="title-font job-title mb-4 text-3xl font-medium text-gray-900 sm:text-4xl">{{$job->id}}. {{ $job->title }}
                    </h1>
                    <p class="mb-8 leading-relaxed">{{ $job->description }}</p>
                    <p class="mb-8 text-lg italic leading-relaxed tracking-wide">Median hourly wage: €{{ $job->min_salary }}
                        - €{{ $job->max_salary }}
                    </p>

                    <div class="flex justify-center">
                        <button
                            class="inline-flex rounded border-0 bg-indigo-500 py-2 px-6 text-lg text-white hover:bg-indigo-600 focus:outline-none apply-button">Apply
                            now</button>
                    </div>
                </div>
                <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
                    <img class="rounded object-cover object-center" alt="hero"
                        src="https://cdn.pixabay.com/photo/2019/09/05/04/39/dream-job-4453054_960_720.jpg">
                </div>
            </div>
        @endforeach
    </section>
    @include('components.applyForm')
@endsection
