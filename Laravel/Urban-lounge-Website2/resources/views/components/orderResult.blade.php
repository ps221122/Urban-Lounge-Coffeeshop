@extends('layout.app')
@section('title', 'Order')

@section('content')
    <div class="orderCheckoutBox">








        
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
    </div>
@endsection
