@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH</title>
@endsection

@section('content')

    <section class="bg-virtual">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                </div>
            </div>
        </div>
    </section>
    <section  class=" pb-5" style="background-color: black;">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="row">
                        <div class="col-12 fac-slide bg-white text-center text-dark">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8 py-5">
                                    <p class="txt-header-body font-metropolis-medium let-spa-5 pb-3">VIRTUAL TOUR</p>
                                    <div class="txt-body font-lato-bold pb-4">
                                        <p>Simulate the living experiences of the units from Home Runner.</p>
                                        <p>Pick the perfect residence for you.</p>
                                    </div>
                                    <div class="row no-gutters font-lato txt-body text-center ">
                                        <div class="col-3">
                                            <a href="https://kuula.co/share/collection/7lt5P?fs=1&vr=1&sd=1&initload=0&thumbs=1&chromeless=0&logo=-1" class="py-3 text-dark">
                                                <img src="{{ asset('images/thesmith/virtual/studio.png') }}" alt="img" class="w-100 pb-3">
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://kuula.co/post/7FZ1r" class="py-3 text-dark">
                                                <img src="{{ asset('images/thesmith/virtual/1 bedroom.png') }}" alt="img" class="w-100 pb-3">
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://kuula.co/share/collection/7ltF5?fs=1&vr=1&sd=1&thumbs=1&chromeless=1&logo=0" class="py-3 text-dark">
                                                <img src="{{ asset('images/thesmith/virtual/2 bedroom optional.png') }}" alt="img" class="w-100 pb-3">
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="https://kuula.co/share/collection/7ltND?fs=1&vr=1&sd=1&initload=0&thumbs=1&chromeless=0&logo=-1" class="py-3 text-dark">
                                                <img src="{{ asset('images/thesmith/virtual/2 bedroom optional corner.png') }}" alt="img" class="w-100 pb-3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
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

        .border-bot-black{
            border-bottom: 1px solid #333333;
            width: 100%;
        }
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
        .bg-virtual{
            background-image: url('{{ asset('images/thesmith/virtual/thesmith-web-home_2.1-20.jpg') }}');
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
            border: 1px solid #E6E6E6;
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
            border-bottom: 1px solid #E6E6E6;
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

            .padd-trans{
                padding-top:33%;
            }

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

            .bg-virtual{
                background-image: url('{{ asset('images/thesmith/virtual/thesmith-web-home_2.1-20.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 670px;
            }

            .bg-tower{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 600px;
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

        @media (min-width: 1300px) {
            .padd-trans{
                padding-top:31%;
            }
        }

        @media (min-width: 1400px) {
            .padd-trans{
                padding-top:30%;
            }
            .bg-virtual{
                background-image: url('{{ asset('images/thesmith/virtual/thesmith-web-home_2.1-20.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 705px;
            }
        }
        @media (min-width: 1900px) {
            .bg-virtual{
                background-image: url('{{ asset('images/thesmith/virtual/thesmith-web-home_2.1-20.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 940px;
            }

            .bg-tower{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 840px;
            }
            .padd-trans{
                padding-top:32%;
            }
        }
    </style>
@endsection

@section('scripts')
{{--    <script type="text/javascript" src="{{ asset('js/frontend/swiper.min.js') }}"></script>--}}
    <script>

        $('#more-rafal').on('shown.bs.collapse', function () {
            $('#btn-rafal').attr('src', "{{ asset('images/thesmith/home/btn-close.png') }}");
        });
        $('#more-rafal').on('hidden.bs.collapse', function () {
            $('#btn-rafal').attr('src', "{{ asset('images/thesmith/home/btn-readmore.png') }}");
        });

        $('#more-studio').on('shown.bs.collapse', function () {
            $('#btn-studio').attr('src', "{{ asset('images/thesmith/home/btn-close.png') }}");
        });
        $('#more-studio').on('hidden.bs.collapse', function () {
            $('#btn-studio').attr('src', "{{ asset('images/thesmith/home/btn-readmore.png') }}");
        });

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
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}");
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
