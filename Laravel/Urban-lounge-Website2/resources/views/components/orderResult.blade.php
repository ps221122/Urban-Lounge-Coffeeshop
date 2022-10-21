@extends('layout.app')
@section('title', 'Order')

@section('content')
    <div class="orderClientBox m-72">

        {{-- <div class="client-box flex flex-col">

            <div class="my-2 flex">
                <p class="px-2 text-lg">Name:</p>
                <p class="text-lg">{{ $person->fname }}</p>
            </div>

            <div class="my-2 flex">
                <p class="px-2 text-lg">Phone:</p>
                <p class="text-lg">{{ $person->tel }}</p>
            </div>

            <div class="flex my-2">
                <p class="px-2 text-lg">Email:</p>
                <p  class="text-lg">{{ $person -> email }}</p>
            </div>

            <div class="flex my-2">
                <p class="px-2 text-lg">Postcode:</p>
                <p  class="text-lg">{{ $person -> pcode }}</p>
            </div>


            <div class="flex my-2">
                <p class="px-2 text-lg">Postcode:</p>
                <p  class="text-lg">{{ $person -> hnumber }}</p>
            </div>
        </div> --}}

        <div class="product-order-box-client">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b bg-white">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 text-left text-lg font-medium text-gray-900">
                                            #
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-left text-lg font-medium text-gray-900">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-left text-lg font-medium text-gray-900">
                                            QTY
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-left text-lg font-medium text-gray-900">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productArr as $product)
                                        <tr class="border-b bg-gray-100">

                                            <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">#</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                {{ $product-> }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                quantity
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900">
                                                price
                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900"></td>
                                        <td class="whitespace-nowrap px-6 py-4 text-base font-light text-gray-900">Total:
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900"></td>
                                        <td class="whitespace-nowrap px-6 py-4 text-base font-light text-gray-900">€</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="box">
        <div class="spinner1">
            <p id="demo">Loading</p>
            <div class="spinner-sector spinner-sector-red"></div>
            <div class="spinner-sector spinner-sector-blue"></div>
            <div class="spinner-sector spinner-sector-green"></div>
        </div>

        <div class="secondSpinner">
            <div class="spinner2">
                <div class="spinner-sector spinner-sector-green1"></div>
                <div class="spinner-sector spinner-sector-blue1"></div>
                <div class="spinner-sector spinner-sector-red1"></div>
            </div>

            <div class="spinner3">
                <div class="spinner-sector spinner-sector-green2"></div>
                <div class="spinner-sector spinner-sector-blue2"></div>
                <div class="spinner-sector spinner-sector-red2"></div>
            </div>
        </div>
    </div> --}}


    {{-- <div class="seasons">
        {{-- <div class="snowflakes winter">
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❄
            </div>
        </div> 

        <div class="autum">
            <div class="orderCheckoutBox">
                <div class="set">
                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>
                </div>

                <div class="set set2">
                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>
                </div>

                <div class="set set3">
                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves1.png?alt=media&token=3b00e229-fbd0-4b19-b9e0-e841693221d2"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves2.png?alt=media&token=4d391ed7-3d4b-457a-bee2-dae926be7cb3"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves3.png?alt=media&token=25ae3af4-2550-4010-8d10-025fc3c4f1ea"
                            alt="Leaf" title="Leaf">
                    </div>

                    <div>
                        <img src="https://firebasestorage.googleapis.com/v0/b/fire-fotos-8e3f9.appspot.com/o/img%2Fleaves4.png?alt=media&token=73cc7170-f391-46f7-8a7e-db7b34708d7f"
                            alt="Leaf" title="Leaf">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@endsection
