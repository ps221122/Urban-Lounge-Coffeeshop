@section('title', 'Profile')
<x-app-layout>
    <div class="py-14 sm:mx-40 lg:mx-96">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                <div class="max-w-7xl">
                    @include('includes.formEmail')
                </div>
            </div>

            <div class="userCard bg-white p-4 shadow sm:rounded-lg sm:p-8">
                <div class="max-w-7xl">
                    @include('includes.formUpdate')
                </div>
            </div>

            <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                <div class="max-w-7xl">
                    @include('includes.formPassword')
                </div>
            </div>

            <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                <div class="max-w-7xl">
                    @include('includes.formDelete')
                </div>
            </div>



        </div>

    </div>
</x-app-layout>
