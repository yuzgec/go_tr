@extends('frontend.layout.app')
@section('customCSS')
    <style>
        .intro-slider-container, .intro-slide{
            background: transparent;
        }

        .product-border{
            border-radius:15px;
            border:2px solid red;
            column-gap: 15px;
        }

        .owl-carousel {
            z-index: 0 !important
        }

        .product-button{
            position: absolute;
            bottom: 20px;
            left:30px
        }

        .widget-title{
            color:white !important
        }

        .widget-list li{
            color:white !important

        }
        .mt--15{
            margin-top: -10px !important;
        }
    </style>
@endsection
@section('content')
    @include('backend.layout.alert')

    @include('frontend.layout.slider')

    <div class="container mb-5" style="margin-top:-350px;z-index: 0 !important;">
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="product-border">
                    <a href="#">
                        <img src="https://picsum.photos/400/600?random=1"
                             alt="Banner"
                             style="border-radius:15px;">
                    </a>
                    <div class="product-button">
                        <h4 class="text-white">Sucuk Çeşitleri</h4>
                        <button class="btn btn-primary mt--15"> Ürünleri İncele</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-border">
                    <a href="#">
                        <img src="https://picsum.photos/400/600?random=2"
                             alt="Banner"
                             style="border-radius:15px;">
                    </a>
                    <div class="product-button">
                        <h4 class="text-white">Sucuk Çeşitleri</h4>
                        <button class="btn btn-primary mt--15"> Ürünleri İncele</button>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="product-border">
                    <a href="#">
                        <img src="https://picsum.photos/400/600?random=3"
                             alt="Banner"
                             style="border-radius:15px;">
                    </a>
                    <div class="product-button">
                        <h4 class="text-white">Sucuk Çeşitleri</h4>
                        <button class="btn btn-primary mt--15"> Ürünleri İncele</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

