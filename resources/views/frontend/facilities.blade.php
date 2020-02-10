@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH - FACILITIES</title>
@endsection

@section('content')

    <section class="bg-home">
        <div class="container">
            <div class="row no-gutters padd-top50">
                <div class="col-12 text-center">
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="text-center box-accor" >
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="residence" role="tabpanel">
{{--                                <a href="#facilities-accor" data-toggle="collapse" data-parent="accordion">--}}
                                <span class=" font-lato text-dark">Grand Lobby
                                    &nbsp; <img
                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"
                                        alt="IMG" style="width:20px;" class="img-fluid">
                                </span>
{{--                                </a>--}}
                                <div class="" id="facilities-accor"
                                     style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Swiper -->
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper py-3">
                                                        <div class="swiper-slide" id="fac-1">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-web-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-2">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lobby_1.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-3">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lobby_2.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-4">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lobby_3.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-5">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lobby_4.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-6">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lobby_5.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-7">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-lounge_1.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-8">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-meetingrooms_1.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-9">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-auditorium_1.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-10">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center">
                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.
                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities
                                                                        that boosts a balanced lifesyle experience.</p>
                                                                    <div class="py-5">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-pool_1.0.jpg') }}" alt="img" class="w-100 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination"></div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next swiper-button-black"></div>
                                                    <div class="swiper-button-prev swiper-button-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>
        </div>
    </section>



@endsection

@section('styles')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>
        .fulldetail{
            width:100px;
        }
        .let-spa{
            letter-spacing: 5px;
        }
        .partners-logo{
            width:100px;
        }
        .container-fluid{
            padding:0;
        }
        .bg-tower{
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-towerplans-img_1.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 150px;
        }
        .bg-facilities{
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-facilities-img_1.1.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 155px;
        }
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #414042;
            border-color: #fff #fff #fff;
        }
        .tab-nav{
            border: 1px solid #fff;
        }
        .border-location-custom{
            border-bottom: 1px solid white;
            width: 100%;
            margin-left: 0;
            padding-top:50px;

        }

        .img-location{
            width:100%;
        }
        .img-map{
            width:100%;
        }

        .gowork-bg{
            background-color: #1c1a1a;
        }
        .py-cust{
            padding-top:70px;
            padding-bottom:70px;
        }
        .img-concept{
            width:80%;
        }
        .border-concept-custom{
            border-bottom: 1px solid white;
            width:100%;
        }
        .border-swiper-custom{
            border-bottom: 1px solid black;
            width: 20%;
            padding-top: 10px;
            padding-bottom: 10px;
            display: flow-root inline;
            display: -webkit-inline-flex;
        }
        .concept-bg{
            background-color: black;
        }
        .banner-scroll{
            padding-top:100px;
        }
        .txt-silicon-header{
            letter-spacing: 5px;
            padding-top: 10px;
            padding-bottom: 5px;
        }
        .padd-top50{
            padding-top: 10%;
        }

        .click-img{
            width: 80px;
            padding-top: 30%;
        }
        .map-home{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-20.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 273px;
        }
        .txt-download{
            letter-spacing: 0.3rem;
            margin-top: -30px;
        }
        .img-btn-donlod{
            width: 160px;
            padding-top:60px;
        }
        .img-cekotlogo2{
            width:50px;
        }
        sup {
            vertical-align: super;
            font-size: 13px;
            top:-1.5px;

        }
        .txt-live{
            line-height: 1.5em;
            font-size: 13px;
        }
        .txt-header-body{
            font-size:20px;
        }
        .readmore{
            font-size: 13px;
        }
        .txt-spacing-header{
            letter-spacing: 0.5rem;
            font-size:14px;
            padding-bottom: 5px;
        }
        .txt-spacing{
            padding-left: 35px;
            padding-top: 38%;
        }
        .img-home-2{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-11.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: auto;
            height: 155px;
            margin-bottom:40px;
        }
        .img-home-3{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-12.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            width: auto;
            height: 155px;
        }
        .essentialy{
            color: #cec6af;
            font-size: 18px;
            letter-spacing: 0.5rem;
            padding-top: 10px;
        }
        .img-cekot-home{
            padding-top: 23%;
            width: 262px;
        }
        .bg-home{
            background-image: url('{{ asset('images/thesmith/facilities/thesmith-lobby_3.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 212px;
        }
        /*
        pop up css
        */
        .modal-open .modal {
            display: flex!important;
            align-items: center!important;
            z-index: 99999999;
        }

        .modal-dialog {
            display: flex!important;
            align-items: center!important;
            flex-grow: 1;
            width: 100% !important;
            height: auto;
        }

        .modal-header{
            border-bottom: 0 !important;
        }

        .bg_popup{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-20.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 265px;
            width: 355px;
        }

        .btn-paulmarc-more .w-25{
            width: 75% !important;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

        .text-finely-crafted{
            font-size: 10px;
            font-weight: bold;
        }

        /*.slick-dots li button:before {*/
        /*color: #fff;*/
        /*}*/

        /*.slick-dots li.slick-active button:before {*/
        /*color: #fff !important;*/
        /*}*/

        /*swiper*/
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        @media (min-width: 576px) {

            .banner-scroll{
                padding-top:190px;
            }

            .border-banner-home{
                border-bottom: 1px solid white;
                width: 100px;
                margin-left: -50px;
            }

            .border-location-custom{
                border-bottom: 1px solid white;
                width: 300px;
                margin-left: 30%;
                padding-top:50px;

            }

            .bg-tower{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-towerplans-img_1.0.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 540px;
            }

            .bg-facilities{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-facilities-img_1.1.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 557px;
            }

            .img-concept{
                width:100%;
            }

            .map-home{
                background-image: url('{{ asset('images/thescott/home/map and phone icons-38.png') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 390px;
            }

            .click-img{
                width: 110px;
                padding-top: 11%;
            }

            .modal-dialog{
                max-width: 960px !important;
            }
            .bg_popup{
                height: 600px;
                width: 960px;
            }

            /*.map-home{*/
            /*    height: 390px;*/
            /*}*/

            .txt-header-body{
                font-size:26px;
            }

            .txt-spacing{
                padding-left: 50px;
                padding-top: 45%;
            }

            .txt-spacing-header{
                letter-spacing: 0.5rem;
                font-size:26px;
                padding-bottom: 5px;
            }

            .img-home-3{
                background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-12.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                width: auto;
                height: 348px;
                margin-left: 5px;
            }

            .img-home-2{
                background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-11.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                width: auto;
                height: 348px;
                margin-right: 5px;
            }

            .img-cekot-home{
                padding-top: 15%;
                width: 400px;
            }
            .bg-home {
                background-image: url('{{ asset('images/thesmith/facilities/thesmith-lobby_3.0.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 765px !important;
                position: relative;
                /*padding-top:100px;*/
            }
            .img-btn-donlod{
                width: 160px;
                padding-top:100px;
            }
            .img-cekot{
                margin-top: 0px;
            }

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .img-house-responsive{
                height: 600px;
            }

            .img-paulmarc-responsive{
                height: 200px;
                width: auto;
            }

            .img-trinity-responsive{
                margin-top: -28px;
                height: 45px;
                width: auto;
            }

            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }

            .m-b-50{
                margin-bottom: 50px;
            }

            .text-finely-crafted{
                font-size: 13px;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1369px) {
            .click-img{
                width: 150px;
                padding-top: 6%;
            }
        }
    </style>
@endsection

@section('scripts')
    {{--    <script type="text/javascript" src="{{ asset('js/frontend/swiper.min.js') }}"></script>--}}
    <script>

        $( document ).ready(function() {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
        function navigateSection(section){
            var offsetTop = $('#' + section).offset().top;

            if (offsetTop) {
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);

                return false;
            }
        };

        $('#residence').on('shown.bs.collapse', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
        $('#soho').on('shown.bs.collapse', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
        $('#office').on('shown.bs.collapse', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });

        function changetab(typeid) {
            if (typeid === 1) {
                $('#residence').show();
                $('#soho').hide();
                $('#office').hide();

            }

            if (typeid === 2) {
                $('#residence').hide();
                $('#soho').show();
                $('#office').hide();
            }

            if (typeid === 3) {
                $('#soho').hide();
                $('#residence').hide();
                $('#office').show();
            }
        };




    </script>
@endsection
