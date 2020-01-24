@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH - DEVELOPER</title>
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
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center text-dark pb-5" style="background-color: white">
                    <img src="{{ asset('images/thesmith/developer/logo-triniti.png') }}" alt="img" class="logo-triniti">
                    <p class="txt-header-body font-metropolis" style="letter-spacing: 5px;">FINELY CRAFTED</p>
                    <div class="border-developer-custom-1"></div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10 txt-body">
                            <p class="pb-4">
                                PT Perintis Triniti Properti was initiated in 2009, with it’s first kick-starting project named Ubud Village,
                                a 5-hectares land development. Since 2014 until 2017, PT. PTP or also known as Triniti Property Group
                                began introducing it’s iconic projects – Brooklyn, Springwood Residences, Yukata Suites, The Smith
                                with total revenue 4 trillion Rupiah.
                            </p>
                            <p class="pb-5">
                                In 2018, Triniti Property Group launched it’s new face with a name TRINITI L AND, together by
                                introducing a Superblock Project worth 4 trillion Rupiah named Collins Boulevard. Reaching it’s 9th year
                                of building and innovating, Triniti Land plans to commence an Initial Public Offering (Go Public) and create
                                masterplans of building Township Development scale projects in Jabodetabek also outside Java.</p>
                            <p class="font-lato pb-5">OUR PROJECTS</p>

                        <div class="row px-md-5  pb-5">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('images/thesmith/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                                <p class="py-3 font-lato">BROOKLYN</p>
                                <div class="collapse" id="more-brooklyn">
                                    <p class="txt-body font-metropolis pb-3 px-3">New York inspired, Brooklyn stands
                                        gracefully in 2 towers & 900 units
                                        developed by Waskita Karya & Triniti Group.
                                        A masterpiece and the first mixed-use
                                        building in Alam Sutera built in 2014 and
                                        finished in 2016.</p>
                                </div>
                                <div class="pb-5">
                                    <a href="#more-brooklyn" data-toggle="collapse" data-parent="accordion">
                                        <img src="{{ asset('images/thesmith/developer/img-moreinfo.png') }}" alt="img" class="img-info" id="btn-brooklyn">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/thesmith/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                                <p class="py-3 font-lato">YUKATA SUITES</p>
                                <div class="collapse" id="more-yukata">
                                    <p class="txt-body font-metropolis pb-3">The first Japanese Resort Condominium in
                                        Alam Sutera. With facilities: Japanese
                                        hot spring (onsen), smart home system,
                                        private lift and Zen Garden. Elected as
                                        the best Apartment in Serpong according
                                        to Consumer Choice Award 2015.</p>
                                </div>
                                <div>
                                    <a href="#more-yukata" data-toggle="collapse" data-parent="accordion">
                                        <img src="{{ asset('images/thesmith/developer/img-moreinfo.png') }}" alt="img" class="img-info" id="btn-yukata">
                                    </a>
                                </div>
                            </div>
                        </div>
                            <div class="row px-md-5 pb-5">
                                <div class="col-md-6 12">
                                    <img src="{{ asset('images/thesmith/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                                    <p class="py-3 font-lato">SPRINGWOOD RESIDENCE</p>
                                    <div class="collapse" id="more-springwood">
                                        <p class="txt-body font-metropolis pb-3">The first prestigious apartment in Jalan Raya
                                            Serpong. Consist of 1,400 units within only
                                            1 minute from exit toll Serpong, Mall Alam
                                            Sutera and Binus University. Finished
                                            construction in 2017.</p>
                                    </div>
                                    <div class="pb-5">
                                        <a href="#more-springwood" data-toggle="collapse" data-parent="accordion">
                                            <img src="{{ asset('images/thesmith/developer/img-moreinfo.png') }}" alt="img" class="img-info" id="btn-springwood">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <img src="{{ asset('images/thesmith/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                                    <p class="py-3 font-lato">COLLINS BOULEVARD</p>
                                    <div class="collapse" id="more-collins">
                                        <p class="txt-body font-metropolis pb-3">Artsy approach of residential spaces, inspired
                                            by Melbourne. From Residence, Soho, Outlet,
                                            Hotel to Condominium, all placed strategicly
                                            right in Tangerang’s promising
                                            Serpong district.</p>
                                    </div>
                                    <div class="pb-5">
                                        <a href="#more-collins" data-toggle="collapse" data-parent="accordion">
                                            <img src="{{ asset('images/thesmith/developer/img-moreinfo.png') }}" alt="img" class="img-info" id="btn-collins">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="border-developer-custom-2"></div>
                    <p class="pt-5">VISIT US</p>
                    <p class="txt-header-body pb-3">MARKETING GALLERY</p>
                    <img src="{{ asset('images/thesmith/developer/img-marketing.png') }}" alt="img" class="img-marketing">
                    <div class="pt-4 pb-5">
                        <p class="txt-body font-metropolis">
                            LIVING WORLD, 1ST FLOOR<br/>
                            Monday — Sunday | 10.00 — 22.00<br/>
                            087 8886 8886 0
                        </p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>
        .img-project{
            width:100%;
        }
        .img-marketing{
            width:100%;
        }
        .logo-triniti{
            width: 150px;
        }
        .img-info{
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
        .border-developer-custom-1{
            border-bottom: 1px solid black;
            width: 10%;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 45%;
        }

        border-developer-custom-2 {

            border-bottom: 1px solid

            black;
            width: 70%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 50px;

        }
        .border-swiper-custom{
            border-bottom: 1px solid black;
            width:100%;
            padding-top: 10px;
            padding-bottom: 10px;
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
            background-image: url('{{ asset('images/thesmith/developer/banner-developers.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 180px;
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
            height: 330px;
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

            .img-marketing{
                width:575px;
            }

            .border-developer-custom-2{
                border-bottom: 1px solid black;
                width: 74%;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: 97px;
            }

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
                background-image: url('{{ asset('images/thesmith/developer/banner-developers.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 647px !important;
                position: relative;
                margin-top:100px;
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

        function navigateSection(section){
            var offsetTop = $('#' + section).offset().top;

            if (offsetTop) {
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);

                return false;
            }
        };

        $('#more-brooklyn').on('shown.bs.collapse', function () {
            $('#btn-brooklyn').attr('src', "{{ asset('images/thesmith/developer/img-lessinfo.png') }}");
        });
        $('#more-brooklyn').on('hidden.bs.collapse', function () {
            $('#btn-brooklyn').attr('src', "{{ asset('images/thesmith/developer/img-moreinfo.png') }}");
        });

        $('#more-yukata').on('shown.bs.collapse', function () {
            $('#btn-yukata').attr('src', "{{ asset('images/thesmith/developer/img-lessinfo.png') }}");
        });
        $('#more-yukata').on('hidden.bs.collapse', function () {
            $('#btn-yukata').attr('src', "{{ asset('images/thesmith/developer/img-moreinfo.png') }}");
        });

        $('#more-springwood').on('shown.bs.collapse', function () {
            $('#btn-springwood').attr('src', "{{ asset('images/thesmith/developer/img-lessinfo.png') }}");
        });
        $('#more-springwood').on('hidden.bs.collapse', function () {
            $('#btn-springwood').attr('src', "{{ asset('images/thesmith/developer/img-moreinfo.png') }}");
        });

        $('#more-collins').on('shown.bs.collapse', function () {
            $('#btn-collins').attr('src', "{{ asset('images/thesmith/developer/img-lessinfo.png') }}");
        });
        $('#more-collins').on('hidden.bs.collapse', function () {
            $('#btn-collins').attr('src', "{{ asset('images/thesmith/developer/img-moreinfo.png') }}");
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
