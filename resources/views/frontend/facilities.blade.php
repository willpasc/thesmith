@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - FACILITIES</title>
@endsection


@section('content')

    <section class="facsecmarg" >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-3">
                    <div class="border-developer pt-5">
                        <img src="{{ asset('images/thescott/facilities/keyfeatures.png') }}" alt="img" class="img-ourproject">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -50px;">
                <div class="col-md-6 col-12 border-key pb-5">
                    <img src="{{ asset('images/thescott/facilities/timeless.png') }}" alt="img" class="w-100 pb-5">
                    <p class="txt-timeless font-librecaslon text-dark text-center pb-3">TIMELESS DESIGN</p>
                    <div class="row">
                        <div class="col-md-2 col-12"></div>
                        <div class="col-md-8">
                    <p class="txt-body text-center font-montserrat">Relish the beauty of timeless design and colors within
                        the interiors of your home, carefully selected for your
                        eternal comfort.</p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="pb-4">
                        <img src="{{ asset('images/thescott/facilities/key1.png') }}" alt="img" class="img-key">
                        <p class="text-body txt-space font-librecaslon pt-2">SPACE SAVER INSTALLATION</p>
                    </div>
                    <div class="pb-4">
                        <img src="{{ asset('images/thescott/facilities/key3.png') }}" alt="img" class="img-key">
                        <p class="text-body txt-space font-librecaslon pt-2">DEEP APPROACHED FACILITIES</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div style="padding-bottom:2rem;">
                        <img src="{{ asset('images/thescott/facilities/key2.png') }}" alt="img" class="img-key">
                        <p class="text-body txt-space font-librecaslon pt-2">ENERGY SAVER</p>
                    </div>
                    <div class="pb-4">
                        <img src="{{ asset('images/thescott/facilities/key4.png') }}" alt="img" class="img-key">
                        <p class="text-body  txt-space font-librecaslon pt-2">DRIVE LESS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid bg-facilities">
            <div class="row no-gutters">
                <div class="col-md-2 col-12"></div>
                <div class="col-md-8 text-center text-white px-md-0 px-4">
                    <p class="txt-facilities font-librecaslon pb-4">FACILITIES</p>
                    <p class="txt-body font-montserrat">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobo
                        rtis ni unvalor unum et quisapre ompre de impel down.</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="container-fluid d-none d-md-block">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 1])}}">
                        <div class="fac-1 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 1</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-30.jpg') }}" alt="img" class="w-100">--}}

                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 2])}}">
                        <div class="fac-2 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 2</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-31.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 3])}}">
                        <div class="fac-3 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 3</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-32.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 4])}}">
                        <div class="fac-4 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 4</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-33.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 5])}}">
                        <div class="fac-5 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 5</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-34.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 6])}}">
                        <div class="fac-6 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 6</p>
                                <p class="txt-body font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-35.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid d-block d-md-none">
            <div class="row no-gutters">
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 1])}}">
                        <div class="fac-1 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 1</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-30.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 2])}}">
                        <div class="fac-2 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 2</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-31.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 3])}}">
                        <div class="fac-3 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 3</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-32.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 4])}}">
                        <div class="fac-4 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 4</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-33.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 5])}}">
                        <div class="fac-5 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 5</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-34.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('frontend.gallery-detail', ['type'=> 6])}}">
                        <div class="fac-6 text-white">
                            <div class="fac-space">
                                <p class="txt-spacing-header font-librecaslon">Lorem Ipsum 6</p>
                                <p class="txt-body-1 font-montserrat">Dolor sit amet un valor.</p>
                            </div>
                        </div>
{{--                        <img src="{{ asset('images/thescott/facilities/foto baru-35.jpg') }}" alt="img" class="w-100">--}}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">

        .txt-body-1 {
            font-size: 12px;
        }

        .fac-space{
            padding-top:100px;
            padding-left:20px;
        }
        .fac-1{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-30.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100%;
            height: 158px;
        }
        .fac-2{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-31.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 158px;
        }
        .fac-3{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-32.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 158px;
        }
        .fac-4{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-33.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 158px;
        }
        .fac-5{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-34.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 158px;
        }
        .fac-6{
            background-image: url('{{ asset('images/thescott/facilities/foto baru-35.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 158px;
        }
        .txt-spacing-header{
            font-style: italic;
            font-size:14px;
            padding-bottom: 5px;
        }
        .txt-space{
            font-size:9px;
        }
        .facsecmarg{
            margin-top:0px;
        }
        .txt-facilities{
            font-size: 20px;
            padding-top:25%;
        }
        .bg-facilities{
            background-image: url('{{ asset('images/thescott/facilities/foto facilities.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: auto;
            height: 400px;
        }
        .img-key{
            width:160px;
        }
        .txt-timeless{
            font-size: 16px;
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
            margin-top: 20px;
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

        @media (min-width: 576px) {
            .fac-1{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-30.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: 100%;
                height: 380px;
            }
            .fac-2{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-31.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 380px;
            }
            .fac-3{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-32.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 380px;
            }
            .fac-4{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-33.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 380px;
            }
            .fac-5{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-34.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 380px;
            }
            .fac-6{
                background-image: url('{{ asset('images/thescott/facilities/foto baru-35.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 380px;
            }
            .fac-space{
                padding-top: 300px;
                padding-left: 40px;
            }

            .txt-spacing-header{
                font-style: italic;
                font-size:16px;
                padding-bottom: 5px;
            }
            .txt-space{
                font-size:13px;
            }
            .img-key{
                width:244px;
            }
            .border-key{
                border-right: 1px solid black;
                height:545px;
            }
            .bg-facilities{
                background-image: url('{{ asset('images/thescott/facilities/foto facilities.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: auto;
                height: 756px;
            }
            .txt-facilities{
                font-size: 26px;
                padding-top:35%;
            }
            .txt-timeless {
                font-size: 26px;
            }
            .facsecmarg{
                margin-top:100px;
            }
            .border-developer{
                border-top: 1px solid black;
                width: 100%;
                margin-top: 70px;
                margin-left: 0px;
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
