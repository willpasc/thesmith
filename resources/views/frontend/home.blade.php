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
                        <p class="txt-body font-lato d-none d-md-block">The Smith stands as a home for millennials who seek limitless
                            opportunities at<br/> the prosperous land of Alam Sutera. Relish an
                            elegant home that smartly<br/> incorporates luxury and comfort,
                            encircled with complete SOHO amenities<br/> that boosts a
                            balanced lifestyle experience.
                        </p>
                        <div class="row pt-4 d-none d-md-block">
                            <div class="col-4">
                                <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" class="txt-body font-metropolis-medium text-center px-3 py-2 text-white" style="border: 1px solid white;">See Tower Plans</a>
                            </div>
                            <div class="col-8"></div>
                        </div>
                    </div>

                </div>
                <div class="row"></div>
                <div class="banner-scroll d-none d-md-block">
                    <a href="#" onclick="navigateSection('overview')">
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
            <div class="col-1"></div>
            <div class="col-md-12 col-10  text-center text-dark">
                <div class="border-swiper-custom"></div>
                <p class="txt-header-body font-metropolis py-3" style="letter-spacing: 5px;">SILICON VALLEY EXPERIENCE</p>
                <p class="txt-body font-lato">The Smith stands as a home for millennials who seek limitless
                    opportunities at the prosperous land of Alam Sutera. Relish an
                    elegant home that smartly incorporates luxury and comfort,
                    encircled with complete SOHO amenities that boosts a
                    balanced lifestyle experience.
                </p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<section id="overview">
    <div class="container">
        <div class="row pt-md-5 pt-0 pb-5">
            <div class="col-md-2 col-1"></div>
            <div class="col-md-8 col-10 text-center text-dark pt-3">
                <p class="let-spa txt-header-body font-metropolis font-weight-bold">3D OVERVIEW</p>
                <p class="txt-subheader-2 font-lato pb-md-5 pb-3 let-spa-2">Bird’s Eye View of The Smith</p>
{{--                <img src="{{ asset('images/thesmith/home/overview-dummy.png') }}" alt="overview" class="w-100">--}}
                <video class="w-100" autoplay muted loop>
                    <source src="{{ asset('videos/prev03 the smith.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-md-2 col-1"></div>
        </div>
    </div>
</section>

<section class="concept-bg" id="concept">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-white text-center py-5 px-md-0 px-5">
                <p class="txt-header-body font-metropolis-medium let-spa-8">THE CONCEPT</p>
                <p class="txt-subheader-2 font-lato-light pb-3 let-spa-2">Three Foundational Ideas</p>
                <div class="border-concept-custom-1"></div>
                <div class="row py-5">
                    <div class="col-md-4 col-12 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-08.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                        <p class="py-md-4 py-3 txt-subheader font-metropolis-bold let-spa-2">LIVE, HUSTLE, CREATE</p>
                        <p class="txt-body px-md-3 px-5 font-lato d-block d-md-none">Elegantly incorporates comfort and
                            well-being, all within steps from home.</p>
                            <p class="txt-body px-md-3 px-5 font-lato d-none d-md-block">Elegantly incorporates comfort and
                            well-being,<br/> all within steps from home.</p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-5 pb-md-0">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-09.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-metropolis-bold let-spa-2">CURRATED COMMUNITY</p>
                            <p class="txt-body px-md-3 px-5 font-lato d-none d-md-block">Equipped with facilities designed
                                for<br/> collaborative communities.</p>
                            <p class="txt-body px-md-3 px-5 font-lato d-block d-md-none">Equipped with facilities designed
                                for collaborative communities.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/thesmith/concept/thesmith-web-home_2.0-10.jpg') }}" alt="img" class="img-concept">
                        <div class="">
                            <p class="py-md-4 py-3 txt-subheader font-metropolis-bold let-spa-2">HOME OF UNICORNS</p>
                            <p class="txt-body px-md-3 px-5 font-lato">1300 m<sup style="font-size:10px;">2</sup> of Co-Working Space,<br/>
                                managed by Go Work.</p>
                        </div>
                    </div>
                </div>
                <div class="border-concept-custom-1"></div>
                <div class="row pt-5">
                    <div class="col-md-5 col"></div>
                    <div class="col-md-2 col-8">
                        <a href="{{ route('frontend.concept')}}" class="txt-body text-center py-2 px-4 text-white font-lato let-spa-2" style="border: 1px solid white;">Read More</a>
                    </div>
                    <div class="col-md-5 col"></div>
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
                <p class="txt-header-body font-metropolis font-weight-bold let-spa-7"> THE PERFECT LOCATION</p>
                <p class="txt-subheader-2 font-lato pb-3 let-spa-2">Neighbors to World-Class Amenities</p>
                <img src="{{ asset('images/thesmith/location/thesmith-web_2.0-11.png') }}" alt="img" class="w-100 pb-3">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-12 px-5">
                    <p class="txt-subheader font-metropolis-bold py-3">ALAM SUTERA SMART CITY</p>
                    <p class="txt-body font-lato px-4">The Smith stands neighboring to countable world-class education, healthcare and leisure amenities,
                        namely St. Laurensia School, Binus University, Omni Hospital, Mall Alam Sutera, Living World and Ikea.
                        An ease of multi-city commuting is also highlighted as it stands a minute away from the
                        Toll Gate of Alam Sutera.</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row pt-4">
                    <div class="col"></div>
                    <div class="col-md-2 col-6">
                        <a href="{{ route('frontend.location')}}" class="txt-body text-center py-2 px-4 text-dark font-lato" style="border: 1px solid #333;">Read More</a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
{{--<section class="gowork-bg">--}}
{{--    <div class="container">--}}
{{--        <div class="row py-cust">--}}
{{--            <div class="col-md-3"></div>--}}
{{--            <div class="col-md-6 col-12 text-center">--}}
{{--                <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-logo_1.0.png') }}" alt="img" class="gowork-logo">--}}
{{--                <p class="text-white py-5 txt-body px-5 font-metropolis">One of the biggest Co-Working Space in Indonesia, with more than 30 locations.--}}
{{--                    Starting from Pacific Place, Plaza Indonesia, Senayan City, including Bali.--}}
{{--                    Currently Go Work serves more than 12.000 members.</p>--}}
{{--                <p class="text-white txt-body pb-3 font-metropolis">Go Work Partners include:</p>--}}
{{--                <div class="row px-5">--}}
{{--                    <div class="col-md-3 col-12 pb-4">--}}
{{--                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-gojek-logo_1.0.png') }}" alt="img" class="partners-logo">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-12 pb-4">--}}
{{--                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-zomato-logo_1.0.png') }}" alt="img" class="partners-logo">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-12 pb-4">--}}
{{--                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-kopikenangan-logo_1.0.png') }}" alt="img" class="partners-logo">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-12">--}}
{{--                        <img src="{{ asset('images/thesmith/home/thesmith-web-home-gowork-fore-logo_1.0.png') }}" alt="img" class="partners-logo">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="concept-bg pb-md-0 pb-5" id="towerplan">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center py-md-5 py-4">
                <p class="txt-header-body font-metropolis-medium let-spa-8">TOWER PLANS</p>
                <p class="txt-subheader-2 font-metropolis pb-md-0 pb-3 let-spa-2 d-none d-md-block">A home and an office, all only a few steps away</p>
                <p class="txt-subheader-2 font-metropolis pb-md-0 pb-3 let-spa-2 d-block d-md-none">A home and an office,<br/> all only a few steps away</p>
                <div class="border-concept-custom d-block d-md-none"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row text-center pb-md-5 pb-0">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs pt-3" role="tablist">
                    <li class="nav-item col-md-4 col-12 p-0 tab-nav font-12">
                        <a class="nav-link active text-white font-lato-light let-spa-2" data-toggle="tab" href="#residence" role="tab" id="tabResidence"  onclick="changetab(1)">RESIDENCES</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav font-12">
                        <a class="nav-link text-white font-lato-light let-spa-2" data-toggle="tab" href="#soho" role="tab" id="tabSoho" onclick="changetab(2)">SOHO</a>
                    </li>

                    <li class="nav-item col-md-4 p-0 tab-nav font-12">
                        <a class="nav-link text-white font-lato-light let-spa-2" data-toggle="tab" href="#office" role="tab" id="tabOffice" onclick="changetab(3)">OFFICES</a>
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
                <div class="bg-tower">
                    <input type="hidden" value="1" id="home_runner_bg_switcher">
                    <div class="padd-trans">
                            <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-35.png') }}" alt="img" id="btn-trans" class="transform-button"  style="cursor: pointer;" onclick="changebg()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-5" style="background-color: black">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohoa">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohob">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohob">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohob">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohob">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohoc">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohod">
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
                                                                <a href="{{ route('frontend.towerplans', ['tabname'=>'soho'])}}#sohoe">
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
                        <ul class="nav nav-tabs2 pt-3 fs-12 lh-12" role="tablist">
                            <li class="nav-item col-md-2 p-0 tab-nav">
                            </li>
                            <li class="nav-item col-md-2 col-12 p-0 tab-nav font-12" >
                                <a class="nav-link font-lato  active" data-toggle="tab" href="#sohoa" role="tab" id="tabSohoa" style="padding: 16px 5px;" ><span>Studio</span></a>
                            </li>

                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                <a class="nav-link  font-lato  " data-toggle="tab" href="#sohob" role="tab" id="tabSohob" style="padding: 16px 5px;" ><span>1 Bedroom</span></a>
                            </li>

                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                <a class="nav-link font-lato " data-toggle="tab" href="#sohoc" role="tab" id="tabSohoc" style="padding: 10px 5px;" ><span>1 Bedroom +<br/>Home Office</span></a>
                            </li>
                            <li class="nav-item col-md-2 p-0 tab-nav font-12">
                                <a class="nav-link font-lato " data-toggle="tab" href="#sohod" role="tab" id="tabSohod" style="padding: 10px 5px;" >1 Bedroom +<br/>Home Office Corner</a>
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
                            <div class="tab-pane fade show active" id="sohoa" role="tabpanel">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row py-5">
                                        <div class="col-md-12 col-12">
                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-studio.png') }}" alt="img" class="w-100">
                                        </div>
{{--                                        <div class="col-md-8 pt-5 pt-md-0">--}}
{{--                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-02.png') }}" alt="img" class="w-100">--}}
{{--                                        </div>--}}
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
                            <div class="tab-pane fade show" id="sohob" role="tabpanel">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row py-5">
                                        <div class="col-md-12 col-12">
                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-1br.png') }}" alt="img" class="w-100">
                                        </div>
{{--                                        <div class="col-md-8 pt-5 pt-md-0">--}}
{{--                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-03.png') }}" alt="img" class="w-100">--}}
{{--                                        </div>--}}
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
                            <div class="tab-pane fade show" id="sohoc" role="tabpanel">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row py-5">
                                        <div class="col-md-12 col-12">
                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-1brho.png') }}" alt="img" class="w-100">
                                        </div>
{{--                                        <div class="col-md-8 pt-5 pt-md-0">--}}
{{--                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-04.png') }}" alt="img" class="w-100">--}}
{{--                                        </div>--}}
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
                            <div class="tab-pane fade show" id="sohod" role="tabpanel">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="row py-5">
                                        <div class="col-md-12 col-12">
                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-plans_2-1brhoc.png') }}" alt="img" class="w-100">
                                        </div>
{{--                                        <div class="col-md-8 pt-5 pt-md-0">--}}
{{--                                            <img src="{{ asset('images/thesmith/tower/thesmith-web-hr_2.0-05.png') }}" alt="img" class="w-100">--}}
{{--                                        </div>--}}
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
<section class="" id="facilities" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-white text-center py-5">
                <p class="txt-header-body font-metropolis-medium let-spa-8">FACILITIES</p>
                <p class="txt-subheader-2 font-metropolis let-spa-2 pb-3">Experience Silicon Valley Amenities</p>
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
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-02.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-01.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            <div class="swiper-slide">
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-03.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-02.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            <div class="swiper-slide" >
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_2.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-04.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-03.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            <div class="swiper-slide">
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-05.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-04.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            <div class="swiper-slide">
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-office-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-06.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-05.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            {{--            <div class="swiper-slide">--}}
            {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img">--}}
            {{--            </div>--}}
            <div class="swiper-slide">
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-business-lounge_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-07.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-06.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            <div class="swiper-slide">
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-coworking-space-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-08.jpg') }}" alt="img" class="d-none d-md-block">
                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facilities_2.0-07.jpg') }}" alt="img" class="w-100 d-block d-md-none">
            </div>
            {{--                <div class="swiper-slide">--}}
            {{--                    --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-auditorium_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
            {{--                    <img src="{{ asset('images/thesmith/facilities/TheSmith-Auditorium_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
            {{--                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-auditorium_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
            {{--                </div>--}}
            {{--                <div class="swiper-slide">--}}
            {{--                    --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-sky-pool_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
            {{--                    <img src="{{ asset('images/thesmith/facilities/TheSmith-Pool_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
            {{--                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-pool_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
            {{--                </div>--}}
        </div>
    </section>
</section>
<section  class="fac-slide pb-5" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-1"></div>
            <div class="col-md-8 col-10">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container content-slider text-dark bg-white">
                            <div class="swiper-wrapper py-3">
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5 px-0">
                                            <p class="font-metropolis-bold">Swimming Pool</p>
                                            <p class="font-lato txt-body py-3 px-5">Live, Hustle, Create. Enjoy living in The Smith. May it be for sport, leisure, or any purposes.
                                                A swimming pool with a view is at your doorstep for you to relish.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">Gym Studio</p>
                                            <p class="font-lato txt-body py-3 px-5">Stay vigorous to maximize your hustle. The Smith has a Gym Studio for any kind of exercise
                                                that you need for tip-top fitness.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">1.400 Sqm Silicon Valley Facilities</p>
                                            <p class="font-lato txt-body py-3 px-5">Experience elegant Silicon Valley amenities within The Smith. Limitless opportunities
                                                ready to be made.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">Meeting Rooms</p>
                                            <p class="font-lato txt-body py-3 px-5">Balance your life with utmost productivity by the convenience of having meeting rooms
                                                steps away from your homes.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">Co-Working Space</p>
                                            <p class="font-lato txt-body py-3 px-5">Work with a view. Utilize the beautifully placed co-working space within The Smith. Equipped
                                                with world-class features.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">Outdoor Plaza</p>
                                            <p class="font-lato txt-body py-3 px-5">Greeted with lavishness, then take delight in strolls, or get your fresh cups of coffee on the
                                                outdoor plaza of The Smith.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row px-md-0">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 col-12 text-dark text-center py-5 px-md-5">
                                            <p class="font-metropolis-bold">Double Road System</p>
                                            <p class="font-lato txt-body py-3 px-5">The Smith is the only mixed-use development in Alam Sutera that have both Slow Land and
                                                a Fast Lane. Besides giving more privacy, the Slow Lane is adding the safety to commute
                                                in or out of the building.</p>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6 col-12 pt-4">
                                                    <a href="{{ route('frontend.facilities')}}" class="txt-body text-center py-2 px-4 text-dark font-lato let-spa-2" style="border: 1px solid black;">See More</a>
                                                </div>
                                                <div class="col-md-"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                {{--                                    <div class="swiper-slide" style="background-color: black;">--}}
                                {{--                                        <div class="row px-md-0">--}}
                                {{--                                            <div class="col-md-1"></div>--}}
                                {{--                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">--}}
                                {{--                                                <p class="font-metropolis-bold">SKY POOL</p>--}}
                                {{--                                                <p class="font-lato txt-body py-3 px-5">The Smith is the only mixed-use development in Alam Sutera that have both a Slow Lane and--}}
                                {{--                                                    a Fast Lane. Besides giving more privacy, the slow lane is adding the safety to commute--}}
                                {{--                                                    in or out of the building.</p>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-md-1"></div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}

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
            <div class="col-md-2 col-1"></div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-dark text-center py-5">
                <p class="txt-header-body font-lato let-spa-7" >PARTNERS</p>
                <p class="txt-subheader-2 font-lato pb-5 let-spa-2">The Associates To Ensure Your Perfect Homes</p>
                <div class="row py-5">
                    <div class="col-4">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">Architecture</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web-home_2.0-22.png') }}" alt="img" class="w-75 pt-3">
                    </div>
                    <div class="col-4 px-0 ">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">Interior Design</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-19.png') }}" alt="img" class="w-75 pt-4">
                    </div>
                    <div class="col-4">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">Luxury Brand</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-20.png') }}" alt="img" class="w-75 pt-4">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-6">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">Building Management</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-21.png') }}" alt="img" class="w-50 pt-3">
                    </div>
                    <div class="col-6">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">Main Contractor</p>
                        <div class="border-bot-black"></div>
                        <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-22.png') }}" alt="img" class="w-50 pt-3">
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-12">
                        <p class="txt-subheader font-metropolis-bold pb-2 font-partners">BANKS</p>
                        <div class="border-bot-black"></div>
                        <div class="row px-5 px-md-0">
                            <div class="col-md-3 col-6 pb-3 pb-md-0">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-23.png') }}" alt="img" class="w-75 pt-3">
                            </div>
                            <div class="col-md-3 col-6 pb-3 pb-md-0">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-24.png') }}" alt="img" class="w-100 pt-3">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="{{ asset('images/thesmith/home/thesmith-web_2.0-25.png') }}" alt="img" class="w-100 pt-3">
                            </div>
                            <div class="col-md-3 col-6">
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
        <div class="row py-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-white text-center py-5">
                <p class="txt-header-body font-metropolis-medium  let-spa-8">DEVELOPER</p>
{{--                <p class="txt-body font-lato pb-3">Finely Crafted By</p>--}}
                <img src="{{ asset('images/thesmith/home/thesmith-web-home_2.0-23.png') }}" alt="img" class="w-50 py-5">
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

        .transform-button{
            width:150px;
        }

        .padd-trans{
            padding-top:23%;
        }

        .pagi-pos{
            position: relative;
            bottom:0px;
        }

        .img-soho{
            width: 100%;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .border-bot-black{
            border-bottom: 1px solid #333;
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
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 180px;
        }
        .bg-lobby{
            background-image: url('{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 345px;
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
            border-radius:0;
        }
        .nav-tabs2 .nav-link {
            color: Black;
            background-color: white;
            border: 1px solid red;
            border-radius:0;
            margin:3px;
        }
        .nav-tabs2 .nav-link.active {
            color: white;
            /*background-color: #dc2d19;*/
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-15.png') }}');
            background-size: cover;
            border-color: #fff #fff #fff;
            border-radius:0;
        }
        .nav-tabs {
            border-bottom:0px;
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

        .border-concept-custom-1{
            border-bottom: 1px solid #565656;
            width:100%;
        }

        .border-swiper-custom{
            border-bottom: 1px solid #333;
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

        @media (width: 360px){
            .font-partners {
                font-size: 13px;
            }
        }
        @media (min-width: 576px) {

            .transform-button{
                width:245px;
            }


            .img-soho{
                width: 500px;
                padding-top: 30px;
                padding-bottom: 30px;
            }

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

            .bg-lobby{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-14.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 390px;
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
            .banner-scroll{
                padding-top:290px;
            }
            .padd-top50{
                padding-top:20%;
            }
            .bg-home {
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-07.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 940px !important;
                position: relative;
                padding-top:100px;
            }
            .bg-lobby{
                background-image: url('{{ asset('images/thesmith/home/thesmith-web-home_2.1-14.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                width: auto;
                height: 550px;
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
            // var swiper = new Swiper('.swiper-others', {
            //     loop: true,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         type: 'fraction',
            //     },
            //     navigation: {
            //         nextEl: '.swiper-button-next',
            //         prevEl: '.swiper-button-prev',
            //     },
            //     observer: true,
            //     observeParents: true
            // });

            var unitSwiper = new Swiper('.units-slider1', {
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
            // var swiper = new Swiper('.swiper-others', {
            //     loop: true,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         type: 'fraction',
            //     },
            //     navigation: {
            //         nextEl: '.swiper-button-next',
            //         prevEl: '.swiper-button-prev',
            //     },
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

        $('#tabSohoa').on('click', function () {
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
        $('#tabSohob').on('click', function () {
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
        $('#tabSohoc').on('click', function () {
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
        $('#tabSohod').on('click', function () {
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

        function changetab(typeid) {
            if (typeid === 1) {
                $('#residence').show();
                $('#soho').hide();
                $('#office').hide();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/home/thesmith-web-home_2.0-33.jpg') }}");
                $('#btn-trans').show();
                $('#lobby-bg').show();
                $('#lobby-txt').show();
                $('#unit-types').show();
            }

            if (typeid === 2) {
                $('#residence').hide();
                $('#soho').show();
                $('#office').hide();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/tower/tower-soho_1.jpg') }}");
                $('#btn-trans').hide();
                $('#lobby-bg').hide();
                $('#lobby-txt').hide();
                $('#unit-types').hide();

            }

            if (typeid === 3) {
                $('#soho').hide();
                $('#residence').hide();
                $('#office').show();
                $('.bg-tower').css("background-image", "url('{{ asset('images/thesmith/tower/tower-office_1.jpg') }}");
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
