@extends('layouts.front')

@section('content')

    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/menu/MangoGrahams.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position">
                    {{--  <h1>Lorem Ipsum </h1>
                        <h2>Voulutpat</h2>
                        <h4>lorem lorem</h4> --}}
                    <h1><a href="product-details.html">Buy Now→</a></h1>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/menu/Nutella Series2.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position2">
                     {{--   <h1>Lorem </h1>
                        <h2>up to 15% off</h2>
                        <h4>Lorem Ipsum</h4> --}}
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/menu/oreo series2.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position3">
                     {{--   <h1>Lorem</h1>
                        <h2>Super Discount</h2>
                        <h4>lorem Ipsum</h4> --}}
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">

                <div>
                    <div id="electro1">
                        <div class="custom-row-2">
                           {{--
                            @foreach($allProducts as $product)
                                @include('product._single_product')

                            @endforeach 

                            --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
