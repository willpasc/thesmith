@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH</title>
@endsection

@section('content')


<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-dark text-center py-4">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-12 px-md-5 px-3">
                        <p class="txt-header-body font-metropolis font-weight-bold let-spa-5" >THE PERFECT LOCATION</p>
                        <p class="txt-subheader-2 font-lato pb-5 let-spa-2">At The Heart of CBD Alam Sutera</p>
                        <p class="txt-body font-lato px-3 ">The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,
                            namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.
                            An ease of multi-city commuting is also highlighted as it stands a minute away from the
                            Toll Gate of Alam Sutera.</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <img src="{{ asset('images/thesmith/location/thesmith-web_2.0-11.png') }}" alt="img" class="w-100 pb-3">
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section style="background-color: black;">
    <div class="container-fluid py-5">
        <div class="row no-gutters  pb-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-white">
                <p class="txt-header-body font-metropolis font-weight-bold let-spa-5" >AT THE HEART OF CBD</p>
                <p class="txt-subheader-2 font-lato let-spa-2">Business District Minutes Away</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row no-gutters bg-location"></div>
        <div class="row no-gutters">
            <div class="col-2"></div>
            <div class="col-8 bg-white text-center py-5" style="margin-top: -50px;">
                <div class="row no-gutters">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-12 text-dark px-3 px-md-2">
                        <p class="font-metropolis-bold txt-subheader pb-3">Only 150 Meters Away</p>
                        <p class="txt-body font-lato ">
                            Located at the heart of CBD Alam Sutera, The Smith stands only 150 meters away
                            from the Exit Toll Gate of Alam Sutera. Providing ease for residents to commute within
                            and outside the city.
                        </p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row  pb-md-5">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center text-dark">
                <div class="py-5">
                    <p class="txt-header-body font-metropolis font-weight-bold let-spa-5" >ALAM SUTERA SMART CITY</p>
                    <p class="txt-subheader-2 font-lato let-spa-2">Even More Livable Features</p>
                </div>
                <div class="row txt-body text-center font-lato px-3 px-md-0">
                    <div class="col-md-3 col-6 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/location/thesmith-web-home_2.0-29.jpg') }}" alt="img" class="img-smart pb-3">
                        <p class="pl-3">EMERGENCY BUTTON</p>
                    </div>
                    <div class="col-md-3 col-6 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/location/thesmith-web-home_2.0-30.jpg') }}" alt="img" class="img-smart pb-3">
                        <p class="pl-3">CCTV & CONTROL ROOM</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{ asset('images/thesmith/location/thesmith-web-home_2.0-31.jpg') }}" alt="img" class="img-smart pb-3">
                        <p class="pl-3">SUTERA LOOP</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{ asset('images/thesmith/location/thesmith-web-home_2.0-32.jpg') }}" alt="img" class="img-smart pb-3">
                        <p class="pl-3">BICYCLE TRACK</p>
                    </div>
                </div>
                <div class="row py-5 px-3 px-md-0">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-12">
                        <p class="txt-body text-center font-lato px-2">
                            As part of Alam Sutera Smart City, relish the additional safety and convenience provided
                            such as emergency buttons at roadsides, 24-hour CCTV surveillance and control
                            room guard, up to commuting ease through Sutera Loop access and
                            well-built bicycle track.
                        </p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>



@endsection

@section('styles')
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>

        .img-smart{
            width:100%;
        }

        .border-bot-black{
            border-bottom: 1px solid black;
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
        .bg-location{
            background-image: url('{{ asset('images/thesmith/location/thesmith-web-home_2.0-28.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 250px;
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

            .img-smart{
                width:240px;
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

            .bg-location{
                background-image: url('{{ asset('images/thesmith/location/thesmith-web-home_2.0-28.jpg') }}');
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

        $('#more-rafal').on('shown.bs.collapse', function () {
            $('#btn-rafal').attr('src', "{{ asset('images/thesmith/home/btn-close.png') }}");
        });
        $('#more-rafal').on('hidden.bs.collapse', function () {
            $('#btn-rafal').attr('src', "{{ asset('images/thesmith/home/btn-readmore.png') }}");
        });

        $('#more-studio').on('shown.bs.collapse', function () {
            $('#btn-studio').attr('src', "{{ asset('images/thesmith/developer/img-lessinfo.png') }}");
        });
        $('#more-studio').on('hidden.bs.collapse', function () {
            $('#btn-studio').attr('src', "{{ asset('images/thesmith/developer/img-moreinfo.png') }}");
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
