@extends('layout.app')
@section('title', 'Order')

@section('content')

    <div class="orderClientBox m-72">
        <div class="flex justify-evenly">
            <div class="client-box flex flex-col">
                <div class="my-2 flex">
                    <p class="px-2 text-lg">Name:</p>
                    <p class="text-lg">{{ $person->fname }}</p>
                </div>

                <div class="my-2 flex">
                    <p class="px-2 text-lg">Phone:</p>
                    <p class="text-lg">{{ $person->tel }}</p>
                </div>

                <div class="my-2 flex">
                    <p class="px-2 text-lg">Email:</p>
                    <p class="text-lg">{{ $person->email }}</p>
                </div>

                <div class="my-2 flex">
                    <p class="px-2 text-lg">Postcode:</p>
                    <p class="text-lg">{{ $person->pcode }}</p>
                </div>


                <div class="my-2 flex">
                    <p class="px-2 text-lg">Postcode:</p>
                    <p class="text-lg">{{ $person->hnumber }}</p>
                </div>
            </div>

            <div class="">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_YR4tm26ymt.json" background="transparent"
                    speed="1" style="width: 300px; height: 300px; border-radius:50%;" loop autoplay></lottie-player>
            </div>
        </div>



        <div class="product-order-box-client my-16">

            <div class="header-box flex justify-around border-b border-b-neutral-400">
                <h1 class="-mx-20 border-l border-l-neutral-400 text-lg italic">#</h1>

                <h1 class="border-l border-l-neutral-400 text-lg">Date</h1>

                <h1 class="border-l border-l-neutral-400 text-lg">QTY</h1>

                <h1 class="border-l border-l-neutral-400 text-lg">Name</h1>

                <h1 class="border-l border-l-neutral-400 text-lg">Price</h1>
            </div>



            <div class="order-result-box flex">
                <div>
                    @foreach ($orderDetail as $item)
                        <ul class="box1 flex justify-between">
                            <li class="mx-32 text-red-500">#</li>
                            <li class="date mx-44 text-lg font-medium">{{ $item->created_at }}</li>
                            <li class="quantity mx-48 text-lg font-medium italic">{{ $item->quantity }}</li>
                        </ul>
                    @endforeach
                </div>

                <div>
                    @foreach ($product as $item)
                        <ul class="box2 ml-28 flex justify-between">
                            <li class="name mr-40 ml-11 text-lg font-medium">{{ $item->name }}</li>
                            <li class="price ml-32 text-lg font-medium italic">{{ $item->price }}</li>
                        </ul>
                    @endforeach
                </div>
            </div>


            <div class="total-box my-8 flex justify-end">
                <h1 class="mx-3 text-lg">Total:</h1>
                <h1 class="box-total-amount text-lg italic">€ 0.00</h1>
            </div>
        </div>

    </div>

    <div class="box m-72">
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
    </div>


    <div class="seasons">
        <div class="snowflakes winter">
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
    </div>


    {{-- <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script> --}}
@endsection
