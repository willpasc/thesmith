@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - FACILITIES</title>
@endsection


@section('content')

    <section style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-3">
                    <div class="border-developer pt-5">
                        <img src="{{ asset('images/thescott/gallery/gallery.png') }}" alt="img" class="img-ourproject">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -50px;">
                <div class="col-md-3 col-12">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 1])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-1.png') }}" alt="img" class="img-gallery-long" style="">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 2])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-2.png') }}" alt="img" class="img-gallery-short">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                    <a href="{{route('frontend.gallery-detail', ['type'=> 3])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-3.png') }}" alt="img" class="img-gallery-short">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 4])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-4.png') }}" alt="img" class="img-gallery-long">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-12 pb-5">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 5])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-5.png') }}" alt="img" class="img-gallery-short">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                    <a href="{{route('frontend.gallery-detail', ['type'=> 6])}}">
                        <div class="pb-4 mobile-center">
                            <img src="{{ asset('images/thescott/gallery/gallery-6.png') }}" alt="img" class="img-gallery-short  ">
                            <p class="text-body font-librecaslon font-italic pt-2">Lorem Ipsum</p>
                            <p class="text-body font-montserrat pt-2">Lorem ipsum dolor sit amet, consectur</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">
        .txt-facilities{
            font-size: 26px;
            padding-top:35%;
        }
        .bg-facilities{
            background-image: url('{{ asset('images/thescott/facilities/bg-facilities.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: auto;
            height: 756px;

        }
        .img-gallery-short{
            width:244px;
        }
        .img-gallery-long{
            width:244px;
            height:467px;
        }
        .txt-timeless{
            font-size: 26px;
        }
        .border-key{
            border-right: 1px solid black;
            height:545px;
        }
        .project-padds-1{
            padding-left: 6rem !important;
            padding-top: 5rem;
            padding-right: 5rem !important;
        }
        .container-fluid{
            padding:0px;
        }
        .header-project{
            font-size:20px;
        }
        .img-project{
            width:100%;
            height:auto;
        }
        .img-ourproject{
            margin-top: -114px;
        }
        .border-developer{
            border-top: 1px solid black;
            width: 100%;
            margin-top: 70px;
            margin-left: 0px;
        }
        .header-developer{
            font-size: 26px;
            color: grey;
            padding-top: 100px;
        }

        .bg-header-developer{
            background-color: #000000;
            height: 600px;
            width: auto;
        }

        @media (max-width: 576px) {
            .header-img{
                min-height: 150px;
            }
        }

        @media (min-width: 768px) {
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .header-img{
                min-height: 300px;
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .header-img{
                min-height: 400px;
                width: 100%;
            }
        }

        .bg-img3 {
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $('.slider-developer').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
    </script>
@endsection
