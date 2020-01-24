@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH</title>
@endsection

@section('content')

<section class="bg-home">
    <div class="container">
        <div class="row no-gutters padd-top50">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6 text-left text-white">
                        <div class="border-banner-home"></div>
                        <p class="pb-3 txt-silicon-header txt-header-body font-metropolis d-none d-md-block">SILICON VALLEY EXPERIENCE</p>
                        <p class="txt-body font-lato d-none d-md-block">The Smith stands as a home for millennials who seek limitless<br/>
                            opportunities at the prosperous land of Alam Sutera. Relish an<br/>
                            elegant home that smartly incorporates luxury and comfort,<br/>
                            encircled with complete SOHO amenities that boosts a<br/>
                            balanced lifestyle experience.
                        </p>
                    </div>
                </div>
                <div class="banner-scroll">
                    <a href="#" onclick="navigateSection('concept')">
                    <p class="text-white txt-body font-lato">SCROLL</p>
                    <img src="{{ asset('images/thesmith/home/thesmith-web-scroll-arrow_1.0.png') }}" alt="img" class="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="concept-bg" id="concept">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center py-cust">
                <p class="txt-header-body font-metropolis" style="letter-spacing: 5px;">CONCEPT</p>
                <p class="txt-body font-lato pb-3">The foundational ideas of The Smith</p>
                <div class="border-concept-custom"></div>
                <div class="row pt-5">
                    <div class="col-md-4 col-12 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-concept-img_1.1.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                        <p class="py-md-4 py-3 txt-subheader font-lato">LIVE, HUSTLE, CREATE.</p>
                        <p class="txt-body px-4 font-metropolis">Elegantly incorporates comfort and
                            well-being, all within steps from home.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-concept-img_2.1.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato">CURRATED COMMUNITY.</p>
                            <p class="txt-body px-4 font-metropolis">Equipped with facilities designed
                                for collaborative communities.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-concept-img_3.1.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato">HOME OF UNICORNS</p>
                            <p class="txt-body px-4 font-metropolis">1300 m2 of Co-Working Space,
                                managed by <span style="font-weight: bold">Go Work</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<section class="gowork-bg">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12 text-center">
                <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-logo_1.0.png') }}" alt="img" class="gowork-logo">
                <p class="text-white py-5 txt-body px-5 font-metropolis">One of the biggest Co-Working Space in Indonesia, with more than 30 locations.
                    Starting from Pacific Place, Plaza Indonesia, Senayan City, including Bali.
                    Currently Go Work serves more than 12.000 members.</p>
                <p class="text-white txt-body pb-3 font-metropolis">Go Work Partners include:</p>
                <div class="row px-5">
                    <div class="col-md-3 col-6 pb-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-gojek-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-6 pb-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-zomato-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-kopikenangan-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-fore-logo_1.0.png') }}" alt="img" class="partners-logo">
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<section class="concept-bg" id="towerplan">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 text-white text-center py-5">
                <p class="txt-header-body font-lato let-spa">TOWER PLANS</p>
                <p class="txt-body font-lato">A home and an office, all only a few steps away</p>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs pt-3" role="tablist">
                    <li class="nav-item col-md-4 col-12 p-0 tab-nav">
                        <a class="nav-link active text-white font-lato" data-toggle="tab" href="#residence" role="tab" onclick="changetab(1)" >RESIDENCE UNIT</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav">
                        <a class="nav-link text-white font-lato" data-toggle="tab" href="#soho" role="tab" id="tabFloor" onclick="changetab(2)">SOHO UNITS</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav">
                        <a class="nav-link text-white font-lato" data-toggle="tab" href="#office" role="tab" id="tabUnit" onclick="changetab(3)">OFFICE UNITS</a>
                    </li>
                </ul>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="bg-tower"></div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: black">
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="text-center" style="position: relative; z-index: 999999;background-color: white;top:-23px;">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="residence" role="tabpanel">
                            <a href="#residence-accor" data-toggle="collapse" data-parent="accordion">
                                <span class="txt-hemat-catatan font-lato text-dark">Description
                                    &nbsp; <img
                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"
                                        alt="IMG" style="width:20px;" class="img-fluid">
                                </span>
                            </a>
                            <div class="collapse" id="residence-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper py-3">
                                                    <div class="swiper-slide">
                                                        <div class="row">
                                                            <div class="col-12 text-dark text-center">
                                                                <p class="txt-header-body">ONE BEDROOM - A</p>
                                                                <p class="txt-body font-lato">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row">
                                                            <div class="col-12 text-dark text-center">
                                                                <p class="txt-header-body">ONE BEDROOM - B</p>
                                                                <p class="txt-body font-lato">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
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
                    <div class="tab-content">
                        <div class="tab-pane fade show" id="soho" role="tabpanel">
                            <a href="#soho-accor" data-toggle="collapse" data-parent="accordion">
                                <span class="txt-hemat-catatan font-lato text-dark">Description
                                    &nbsp; <img
                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"
                                        alt="IMG" style="width:20px;" class="img-fluid">
                                </span>
                            </a>
                            <div class="collapse" id="soho-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <p>TESTTT INI SOHO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show" id="office" role="tabpanel">
                            <a href="#office-accor" data-toggle="collapse" data-parent="accordion">
                                <span class="txt-hemat-catatan font-lato text-dark">Description
                                    &nbsp; <img
                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"
                                        alt="IMG" style="width:20px;" class="img-fluid">
                                </span>
                            </a>
                            <div class="collapse" id="office-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <p>TESTTT INI OFFICE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                        <div class="tab-pane fade show" id="soho" role="tabpanel">--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade show " id="office" role="tabpanel">--}}
{{--                        </div>--}}
                </div>
            </div>
        </div>
        <div class="col-2"></div>

    </div>
</section>
<section class="concept-bg" id="concept">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center py-5">
                <p class="txt-header-body font-metropolis" style="letter-spacing: 5px;">FACILITIES</p>
                <p class="txt-body font-lato pb-3">A home and an office, all only a few steps away</p>
                <div class="border-concept-custom"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="bg-facilities"></div>
            </div>
        </div>
    </div>
</section>
<section id="location" style="background-color: black">
    <div class="container py-cust">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center">
                <p class="txt-header-body">LOCATION</p>
                <p class="txt-body font-lato pb-3">Located strategically, neighboring to world-class amenities</p>
                <div class="border-concept-custom"></div>
                <div class="row py-5 px-md-0 px-5">
                    <div class="col-md-4 col-6 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_1.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">1 MINUTE AWAY</p>
                            <p class="txt-body px-4 font-lato">From Alam Sutera Toll Gate</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_2.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">5 MINUTES AWAY</p>
                            <p class="txt-body px-4 font-lato">From IKEA Alam Sutera</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_3.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">5 MINUTES AWAY</p>
                            <p class="txt-body px-4 font-lato">From BINUS University</p>
                        </div>
                    </div>
                </div>
                <div class="row px-md-0 px-5">
                    <div class="col-md-4 col-12 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_4.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">5 MINUTE AWAY</p>
                            <p class="txt-body px-4 font-lato">From Living World</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_5.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">5 MINUTES AWAY</p>
                            <p class="txt-body px-4 font-lato">From Mall at Alam Sutera</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_6.1.jpg') }}" alt="img" class="img-location">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader">5 MINUTES AWAY</p>
                            <p class="txt-body px-4 font-lato">From OMNI Hospital</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="border-location-custom"></div>
                    <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-map_1.0.png') }}" alt="img" class="img-map pt-5">

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p class="txt-body pt-5 font-metropolis d-none d-md-block">
                            The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,<br/>
                            namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.<br/>
                            An ease of multi-city commuting is also highlighted as it stands a minute away<br/>
                            from the Toll Gate of Alam Sutera.
                        </p>

                        <p class="txt-body pt-5 font-metropolis d-block d-md-none px-5">
                            The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,
                            namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.
                            An ease of multi-city commuting is also highlighted as it stands a minute away
                            from the Toll Gate of Alam Sutera.
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
            <div class="col-2"></div>
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
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-img_1.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 184px;
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
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-img_1.0.jpg') }}');
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
