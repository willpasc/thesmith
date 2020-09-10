@extends('layouts.frontend')

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
                <div class="col-8 text-white text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs pt-5 pb-5" role="tablist">
                        <li class="nav-item col-md-4 col-12 p-0 tab-nav font-12">
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabresidence}}" data-toggle="tab" href="#residence-tower" role="tab" id="tabResidence"  onclick="changetower(1)">RESIDENCE</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav font-12">
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabsoho}}" data-toggle="tab" href="#soho-tower" role="tab" id="tabSoho" onclick="changetower(2)">SOHO</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav font-12">
                            <a class="nav-link text-white font-lato let-spa-2 {{$taboffice}}" data-toggle="tab" href="#office-tower" role="tab" id="tabOffice" onclick="changetower(3)">OFFICE</a>
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
                <div class="col-12 text-center">
                    <div class="bg-tower bg-towerplans " id="">
                        <input type="hidden" value="1" id="home_runner_bg_switcher">
                        <div class="padd-trans">
                            <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-35.png') }}" alt="img" id="btn-trans"  class="transform-button" style="cursor: pointer;" onclick="changebg()">
                        </div>
                    </div>
{{--                    <div class="bg-tower bg-towerplans-m d-block d-md-none" id=""></div>--}}
                </div>
            </div>
        </div>
    </section>
{{--    <section>--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row no-gutters">--}}
{{--                <div class="col-12 text-center">--}}
{{--                    <div class="bg-tower">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="long-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="text-center box-accor">
                        <div class="tab-content">
                            <div class="tab-pane fade show {{$tabresidence}}" id="residence-tower" role="tabpanel">
{{--                                <a href="#residence-accor" data-toggle="collapse" data-parent="accordion">--}}
{{--                                <span class="txt-hemat-catatan font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                                </a>--}}
                                <div class="" id="residence-accor"
                                     style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row py-5 text-dark">
                                            <div class="col-1"></div>
                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="col-md-3 col-1"></div>
                                                    <div class="col-md-6 col-10">
                                                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-13.png') }}" alt="img" class="w-100 pb-4">
                                                    </div>
                                                    <div class="col-md-3 col-1"></div>
                                                </div>
                                                <div class="border-bot-black"></div>
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10 pt-5">
                                                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-36.png') }}" alt="img" class="w-100 pb-4">
                                                        <p class="txt-header-body  font-oriya let-spa-5 py-3">WE RUN OUR HOME</p>
                                                        <p class="txt-body font-lato px-4 pb-4">Amidst the chaos of the world, there is nothing more soothing then staying at home
                                                            while creating pathways to your dreams. Coping up with the new lifestyle, Home
                                                            Runner by The Smith proudly stands as a pioneer of a Convertible Home Office,
                                                            sharing liberty to its residents to design their spaces based on their own needs.</p>
                                                        <p class="txt-body font-lato px-4">Home Runner carries an inspiration of “We Run Our Homes”, serving as a home to
                                                            rest and hustle. It is a home infused with smart modern living experience, allowing
                                                            residents to create and re-create, initiating dreams and rejuvinate in a single space.</p>
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6 col-12 pt-4">
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid red;">Find Out More</a>
                                                            </div>
                                                            <div class="col-md-"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show {{$tabsoho}}" id="soho-tower" role="tabpanel">
{{--                                <a href="#soho-accor" data-toggle="collapse" data-parent="accordion">--}}
{{--                                <span class="txt-hemat-catatan font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                                </a>--}}
                                <div class="" id="soho-accor"
                                     style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5 pb-4">
                                                        <p class="txt-header-body font-lato let-spa-5">SOHO UNITS</p>
                                                        <p class="txt-body pt-3 font-metropolis d-none d-md-block">Adopting Silicon Valley Experience, The Smith’s SOHO delights residents with ease of a one-stop<br>
                                                            development, incorporating business and leisure within doorsteps. Equipped with premium office<br>
                                                            spaces, meeting rooms and relaxing lounges, relish a balanced lifestyle within modern<br>
                                                            arhictecture of elegance and comfort.
                                                        </p>
                                                        <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                            with interiors installed smartly, together with ample ventilations that shines every room.
                                                            Every unit is equipped with safety fittings, including an intercom that connects
                                                            directly to the safety officers, ensuring needs are attended promptly.
                                                        </p>
                                                        <br>
                                                        <a href="#" class="txt-body font-lato-light text-dark text-center" style="border: 1px solid black;padding:5px 20px;margin:10px">Book a Unit</a>
                                                    </div>
                                                </div>
{{--                                                <div class="border-swiper-custom"></div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">TOWER PLANS</p>--}}
{{--                                                        <div class="text-center">--}}
{{--                                                            <img src="{{ asset('images/thesmith/tower/TheSmith-Web_2.0-38.png') }}" alt="img" class="img-soho">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5">
                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">UNIT TYPES</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs2 pt-3" role="tablist">
                                                            <li class="nav-item col-md-1 p-0 tab-nav">
                                                            </li>
                                                            <li class="nav-item col-md-2 col-12 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2 active" data-toggle="tab" href="#sohoa" role="tab" id="tabSohoa"  onclick="changeDetailTower(1)">SOHO A</a>
                                                            </li>

                                                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                                                <a class="nav-link  font-lato let-spa-2 " data-toggle="tab" href="#sohob" role="tab" id="tabSohob" onclick="changeDetailTower(2)">SOHO B</a>
                                                            </li>

                                                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohoc" role="tab" id="tabSohoc" onclick="changeDetailTower(3)">SOHO C</a>
                                                            </li>
                                                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohod" role="tab" id="tabSohod" onclick="changeDetailTower(4)">SOHO D</a>
                                                            </li>
                                                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohoe" role="tab" id="tabSohoe" onclick="changeDetailTower(5)">SOHO E</a>
                                                            </li>
                                                            <li class="nav-item col-md-1 p-0 tab-nav">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="sohoa" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-a.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-a.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_a.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohob" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-b1.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-b2.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-b3.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-b4.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-b1.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_b1.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-b2.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_b2.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-b3.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_b3.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-b4.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_b4.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohoc" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-c.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-c.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_c.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohod" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-d.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-d.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_d.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohoe" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.0-e.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_3.1-e.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-soho_e.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-left pt-5">
                                                        <p class="txt-header-body font-metropolis-bold text-center let-spa-5">SPECIFICATIONS</p>
                                                        <div class="border-swiper-custom-specification" style="padding-top: 25px"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2 "></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">FLOOR TO FLOOR</div>
                                                            <div class="col-md-7 col txt-body font-metropolis ">600 cm</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">FLOOR FINISHING</div>
                                                            <div class="col-md-2 txt-body font-metropolis">Living Room:</div>
                                                            <div class="col-md-5 txt-body font-metropolis">Homogenous Tile<br>&nbsp; Double Loaded 60x60</div>
                                                        </div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body font-metropolis">Mezzanine:</div>
                                                            <div class="col-md-5 txt-body font-metropolis"> Laminated Parquette Floor</div>
                                                        </div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body font-metropolis">Bathroom:</div>
                                                            <div class="col-md-5 txt-body font-metropolis"> Homogenous Tile Double Loaded</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">WALL FINISHING</div>
                                                            <div class="col-md-2 txt-body font-metropolis">General Wall:</div>
                                                            <div class="col-md-5 txt-body font-metropolis"> Lightweight Concrete Painted Finish</div>
                                                        </div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body font-metropolis">Bathroom Wall:</div>
                                                            <div class="col-md-4 txt-body font-metropolis"> Homogenous Tile Double Loaded</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">CEILING</div>
                                                            <div class="col-md-7 txt-body font-metropolis">Gypsum Board Painted Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">DOOR</div>
                                                            <div class="col-md-7 txt-body font-metropolis">Engineering Door</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">PANTRY</div>
                                                            <div class="col-md-7 txt-body font-metropolis">Marble Top Table</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">SANITARY</div>
                                                            <div class="col-md-7 txt-body font-metropolis">Ex. Kohler / equal</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">ELECTRICITY</div>
                                                            <div class="col-md-7 txt-body font-metropolis">4400 Watt</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show {{$taboffice}}" id="office-tower" role="tabpanel">
{{--                                <a href="#office-accor" data-toggle="collapse" data-parent="accordion">--}}
{{--                                <span class="txt-hemat-catatan font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                                </a>--}}
                                <div class="" id="office-accor"
                                     style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5 pb-4" style="padding-left:20%; padding-right:20%;">
                                                        <p class="txt-header-body font-lato let-spa-5">OFFICE UNITS</p>
                                                        <p class="txt-body pt-4 font-metropolis d-none d-md-block">Supported by Go-Work, this dedicated 1.300m2 space allows residents to innovate and establish
                                                            startup offices through renting private spaces or hot desks. Equipped with spacious business
                                                            centers, premium event spaces, trained on-site staffs, and in-house cleaning facilities; it invents
                                                            a hassle-free venture as initiators craft their opportunities.
                                                        </p>
                                                        <p class="txt-body pt-3 font-metropolis d-block d-md-none ">Supported by Go-Work, this dedicated 1.300m2 space allows residents to innovate and establish
                                                            startup offices through renting private spaces or hot desks. Equipped with spacious business
                                                            centers, premium event spaces, trained on-site staffs, and in-house cleaning facilities; it invents
                                                            a hassle-free venture as initiators craft their opportunities.
                                                        </p>
                                                        <br>
                                                        <a href="#" class="txt-body font-lato-light text-dark text-center" style="border: 1px solid black;padding:5px 20px;margin:10px">Book a Unit</a>
                                                    </div>
                                                </div>
{{--                                                <div class="border-swiper-custom"></div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">TOWER PLANS</p>--}}
{{--                                                        <div class="text-center">--}}
{{--                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-offices.png') }}" alt="img" class="img-soho">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5">
                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">UNIT TYPES</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-8 text-center">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs2 pt-3" role="tablist">
                                                            <li class="nav-item col-md-4 col-12 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2 active" data-toggle="tab" href="#officea" role="tab" id="tabOfficea">OFFICE A</a>
                                                            </li>

                                                            <li class="nav-item col-md-4 p-0 tab-nav font-12">
                                                                <a class="nav-link  font-lato let-spa-2 " data-toggle="tab" href="#officeb" role="tab" id="tabOfficeb">OFFICE B</a>
                                                            </li>

                                                            <li class="nav-item col-md-4 p-0 tab-nav font-12">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#officec" role="tab" id="tabOfficec">OFFICE C</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-2"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="officea" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-a.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-01.jpg') }}" alt="img" class="img-soho ">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_a.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="officeb" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-b.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-02.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_b.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="officec" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center d-none d-md-block">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-c.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                    <div class="text-center d-block d-md-none pl-3 pr-3">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_3.1-03.jpg') }}" alt="img" class="img-soho">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-office_c.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-left pt-5">
                                                        <p class="txt-header-body font-metropolis-bold text-center let-spa-5">SPECIFICATIONS</p>
                                                        <div class="border-swiper-custom-specification" style="padding-top: 25px"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">FLOOR TO FLOOR</div>
                                                            <div class="col-md-8 txt-body font-metropolis">380 cm</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">FLOOR FINISHING</div>
                                                            <div class="col-md-8 txt-body font-metropolis">Homogenous Tile Double Loaded 60x60</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">WALL FINISHING</div>
                                                            <div class="col-md-8 txt-body font-metropolis">Lightweight Concrete Painted Finish</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">CEILING</div>
                                                            <div class="col-md-8 txt-body font-metropolis">Gypsum Board Painted Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">DOOR</div>
                                                            <div class="col-md-8 txt-body font-metropolis">Bare Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row text-center text-md-left">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2 col-12 txt-body-f11 font-metropolis-bold">ELECTRICITY</div>
                                                            <div class="col-md-8 txt-body font-metropolis">4400 Watt</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
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
    <section class="bg-lobby" id="lobby-bg">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                </div>
            </div>
        </div>
    </section>
    <section  class=" pb-5" style="background-color: black;" id="lobby-txt">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="row">
                        <div class="col-12 fac-slide bg-white text-center text-dark">
                            <div class="row">
                                <div class="col-md-2 col-1"></div>
                                <div class="col-md-8 col-10 py-5">
                                    <p class="txt-header-body font-oriya let-spa-5 pb-3 px-5">THE LOBBY</p>
                                    <p class="txt-body font-lato">Indulge into a comforting stroke as you step into a welcoming lobby, decorated finely
                                        yet luxurious to the eyes. Feel the warmth as you walk in from a hussling day, or sit
                                        comfortably as you connect socially with your acquaintance or fellow residents.</p>
                                </div>
                                <div class="col-md-2 col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-1"></div>
            </div>
        </div>
    </section>
    <section id="unit-types">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-12 text-dark text-center pt-5">
                            <p class="txt-header-body font-oriya let-spa-5">UNIT TYPES</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs3 pt-3 fs-12 lh-12" role="tablist">
                                <li class="nav-item col-md-2 p-0 tab-nav">
                                </li>
                                <li class="nav-item col-md-2 col-12 p-0 tab-nav" >
                                    <a class="nav-link font-lato  active" data-toggle="tab" href="#unita" role="tab" id="tabUnita" style="padding: 16px 5px;" ><span>Studio</span></a>
                                </li>

                                <li class="nav-item col-md-2 p-0 tab-nav">
                                    <a class="nav-link  font-lato  " data-toggle="tab" href="#unitb" role="tab" id="tabUnitb" style="padding: 16px 5px;" ><span>1 Bedroom</span></a>
                                </li>

                                <li class="nav-item col-md-2 p-0 tab-nav">
                                    <a class="nav-link font-lato " data-toggle="tab" href="#unitc" role="tab" id="tabUnitc" style="padding: 10px 5px;" ><span>1 Bedroom +<br/>Home Office</span></a>
                                </li>
                                <li class="nav-item col-md-2 p-0 tab-nav">
                                    <a class="nav-link font-lato " data-toggle="tab" href="#unitd" role="tab" id="tabUnitd" style="padding: 10px 5px;" >1 Bedroom +<br/>Home Office Corner</a>
                                </li>
                                {{--                            <li class="nav-item col-md-2 p-0 tab-nav">--}}
                                {{--                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohoe" role="tab" id="tabSohoe" onclick="changeDetailTower(5)">SOHO E</a>--}}
                                {{--                            </li>--}}
                                <li class="nav-item col-md-2 p-0 tab-nav">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row text-center text-md-none">
                        <div class="col-12">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="unita" role="tabpanel">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row py-5">

                                            <div class="col-md-4 col-12">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-05.png') }}" alt="img" class="w-100">
                                            </div>
                                            <div class="col-md-8 pt-5 pt-md-0">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-02.png') }}" alt="img" class="w-100">
                                            </div>
{{--                                            <div class="col-md-12 col-12">--}}
{{--                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-studio.png') }}" alt="img" class="w-100">--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="row pb-5">
                                            <div class="col-12 py-5">
                                                <div class="swiper-container units-slider1">
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-06.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-07.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-08.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-09.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pagi-pos">
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination black"></div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next swiper-button-black"></div>
                                                    <div class="swiper-button-prev swiper-button-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="unitb" role="tabpanel">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row py-5">
                                            <div class="col-md-4 col-12">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-06.png') }}" alt="img" class="w-100">
                                            </div>
                                            <div class="col-md-8 pt-5 pt-md-0">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-03.png') }}" alt="img" class="w-100">
                                            </div>
                                        </div>
                                        <div class="row pb-5">
                                            <div class="col-12 py-5">
                                                <div class="swiper-container units-slider2">
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-10.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-11.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-12.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-13.jpg') }}" alt="img" class="w-100">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="pagi-pos">
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination black"></div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next swiper-button-black"></div>
                                                    <div class="swiper-button-prev swiper-button-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="unitc" role="tabpanel">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row py-5">
                                            <div class="col-md-4 col-12">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-07.png') }}" alt="img" class="w-100">
                                            </div>
                                            <div class="col-md-8 pt-5 pt-md-0">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-04.png') }}" alt="img" class="w-100">
                                            </div>
                                        </div>
                                        <div class="row pb-5">
                                            <div class="col-12 py-5">
                                                <div class="swiper-container units-slider3">
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-14.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-15.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-16.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-17.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-18.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-19.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-20.jpg') }}" alt="img" class="w-100">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="pagi-pos">
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination black"></div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next swiper-button-black"></div>
                                                    <div class="swiper-button-prev swiper-button-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="unitd" role="tabpanel">
                                    <div class="panel-body" style="z-index:9999999 !important;">
                                        <div class="row py-5">
                                            <div class="col-md-4 col-12">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-08.png') }}" alt="img" class="w-100">
                                            </div>
                                            <div class="col-md-8 pt-5 pt-md-0">
                                                <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-05.png') }}" alt="img" class="w-100">
                                            </div>
                                        </div>
                                        <div class="row pb-5">
                                            <div class="col-12 py-5">
                                                <div class="swiper-container units-slider4">
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-21.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-22.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-23.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-24.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-25.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                        <div class="swiper-slide" >
                                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-26.jpg') }}" alt="img" class="w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pagi-pos">
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-pagination black"></div>
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next swiper-button-black"></div>
                                                    <div class="swiper-button-prev swiper-button-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                            <div class="tab-pane fade show" id="sohoe" role="tabpanel">--}}
                                {{--                                <div class="panel-body" style="z-index:9999999 !important;">--}}
                                {{--                                    <div class="text-center">--}}
                                {{--                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-15.jpg') }}" alt="img" class="img-soho">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
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

        .padd-trans{
            padding-top:53%;
        }

        .transform-button{
            width:150px;
        }
        .fac-slide{
            margin-top: -50px;
        }
        .pagi-pos{
            position: relative;
            bottom:0px;
        }
        .nav-tabs3 .nav-link {
            color: Black;
            background-color: white;
            border: 1px solid red;
            border-radius:0;
            margin:3px;
        }
        .nav-tabs3 .nav-link.active {
            color: white;
            /*background-color: #dc2d19;*/
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-15.png') }}');
            background-size: cover;
            border-color: #fff #fff #fff;
            border-radius:0;
        }
        .bg-lobby{
            background-image: url('{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 345px;
        }
        .long-bg{
            background-color: black;
            /*height:281em;*/
        }
        .img-soho{
            width: 100%;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .img-tower{
            width:250px;
        }
        .container-fluid{
        padding:0;
        }
        .bg-tower{
        background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: auto;
        height: 310px;
        }
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #414042;
            border-color: #fff #fff #fff;
            border-radius:0;
        }
        .nav-tabs2 .nav-link {
            color: Black;
            background-color: white;
            border: 1px solid black;
            border-radius:0;
            margin:10px;
        }
        .nav-tabs2 .nav-link.active {
            color: white;
            background-color: #414042;
            border-color: #fff #fff #fff;
            border-radius:0;
        }
        .nav-tabs {
            border-bottom:0px;
        }
        .tab-nav{
        border: 1px solid #fff;
        }

        .py-cust-1{
            /*padding-top: 100px;*/
            padding-bottom: 50px;
        }

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width:80%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 10%;
            margin-right: 10%;
        }

        .border-swiper-custom-specification{
            border-bottom: 1px solid black;
            width:70%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 15%;
            margin-right: 10%;
            margin-bottom: 15px;
        }

        .concept-bg{
        background-color: #1c1a1a;
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



        .btn-paulmarc-more .w-25{
        width: 75% !important;
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

        .transform-button{
            width:245px;
        }

        .bg-lobby{
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-14.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 390px;
        }

        .img-soho{
            width: 500px;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .py-cust-1{
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width:80%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 10%;
            margin-right: 10%;
        }

        .img-tower{
            width:300px;
        }
        .long-bg{
            background-color: black;
            /*height:243em;*/
        }

        .bg-tower{
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 600px;
        }

    /*.map-home{*/
    /*    height: 390px;*/
    /*}*/

        .txt-header-body{
            font-size:20px;
        }
    }

    @media (min-width: 768px) {
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
        .bg-lobby{
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-14.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 410px;
        }
    }
        @media (min-width: 1900px) {

            .bg-lobby {
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-14.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 550px;
            }
            .padd-trans{
                padding-top:32%;
            }
            .bg-tower{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 840px;
            }
        }
    </style>
@endsection

@section('scripts')
{{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>--}}
    <script>
        $('.slider-developer').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
        // $(function() {
        //     var swiper = new Swiper('#residence-swiper', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //     });
        //     var swiper2 = new Swiper('#soho-swiper', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //     });
        //     var swiper3 = new Swiper('#office-swiper', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //     });
        // });

        $( document ).ready(function() {
            let Url = window.location.href;
            let initialSlide = 0;
            if(Url.includes("#")){
                let splitUrl = Url.split("#");
                initialSlide = parseInt(splitUrl[1]) - 1;
            }
            // alert(initialSlide);
            // var swiper = new Swiper('.swiper-container', {
            //     loop: true,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         type: 'fraction',
            //     },
            //     navigation: {
            //         nextEl: '.swiper-button-next',
            //         prevEl: '.swiper-button-prev',
            //     },
            //     initialSlide: initialSlide,
            //     observer: true,
            //     observeParents: true
            // });
            var swiper2 = new Swiper('.units-slider1', {
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

        $('#tabUnita').on('click', function () {
            var swiper = new Swiper('.units-slider1', {
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
        $('#tabUnitb').on('click', function () {
            var swiper = new Swiper('.units-slider2', {
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
        $('#tabUnitc').on('click', function () {
            var swiper = new Swiper('.units-slider3', {
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
        $('#tabUnitd').on('click', function () {
            var swiper = new Swiper('.units-slider4', {
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
        // $('#tabResidence').on('click', function () {
        //     var swiper = new Swiper('.swiper-container', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         observer: true,
        //         observeParents: true
        //     });
        // });
        // $('#tabSoho').on('click', function () {
        //     var swiper = new Swiper('.swiper-container', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         observer: true,
        //         observeParents: true
        //     });
        // });
        // $('#tabOffice').on('click', function () {
        //     var swiper = new Swiper('.swiper-container', {
        //         loop: true,
        //         pagination: {
        //             el: '.swiper-pagination',
        //             type: 'fraction',
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         observer: true,
        //         observeParents: true
        //     });
        // });

        function changetower(typeid) {
            if (typeid === 1) {
                $('#residence-tower').show();
                $('#soho-tower').hide();
                $('#office-tower').hide();
                {{--$('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-residence_1.jpg') }}");--}}
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}");
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}");
                $('#btn-trans').show();
                $('#lobby-bg').show();
                $('#lobby-txt').show();
                $('#unit-types').show();

            }

            if (typeid === 2) {
                $('#residence-tower').hide();
                $('#soho-tower').show();
                $('#office-tower').hide();
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-soho_1.jpg') }}");
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/tower/thesmith-mobile-units-soho_1.0.jpg') }}");
                $('#btn-trans').hide();
                $('#lobby-bg').hide();
                $('#lobby-txt').hide();
                $('#unit-types').hide();
            }
            if (typeid === 3) {
                $('#soho-tower').hide();
                $('#residence-tower').hide();
                $('#office-tower').show();
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-office_1.jpg') }}");
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/tower/thesmith-mobile-units-office_1.0.jpg') }}");
                $('#btn-trans').hide();
                $('#lobby-bg').hide();
                $('#lobby-txt').hide();
                $('#unit-types').hide();
            }
        }

        function changebg() {
            let mode = $('#home_runner_bg_switcher').val();
            if (mode === "1") {
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}");
                $('#home_runner_bg_switcher').val(2);
            }
            else{
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-34.jpg') }}");
                $('#home_runner_bg_switcher').val(1);
            }
        }


    </script>
@endsection


