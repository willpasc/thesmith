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
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 text-center text-dark pb-5 col-10" style="background-color: white; margin-top:-60px;">
                    <img src="{{ asset('images/thesmith/developer/thesmith-devs-logo_1.png') }}" alt="img" class="logo-triniti">
                    <p class="txt-header-body font-metropolis pt-3" style="letter-spacing: 5px;">FINELY CRAFTED</p>
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
                            <p class="font-lato pb-5 " style="letter-spacing: 2px;">OUR PROJECTS</p>

                        <div class="row px-md-5  pb-5">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('images/thesmith/developer/thesmith-devs-img_1-04.jpg') }}" alt="img" class="img-project">
                                <p class="py-3 font-lato let-spa-2">BROOKLYN</p>
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
                                <img src="{{ asset('images/thesmith/developer/thesmith-devs-img_1-05.jpg') }}" alt="img" class="img-project">
                                <p class="py-3 font-lato let-spa-2">YUKATA SUITES</p>
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
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset('images/thesmith/developer/thesmith-devs-img_1-06.jpg') }}" alt="img" class="img-project">
                                    <p class="py-3 font-lato let-spa-2">SPRINGWOOD RESIDENCE</p>
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
                                    <img src="{{ asset('images/thesmith/developer/thesmith-devs-img_1-07.jpg') }}" alt="img" class="img-project">
                                    <p class="py-3 font-lato let-spa-2">COLLINS BOULEVARD</p>
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
                    <p class="pt-5 font-lato">VISIT US</p>
                    <p class="txt-header-body pb-3 font-metropolis txt-marketing">MARKETING GALLERY</p>
                    <img src="{{ asset('images/thesmith/developer/thesmith-marketing-gallery_1.jpg') }}" alt="img" class="img-marketing">
                    <div class="pt-4 pb-5">
                        <p class="txt-body font-metropolis">
                            LIVING WORLD, 1ST FLOOR<br/>
                            Monday — Sunday | 10.00 — 22.00<br/>
                            087 8886 8886 0
                        </p>
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
        .marmintop{
            margin-top: 30px;
        }
        .txt-marketing{
            letter-spacing: 3px;
        }
        .img-project{
            width:100%;
        }
        .img-marketing{
            width:100%;
        }
        .logo-triniti{
            width: 150px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .img-info{
            width:100px;
        }

        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #414042;
            border-color: #fff #fff #fff;
        }

        .border-developer-custom-1{
            border-bottom: 1px solid black;
            width: 10%;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 45%;
        }

        .border-developer-custom-2 {
            border-bottom: 1px solid black;
            width: 81%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 35px;

        }

        .padd-top50{
            padding-top: 10%;
        }


        sup {
            vertical-align: super;
            font-size: 13px;
            top:-1.5px;

        }

        .bg-home{
            background-image: url('{{ asset('images/thesmith/developer/thesmith-building_1-1.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 300px;
        }
        /*
        pop up css
        */
        .modal-open .modal {
            display: flex!important;
            align-items: center!important;
            z-index: 99999999;
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



            .txt-header-body{
                font-size:26px;
            }


            .bg-home {
                background-image: url('{{ asset('images/thesmith/developer/thesmith-building_1-1.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 647px;
                position: relative;
                margin-top:100px;
            }

        }

        @media (min-width: 768px) {

        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1369px) {

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
