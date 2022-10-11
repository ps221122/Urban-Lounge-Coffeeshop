@extends('layout.app')
@section('title', 'Order')

@section('content')
    <div class="containerBox">
        <div class="receipt-box">
            <div class="titleBox">
                <h1 class="text-xl">Thank you ..... for your purchase</h1>
            </div>

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
@endsection
