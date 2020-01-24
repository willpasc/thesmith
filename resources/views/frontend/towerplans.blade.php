@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SMITH - TOWER PLANS</title>
@endsection


@section('content')
    <section class="concept-bg" id="towerplan">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-white text-center py-cust-1">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs pt-5" role="tablist">
                        <li class="nav-item col-md-4 col-12 p-0 tab-nav">
                            <a class="nav-link active text-white font-metropolis" data-toggle="tab" href="#residence" role="tab">RESIDENCE UNIT</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
                            <a class="nav-link text-white font-metropolis" data-toggle="tab" href="#soho" role="tab" id="tabFloor">SOHO UNITS</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
                            <a class="nav-link text-white font-metropolis" data-toggle="tab" href="#office" role="tab" id="tabUnit">OFFICE UNITS</a>
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

    <section class="long-bg">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">

                    <div class="text-center" style="position: relative; z-index: 999999;background-color: white;top:-23px;">
                        <a href="#residence" data-toggle="collapse" data-parent="accordion">
                                <span class="txt-hemat-catatan font-lato text-dark">Description
                                    &nbsp; <img
                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"
                                        alt="IMG" style="width:20px;" class="img-fluid">
                                </span>
                        </a>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                        <div id="residence" class="collapse"
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
                                                            <p class="txt-header-body font-metropolis">THE RESIDENCES</p>
                                                            <div class="border-swiper-custom"></div>
                                                            <p class="txt-body pt-3 font-lato d-none d-md-block">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                directly to the safety officers, ensuring needs are attended promptly.
                                                            </p>
                                                            <p class="txt-body pt-3 font-lato d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                with interiors installed smartly, together with ample ventilations that shines every room.
                                                                Every unit is equipped with safety fittings, including an intercom that connects
                                                                directly to the safety officers, ensuring needs are attended promptly.
                                                            </p>
                                                            <div class="">
                                                            <img src="{{ asset('images/thesmith/tower/onebedroom-a.png') }}" alt="img" class="img-tower">
                                                            </div>
                                                            <div class="">
                                                                <img src="{{ asset('images/thesmith/tower/onebedroom-b.png') }}" alt="img" class="img-tower">
                                                            </div>
                                                            <div class="">
                                                                <img src="{{ asset('images/thesmith/tower/onebedroom-c.png') }}" alt="img" class="img-tower">
                                                            </div>
                                                            <div class="mb-5">
                                                                <img src="{{ asset('images/thesmith/tower/studio.png') }}" alt="img" class="img-tower">
                                                            </div>
                                                            <div class="px-5 px-md-0">
                                                            <div>
                                                                <p class="txt-header-body font-metropolis">FURNISHINGS INCLUDED</p>
                                                                <div class="border-swiper-custom"></div>
                                                            </div>
                                                            <div class="pt-4 pb-5">
                                                                <p class="pb-1 font-metropolis">BED ROOM</p>
                                                                <p class="txt-body font-lato">Vitrase · Blackout Curtain · Bed Frame · Bed Head · Queen Size Mattress · 2 Pillows · Bed Sheet<br/>
                                                                    Bed Cover · 1 Night Case · 1 Table Lamp · Wallpaper · 1 Large Photo Frame<br/>
                                                                    1 Sliding Wardrobe with Mirror · 1 Set Flat Screen TV · Vynil Parquet
                                                                </p>
                                                            </div>
                                                            <div class=" pb-5">
                                                                <p class="pb-1 font-metropolis">LIVING ROOM</p>
                                                                <p class="txt-body font-lato">2 Seater Sofa · 1 Coffee Table · 1 Large Photo Frame · Carpet · Wallpaper · Telephone Set<br/>
                                                                    Dining Table · 2 Dining Chairs · Marble Floor
                                                                </p>
                                                            </div>
                                                            <div class=" pb-5">
                                                                <p class="pb-1 font-metropolis">BATHROOM</p>
                                                                <p class="txt-body font-lato">Light & Large Mirror · Toiletries Rack · 2 Large Towels · 2 Small Towels · Floor Carpet<br/>
                                                                    Soap Dispenser · Marble Floor · Sanitair Kohler & Grohe
                                                                </p>
                                                            </div>
                                                            <div class=" pb-5">
                                                                <p class="pb-1 font-metropolis">KITCHEN</p>
                                                                <p class="txt-body font-lato">Premium Kitchen Set · Cooker Hood · Cooker Hob · Glassware<br/>
                                                                    Cutlery · Utensils
                                                                </p>
                                                            </div>
                                                            <div class=" pb-5">
                                                                <p class="pb-1 font-metropolis">ELECTRONICS</p>
                                                                <p class="txt-body font-lato">Refrigerator Mini Bar · AC
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="txt-header-body font-metropolis">FURNISHINGS INCLUDED</p>
                                                                <div class="border-swiper-custom-1"></div>
                                                            </div>
                                                            <div class="pt-4 pb-5">
                                                                <p class="pb-1 font-metropolis">FLOOR FINISHING</p>
                                                                <p class="txt-body font-lato">Living Room: Marble Floor<br/>
                                                                    Bedroom Floor: Laminated Parquette Floor<br/>
                                                                    Bathroom Floor: Marble Floor
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">WALL FINISHING</p>
                                                                <p class="txt-body font-metropolis">General Wall: Lightweight Concrete Painted Finishing<br/>
                                                                    Bathroom Wall: Homogenous Tile Double Loaded
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">CEILING</p>
                                                                <p class="txt-body font-metropolis">Gypsum Board Painted Finishing
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">DOOR</p>
                                                                <p class="txt-body font-metropolis">Engineering Door
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">PANTRY</p>
                                                                <p class="txt-body font-metropolis">Kitchen Set with Marble Top-Table Finishing
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">SANITAIR</p>
                                                                <p class="txt-body font-metropolis">Ex. Grohe-Kohler / equal
                                                                </p>
                                                            </div>
                                                            <div class="pb-5">
                                                                <p class="pb-1 font-lato">ELECTRICITY</p>
                                                                <p class="txt-body font-metropolis">2200 Watt (1BR); 3500 Watt (2BR)
                                                                </p>
                                                            </div>
                                                            </div>
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
                                                            <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="btn-full details pt-3">
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
                <div class="col-2"></div>
            </div>
        </div>
    </section>


@endsection

@section('styles')
    <style>
        .long-bg{
            background-color: black;
            /*height:281em;*/
        }
        .img-tower{
            width:250px;
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
    .py-cust-1{
        padding-top: 100px;
        padding-bottom: 50px;
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
    width:100px;
    padding-top: 10px;
    padding-bottom: 10px;
        margin-left: 29%;
    }
        .border-swiper-custom-1{
            border-bottom: 1px solid black;
            width:100px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 18%;
        }
    .concept-bg{
    background-color: #1c1a1a;
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

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width:100px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 42%;
        }
        .border-swiper-custom-1{
            border-bottom: 1px solid black;
            width:100px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 29%;
        }

        .img-tower{
            width:300px;
        }
        .long-bg{
            background-color: black;
            /*height:243em;*/
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
    width: 350px;
    margin-left: 32%;
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
    </script>
@endsection
