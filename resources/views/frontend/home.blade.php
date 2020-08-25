@extends('layouts.frontend')

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
                        <p class="pb-3 txt-silicon-header txt-header-body font-metropolis-medium d-none d-md-block">SILICON VALLEY<br/> EXPERIENCE</p>
                        <p class="txt-body font-lato-light d-none d-md-block">The Smith stands as a home for millennials who seek limitless
                            opportunities at<br/> the prosperous land of Alam Sutera. Relish an
                            elegant home that smartly<br/> incorporates luxury and comfort,
                            encircled with complete SOHO amenities<br/> that boosts a
                            balanced lifestyle experience.
                        </p>
                        <div class="row pt-4">
                            <div class="col-3">
                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" class="txt-body font-lato-light text-center p-2 text-white" style="border: 1px solid white;">See Tower Plans</a>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>

                </div>
                <div class="row"></div>
                <div class="banner-scroll d-none d-md-block">
                    <a href="#" onclick="navigateSection('concept')">
                    <p class="text-white txt-body font-lato-light let-spa">SCROLL</p>
                    <img src="{{ asset('images/thesmith/home/thesmith-web-scroll-arrow_1.0.png') }}" alt="img" class="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-block d-md-none py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-dark">
                <div class="border-swiper-custom"></div>
                <p class="txt-header-body font-metropolis py-3" style="letter-spacing: 5px;">SILICON VALLEY EXPERIENCE</p>
                <p class="txt-body font-lato">The Smith stands as a home for millennials who seek limitless
                    opportunities at the prosperous land of Alam Sutera. Relish an
                    elegant home that smartly incorporates luxury and comfort,
                    encircled with complete SOHO amenities that boosts a
                    balanced lifestyle experience.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-2"></div>
            <div class="col-8 text-center text-dark">
                <p class="let-spa-5 txt-header-body font-metropolis font-weight-bold">3D OVERVIEW</p>
                <p class="txt-body font-lato pb-3">Bird’s Eye View of The Smith</p>
                <img src="{{ asset('images/thesmith/home/overview-dummy.png') }}" alt="overview" class="w-100">
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>

<section class="concept-bg" id="concept">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-white text-center py-5 px-md-0 px-5">
                <p class="txt-header-body font-metropolis font-weight-bold" style="letter-spacing: 5px;">THE CONCEPT</p>
                <p class="txt-body font-lato pb-3 let-spa-2">Three Foundational Ideas</p>
                <div class="border-concept-custom-1"></div>
                <div class="row py-5">
                    <div class="col-md-4 col-12 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-08.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                        <p class="py-md-4 py-3 txt-subheader font-lato">LIVE, HUSTLE, CREATE.</p>
                        <p class="txt-body px-md-3 px-5 font-metropolis">Elegantly incorporates comfort and
                            well-being,<br/> all within steps from home.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-09.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato">CURRATED COMMUNITY.</p>
                            <p class="txt-body px-md-3 px-5 font-metropolis">Equipped with facilities designed
                                for<br/> collaborative communities.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-10.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-lato">HOME OF UNICORNS.</p>
                            <p class="txt-body px-md-3 px-5 font-metropolis">1300 m<sup style="font-size:10px;">2</sup> of Co-Working Space,<br/>
                                managed by Go Work.</p>
                        </div>
                    </div>
                </div>
                <div class="border-concept-custom-1"></div>
                <div class="row pt-5">
                    <div class="col"></div>
                    <div class="col-2">
                        <a href="{{ route('frontend.concept')}}" class="txt-body text-center py-2 px-3 text-white" style="border: 1px solid white;">Read More</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-dark text-center">
                <p class="txt-header-body font-metropolis font-weight-bold" style="letter-spacing: 5px;">THE PERFECT LOCATION</p>
                <p class="txt-body font-lato pb-3 let-spa-2">Neighbors to World-Class Amenities</p>
                <img src="{{ asset('images/thesmith/location/thesmith-web_2.0-11.png') }}" alt="img" class="w-100 pb-3">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 px-5">
                    <p class="txt-subheader font-lato-bold pb-3">ALAM SUTERA SMART CITY</p>
                    <p class="txt-body font-metropolis-medium ">The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,
                        namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.
                        An ease of multi-city commuting is also highlighted as it stands a minute away from the
                        Toll Gate of Alam Sutera.</p>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row pt-4">
                    <div class="col"></div>
                    <div class="col-2">
                        <a href="{{ route('frontend.concept')}}" class="txt-body text-center py-2 px-3 text-dark" style="border: 1px solid black;">Read More</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="gowork-bg">
    <div class="container">
        <div class="row py-cust">
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
    </div>
</section>
<section class="concept-bg pb-md-0 pb-5" id="towerplan">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center py-md-5 py-4">
                <p class="txt-header-body font-lato let-spa">TOWER PLANS</p>
                <p class="txt-body font-lato pb-md-0 pb-3">A home and an office, all only a few steps away</p>
                <div class="border-concept-custom d-block d-md-none"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row text-center pb-md-5 pb-0">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs pt-3" role="tablist">
                    <li class="nav-item col-md-4 col-12 p-0 tab-nav">
                        <a class="nav-link active text-white font-lato let-spa-2" data-toggle="tab" href="#residence" role="tab" id="tabResidence"  onclick="changetab(1)">RESIDENCE UNITS</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav">
                        <a class="nav-link text-white font-lato let-spa-2" data-toggle="tab" href="#soho" role="tab" id="tabSoho" onclick="changetab(2)">SOHO UNITS</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav">
                        <a class="nav-link text-white font-lato let-spa-2" data-toggle="tab" href="#office" role="tab" id="tabOffice" onclick="changetab(3)">OFFICE UNITS</a>
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
            <div class="col-md-2 col-1"></div>
            <div class="col-md-8 col-10">
                <div class="text-center box-accor" >
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="residence" role="tabpanel">
{{--                            <a href="#residence-accor" >--}}
{{--                                <span class=" font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                            </a>--}}
                            <div class="" id="residence-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <div class="swiper-container swiper-others">
                                                <div class="swiper-wrapper py-3">
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">ONE BEDROOM - A</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}#1">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">ONE BEDROOM - B</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
{{--                                                                <a href="{{ route('frontend.towerplans')}}#res-2">--}}
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}#2">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">ONE BEDROOM - C</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}#3">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">STUDIO</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}#4">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a></div>
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
{{--                            <a href="#soho-accor" >--}}
{{--                                <span class="txt-hemat-catatan font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                            </a>--}}
                            <div class="" id="soho-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <div class="swiper-container swiper-others">
                                                <div class="swiper-wrapper py-3">
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - A</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#1">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - B</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#2">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>  </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - B2</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#3">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>  </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - B3</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#4">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - B4</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#5">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - C</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#6">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - D</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#7">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>  </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">SOHO - E</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#8">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a> </div>
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
                        <div class="tab-pane fade show" id="office" role="tabpanel">
{{--                            <a href="#office-accor" data-toggle="collapse" data-parent="accordion">--}}
{{--                                <span class="txt-hemat-catatan font-lato text-dark">Description--}}
{{--                                    &nbsp; <img--}}
{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                </span>--}}
{{--                            </a>--}}
                            <div class="" id="office-accor"
                             style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Swiper -->
                                            <div class="swiper-container swiper-others">
                                                <div class="swiper-wrapper py-3">
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">OFFICE - A</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{route('frontend.towerplans', ['tabname'=>'office'])}}#1">
                                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">OFFICE - B</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{route('frontend.towerplans', ['tabname'=>'office'])}}#2">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="row px-md-0 px-4">
                                                            <div class="col-12 text-dark text-center pt-5">
                                                                <p class="txt-header-body font-metropolis">OFFICE - C</p>
                                                                <p class="txt-body font-lato d-none d-md-block">Located strategically, neighboring to world-class amenities</p>
                                                                <div class="border-swiper-custom"></div>
                                                                <p class="txt-body pt-3 d-none d-md-block font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                    Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <p class="txt-body pt-3 d-block d-md-none font-metropolis">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                    with interiors installed smartly, together with ample ventilations that shines every room.
                                                                    Every unit is equipped with safety fittings, including an intercom that connects
                                                                    directly to the safety officers, ensuring needs are attended promptly.
                                                                </p>
                                                                <a href="{{route('frontend.towerplans', ['tabname'=>'office'])}}#3">
                                                                    <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                                                </a>
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
<section class="" id="facilities">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-dark text-center py-5">
                <p class="txt-header-body font-metropolis-bold" style="letter-spacing: 5px;">FACILITIES</p>
                <p class="txt-body font-lato pb-3">Experience Silicon Valley Amenities</p>
{{--                <div class="border-concept-custom"></div>--}}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
{{--    <div class="container-fluid">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-12">--}}
{{--                <div class="bg-facilities">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_3.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide" >
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_2.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_2.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_2.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_1.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-office-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_4.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_4.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            {{--            <div class="swiper-slide">--}}
            {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img">--}}
            {{--            </div>--}}
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-business-lounge_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lounge_1.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lounge_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-coworking-space-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-MeetingRooms_1.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-meetingrooms_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-auditorium_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Auditorium_1.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-auditorium_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
            <div class="swiper-slide">
{{--                <img src="{{ asset('images/thesmith/facilities/facilities-sky-pool_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/TheSmith-Pool_1.1.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-pool_1.0.jpg') }}" alt="img" class="d-block d-md-none">
            </div>
        </div>
    </section>
</section>
<section  class="fac-slide pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-1"></div>
            <div class="col-md-8 col-10">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container content-slider">
                            <div class="swiper-wrapper py-3">
{{--                                <div class="swiper-slide">--}}
{{--                                    <div class="row px-md-0 px-4">--}}
{{--                                        <div class="col-12 text-dark text-center pt-5">--}}
{{--                                            <p class="font-lato">MAP</p>--}}
{{--                                            <a href="{{route('frontend.facilities')}}#1">--}}
{{--                                            <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="swiper-slide" style="background-color: black;">
                                    <div class="row px-md-0 px-5">
                                        <div class="col-1"></div>
                                        <div class="col-10 text-white text-center py-5 px-5">
                                            <p class="font-metropolis-bold">Double Road System</p>
                                            <p class="font-lato txt-body py-3 px-5">The Smith is the only mixed-use development in Alam Sutera that have both a Slow Lane and
                                                a Fast Lane. Besides giving more privacy, the slow lane is adding the safety to commute
                                                in or out of the building.</p>
                                            <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" class="txt-body font-lato-light text-center text-white" style="border: 1px solid white;padding:5px 20px;">See More</a>
{{--                                            <a href="{{ route('frontend.facilities')}}#3">--}}
{{--                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">--}}
{{--                                            </a> --}}
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">GRAND LOBBY</p>
                                            <a href="{{ route('frontend.facilities')}}#4">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">APARTMENT LOBBY</p>
                                            <a href="{{ route('frontend.facilities')}}#2">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">OFFICE LOBBY</p>
                                            <a href="{{ route('frontend.facilities')}}#5">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">BUSINESS LOUNGE</p>
                                            <a href="{{ route('frontend.facilities')}}#6">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">COWORKING SPACE LOBBY</p>
                                            <a href="{{ route('frontend.facilities')}}#7">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">AUDITORIUM</p>
                                            <a href="{{ route('frontend.facilities')}}#8">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a> </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0 px-4">
                                        <div class="col-12 text-dark text-center pt-5">
                                            <p class="font-lato">SKY POOL</p>
                                            <a href="{{ route('frontend.facilities')}}#9">
                                                <img src="{{ asset('images/thesmith/home/thesmith-web-detail-button_1.0.png') }}" alt="img" class="fulldetail pt-3">
                                            </a></div>
                                    </div>
                                </div>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination white"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-1"></div>
        </div>
    </div>
</section>

<section class="" id="architect" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-white text-center py-5">
                <p class="txt-header-body font-metropolis-bold" style="letter-spacing: 5px;">ARCHITECT & INTERIORS</p>
                <p class="txt-body font-lato pb-3">Our Collaborators in Making the Living Experiences</p>
                {{--                <div class="border-concept-custom"></div>--}}
                <div class="row px-5">
                    <div class="col-md-6 pr-md-1">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home_2.0-16.jpg') }}" alt="img" class="w-100">
                        <div class="py-5">
                            <p class=" font-lato-bold txt-subheader">RAFAL KAPUSTA</p>
                            <p class="txt-body font-lato font-italic">The Architect</p>
                        </div>
                        <div class="txt-body font-lato px-5 collapse pb-5" id="more-rafal">
                            <p class="pb-3">
                                Rafal graduated from Cracow University of Technology in 2009
                                with a Masters Degree in Architecture and Urban Planning.
                                Initially joining Grupa 68 in Poland before moving to New York
                                to deliver a $2.5 Billion resort project in Atlantic City for
                                Arquitectonica. Excited by the possibilities emerging from the
                                urbanization of Asia, Rafal moved to Singapore in 2011 to work
                                on a wide range of high-profile mixed-use developments. He was
                                responsible for design leadership on a number of projects across
                                Asia including Shekou Financial Center, Shenzen, China.
                            </p>
                            <p>Rafal founded +OOZN in 2013 along with Stephanie Gunawan.
                                The team quickly built upon the success of their first
                                collaboration to develop a portfolio of award winning projects.
                            </p>
                        </div>
                        <div class="pb-5">
                            <a href="#more-rafal" data-toggle="collapse" data-parent="accordion">
                                <img src="{{ asset('images/thesmith/home/btn-readmore.png') }}" alt="img" style="width:150px;" id="btn-rafal">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home_2.0-17.jpg') }}" alt="img" class="w-100">
                        <div class="py-5">
                            <p class=" font-lato-bold txt-subheader">STUDIO HBA</p>
                            <p class="txt-body font-lato font-italic">Interior Designer</p>
                        </div>
                        <div class="txt-body font-lato px-5 pb-5">
                            <div class="collapse pb-5" id="more-studio">
                                <p class="px-5">
                                    An international interior design studio, with more than
                                    50 years of experience in the field.
                                </p>
                            </div>
                            <div class="pb-5">
                                <a href="#more-studio" data-toggle="collapse" data-parent="accordion">
                                    <img src="{{ asset('images/thesmith/home/btn-readmore.png') }}" alt="img" style="width:150px;" id="btn-rafal">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-dark text-center py-5">
                <p class="txt-header-body font-metropolis-bold" style="letter-spacing: 5px;">PARTNERS</p>
                <p class="txt-body font-lato pb-3">The Associates To Ensure Your Perfect Homes</p>
                <div class="row pb-5">
                    <div class="col-4">
                        <p class="txt-subheader font-lato-bold pb-2">Architecture</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-18.png') }}" alt="img" class="w-75">
                    </div>
                    <div class="col-4">
                        <p class="txt-subheader font-lato-bold pb-2">Interior Design</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-19.png') }}" alt="img" class="w-75 pt-3">
                    </div>
                    <div class="col-4">
                        <p class="txt-subheader font-lato-bold pb-2">Luxury Brand</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-20.png') }}" alt="img" class="w-75 pt-3">
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-6">
                        <p class="txt-subheader font-lato-bold pb-2">Building Management</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-21.png') }}" alt="img" class="w-50">
                    </div>
                    <div class="col-6">
                        <p class="txt-subheader font-lato-bold pb-2">Main Contractor</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-22.png') }}" alt="img" class="w-50 pt-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="txt-subheader font-lato-bold pb-2">BANKS</p>
                        <div class="border-bot-black"></div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-23.png') }}" alt="img" class="w-75 pt-3">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-24.png') }}" alt="img" class="w-100 pt-3">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-25.png') }}" alt="img" class="w-100 pt-3">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-26.png') }}" alt="img" class="w-100 pt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<section style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-white text-center py-5">
                <p class="txt-header-body font-metropolis-bold" style="letter-spacing: 5px;">DEVELOPER</p>
                <p class="txt-body font-lato pb-3">Finely Crafted By</p>
                <img src="{{ asset('images/thesmith/developer/thesmith-web_2.0-27.png') }}" alt="img" class="w-50 py-5">
                <p class="txt-body font-lato px-5 pb-4">
                    Initiated in 2009, PT Triniti Property commenced its journey with its first 5-hectare land
                    development project—Ubud Village—by the golden hands of the Founders: Septian Starlin,
                    Matius Jusuf, Bong Chandra, and Yohanes L. Andayaprana. Development projects began
                    since 2014 until 2017, introducing thoughtful lands namely Brooklyn, Springwood
                    Residence, Yukata Suites, The Smith, and Collins Boulevard.
                </p>
                <a href="{{route('frontend.developer')}}">
                    <img src="{{ asset('images/thesmith/home/btn-readmore.png') }}" alt="img" style="width:150px;">
                </a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
{{--<section id="location" style="background-color: black">--}}
{{--    <div class="container py-cust">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-2"></div>--}}
{{--            <div class="col-md-8 text-white text-center">--}}
{{--                <p class="txt-header-body font-metropolis">LOCATION</p>--}}
{{--                <p class="txt-body font-lato pb-3">Located strategically, neighboring to world-class amenities</p>--}}
{{--                <div class="border-concept-custom"></div>--}}
{{--                <div class="d-none d-md-block">--}}
{{--                    <div class="row py-5 px-md-0 px-5">--}}
{{--                        <div class="col-md-4 col-12 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_1.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis pb-md-1 py-3 txt-subheader font-weight-bold let-spa-1">1 MINUTE AWAY</p>--}}
{{--                                <p class="txt-body px-4 font-metropolis let-spa-1">From <span class="font-weight-bold">Alam Sutera Toll Gate</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_2.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="let-spa-1 pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="let-spa-1 txt-body px-4 font-metropolis">From <span class="font-weight-bold">IKEA Alam Sutera</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_3.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="let-spa-1 pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="let-spa-1 txt-body px-4 font-metropolis">From <span class="font-weight-bold">BINUS University</span> </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row px-md-0 px-5">--}}
{{--                        <div class="col-md-4 col-12 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_4.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="let-spa-1 pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTE AWAY</p>--}}
{{--                                <p class="let-spa-1 txt-body px-4 font-metropolis">From <span class="font-weight-bold">Living World</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_5.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="let-spa-1 pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="let-spa-1 txt-body px-4 font-metropolis">From <span class="font-weight-bold">Mall at Alam Sutera</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_6.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="let-spa-1 pt-md-4 font-weight-bold font-metropolis pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="let-spa-1 txt-body px-4 font-metropolis">From <span class="font-weight-bold">OMNI Hospital</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="d-block d-md-none pt-5">--}}
{{--                    <div class="row px-md-0 px-3">--}}
{{--                        <div class="col-6 pb-md-5 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_1.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">1 MINUTE AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">Alam Sutera Toll Gate</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 pb-md-5 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_2.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">IKEA Alam Sutera</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row px-md-0 px-3">--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_3.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">BINUS University</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 pb-md-5 pb-5">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_4.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-weight-bold font-metropolis pb-md-1 py-3 txt-subheader">5 MINUTE AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">Living World</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row px-md-0 px-3">--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_5.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">Mall at Alam Sutera</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-img_6.1.jpg') }}" alt="img" class="img-location">--}}
{{--                            <div class="">--}}
{{--                                <p class="pt-md-4 font-metropolis font-weight-bold pb-md-1 py-3 txt-subheader">5 MINUTES AWAY</p>--}}
{{--                                <p class="txt-body px-md-4 px-0 font-metropolis" style="font-size:11px !important;">From <span class="font-weight-bold">OMNI Hospital</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="border-location-custom"></div>--}}
{{--                    <img src="{{ asset('images/thesmith/home/thesmith-web-home-location-map_1.0.png') }}" alt="img" class="img-map pt-5 d-none d-md-block">--}}
{{--                    <img src="{{ asset('images/thesmith/home/thesmith-mweb-map_1.0.png') }}" alt="img" class="img-map pt-5 d-block d-md-none">--}}

{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-1"></div>--}}
{{--                    <div class="col-md-10">--}}
{{--                        <p class="txt-body pt-5 font-metropolis d-none d-md-block">--}}
{{--                            The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,<br/>--}}
{{--                            namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.<br/>--}}
{{--                            An ease of multi-city commuting is also highlighted as it stands a minute away<br/>--}}
{{--                            from the Toll Gate of Alam Sutera.--}}
{{--                        </p>--}}

{{--                        <p class="txt-body pt-5 font-metropolis d-block d-md-none px-5">--}}
{{--                            The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,--}}
{{--                            namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.--}}
{{--                            An ease of multi-city commuting is also highlighted as it stands a minute away--}}
{{--                            from the Toll Gate of Alam Sutera.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-1"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-2"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


@endsection

@section('styles')
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>

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
