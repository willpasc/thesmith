@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH - FACILITIES</title>
@endsection

@section('content')

    {{--    <section class="bg-home">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row no-gutters padd-top50">--}}
    {{--                <div class="col-12 text-center">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section class="swiper-container image-slider">
        <div class="swiper-wrapper">
{{--            <div class="swiper-slide">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-floorplan_1.png') }}" alt="img" >--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_2.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_2.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-office-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_4.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            {{--            <div class="swiper-slide">--}}
            {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img">--}}
            {{--            </div>--}}
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-business-lounge_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lounge_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-coworking-space-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-meetingrooms_1.0.jpg') }}" alt="img" class="d-block d-md-none">

            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-auditorium_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-auditorium_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/thesmith/facilities/facilities-sky-pool_1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-pool_1.0.jpg') }}" alt="img" class="d-block d-md-none">
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
                                {{--                                <span class=" font-lato text-dark">GRAND LOBBY--}}
                                {{--                                    &nbsp; <img--}}
                                {{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
                                {{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
                                {{--                                </span>--}}
                                {{--                                </a>--}}
                                <div class="" id="facilities-accor">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Swiper -->
                                                <div class="swiper-container content-slider">
                                                    <div class="swiper-wrapper py-3">
{{--                                                        <div class="swiper-slide" id="fac-1">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">FLOOR PLAN</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <div class="swiper-slide"  id="fac-3">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">GRAND LOBBY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-4">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">GRAND LOBBY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-2">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">APARTMENT LOBBY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-5">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">OFFICE LOBBY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--                                                        <div class="swiper-slide"  id="fac-6">--}}
                                                        {{--                                                            <div class="row">--}}
                                                        {{--                                                                <div class="col-12 text-dark text-center">--}}
                                                        {{--                                                                    <p class="txt-header-body let-spa font-metropolis">SILICON VALLEY FACILITIES</p>--}}
                                                        {{--                                                                    <div class="border-swiper-custom"></div>--}}
                                                        {{--                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.<br/>--}}
                                                        {{--                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities<br/>--}}
                                                        {{--                                                                        that boosts a balanced lifesyle experience.</p>--}}
                                                        {{--                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.--}}
                                                        {{--                                                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities--}}
                                                        {{--                                                                        that boosts a balanced lifesyle experience.</p>--}}
                                                        {{--                                                                    <div class="py-5">--}}
                                                        {{--                                                                        <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="w-100 ">--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </div>--}}
                                                        {{--                                                        </div>--}}
                                                        <div class="swiper-slide"  id="fac-7">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">BUSINESS LOUNGE</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-8">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">COWORKING SPACE LOBBY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-9">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">AUDITORIUM</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide"  id="fac-10">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class=" font-lato  txt-body text-dark py-3">SKY POOL</p>
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


                                                <div class="swiper-container-content">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide-content">
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
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-web-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #414042;
            border-color: #fff #fff #fff;
        }

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width: 20%;
            padding-top: 10px;
            padding-bottom: 10px;
            display: flow-root inline;
            display: -webkit-inline-flex;
        }

        sup {
            vertical-align: super;
            font-size: 13px;
            top:-1.5px;

        }

        /*
        pop up css
        */
        .modal-open .modal {
            display: flex!important;
            align-items: center!important;
            z-index: 99999999;
        }
        .swiper-container-content {
            width: 100%;
        }
        .swiper-slide-content {
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

        /*swiper*/
        .swiper-container {
            width: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: inline;
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
            .txt-header-body{
                font-size:26px;
            }
        }

        @media (min-width: 768px) {
            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1369px) {

        }

    </style>
@endsection

@section('scripts')
    {{--        <script type="text/javascript" src="{{ asset('js/frontend/swiper.min.js') }}"></script>--}}
    <script>

        $( document ).ready(function() {
            let Url = window.location.href;
            let initialSlide = 0;
            if(Url.includes("#")){
                let splitUrl = Url.split("#");
                initialSlide = parseInt(splitUrl[1]) - 1;
            }
            var imageSwiper = new Swiper('.image-slider', {
                loop: true,
                // pagination: {
                //     el: '.swiper-pagination',
                //     type: 'fraction',
                // },
                slidesPerView: 1,
                setWrapperSize: true,
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });

            var swiper = new Swiper('.content-slider', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });
            imageSwiper.controller.control  = swiper;
            swiper.controller.control  = imageSwiper;
        });
        function navigateSection(section){
            var offsetTop = $('#' + section).offset().top;

            if (offsetTop) {
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);

                return false;
            }
        }

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
        }
    </script>
@endsection
