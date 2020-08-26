@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH</title>
@endsection

@section('content')

<section class="" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-dark text-center py-cust px-md-0 px-5">
                <p class="txt-header-body font-metropolis" style="letter-spacing: 5px;">THE CONCEPT</p>
                <p class="txt-body font-lato pb-3 let-spa">Three Foundational Ideas</p>
                <div class="border-concept-custom-1"></div>
                <div class="row py-5">
                    <div class="col-md-4 col-12 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-08.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                        <p class="py-md-4 py-3 txt-subheader font-lato-bold let-spa-2">LIVE, HUSTLE, CREATE.</p>
                        <p class="txt-body px-md-3 px-5 font-metropolis">Elegantly incorporates comfort and
                            well-being,<br/> all within steps from home.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-09.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato-bold let-spa-2">CURRATED COMMUNITY.</p>
                            <p class="txt-body px-md-3 px-5 font-metropolis">Equipped with facilities designed
                                for<br/> collaborative communities.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-10.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato-bold let-spa-2">HOME OF UNICORNS.</p>
                            <p class="txt-body px-md-3 px-5 font-metropolis">1300 m<sup style="font-size:10px;">2</sup> of Co-Working Space,<br/>
                                managed by Go Work.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section style="background-color: black;">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12 text-center">
                <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-logo_1.0.png') }}" alt="img" class="gowork-logo">
                <p class="text-white py-5 txt-body px-5 font-metropolis">One of the biggest Co-Working Space in Indonesia, with more than 30 locations.
                    Starting from Pacific Place, Plaza Indonesia, Senayan City, including Bali.
                    Currently Go Work serves more than 12.000 members.</p>
                <p class="text-white txt-body pb-3 font-metropolis">Go Work Partners include:</p>
                <div class="row px-5">
                    <div class="col-md-3 col-12 pb-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-gojek-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-12 pb-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-zomato-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-12 pb-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-kopikenangan-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-12">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-fore-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row py-5">
            <div class="col-md-2"></div>
            <div class="col-md-8 border-concept-custom"></div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-white">
                <p class="txt-subheader font-lato-bold let-spa-1 pb-5">FEATURES</p>
                <div class="row txt-body font-gotham-book pb-5">
                    <div class="col-md-3 ">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-43.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">High Speed<br/> Internet</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-44.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Exclusive Events &<br/> Workshops</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-45.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">24/7 Access</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-46.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">State of the Art<br/> Meeting Rooms</p>
                    </div>
                </div>
                <div class="row txt-body font-metropolis pb-5">
                    <div class="col-md-3 ">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-47.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Member Network</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-48.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Flexible Plans</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-49.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Private Events</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-50.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Spacious<br/> Lounge Area</p>
                    </div>
                </div>
                <div class="row txt-body font-metropolis pb-5">
                    <div class="col-md-3 "></div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-51.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Business-Class<br/> Printers</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web_2.0-52.png') }}" alt="img" class="w-75" style="border: 1px solid white;">
                        <p class="pt-2">Business Support</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>


@endsection

@section('styles')
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>
        .fac-slide{
            margin-top: -50px;
        }
        .fulldetail{
            width:100px;
            padding-bottom: 30px;
        }
        .let-spa{
            letter-spacing: 5px;
        }
        .partners-logo{
            width:80px;
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
            border-radius: 0;
        }
        .tab-nav{
            border: 1px solid #fff;
            border-radius: 0;
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

        .border-concept-custom-1{
            border-bottom: 0.04em solid rgba(255,255,255,0.80);
            width:100%;
        }

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width:20%;
            padding-top: 10px;
            padding-bottom: 10px;
            display: flow-root inline;
            display: inline-flex;
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
            padding-top: 7%;
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
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-07.jpg') }}');
            background-repeat: no-repeat;
            background-position: center left;
            background-size: cover;
            width:100%;
            height: 260px;
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

            .partners-logo{
                width:100px;
            }

            .banner-scroll{
                padding-top:190px;
            }

            .border-banner-home{
                border-bottom: 1px solid white;
                width: 85px;
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
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-07.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 663px !important;
                position: relative;
                padding-top:100px;
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
            var swiper = new Swiper('.swiper-others', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true
            });

            var imageSwiper = new Swiper('.image-slider', {
                loop: true,
                // pagination: {
                //     el: '.swiper-pagination',
                //     type: 'fraction',
                // },
                slidesPerView: 1,
                setWrapperSize: true,
            });
            var contentSwiper = new Swiper('.content-slider', {
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
            imageSwiper.controller.control  = contentSwiper;
            contentSwiper.controller.control  = imageSwiper;
        });
        // $('.swiper-container').each(function(){
        //     new Swiper($(this), {
        //         pagination: $(this).find('.swiper-pagination'),
        //         paginationClickable: $(this).find('.swiper-pagination'),
        //         nextButton: $(this).find('.swiper-button-next'),
        //         prevButton: $(this).find('.swiper-button-prev'),
        //         loop: true
        //     });
        // });
        function navigateSection(section){
            var offsetTop = $('#' + section).offset().top;

            if (offsetTop) {
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);

                return false;
            }
        }

        $('#tabResidence').on('click', function () {
            var swiper = new Swiper('.swiper-others', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true
            });
        });
        $('#tabSoho').on('click', function () {
            var swiper = new Swiper('.swiper-others', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true
            });
        });
        $('#tabOffice').on('click', function () {
            var swiper = new Swiper('.swiper-others', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                observer: true,
                observeParents: true
            });
        });

        function changetab(typeid) {
            if (typeid === 1) {
                $('#residence').show();
                $('#soho').hide();
                $('#office').hide();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/tower/tower-residence_1.jpg') }}");
            }

            if (typeid === 2) {
                $('#residence').hide();
                $('#soho').show();
                $('#office').hide();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/tower/tower-soho_1.jpg') }}");

            }

            if (typeid === 3) {
                $('#soho').hide();
                $('#residence').hide();
                $('#office').show();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/tower/tower-office_1.jpg') }}");

            }
        }
    </script>
@endsection
