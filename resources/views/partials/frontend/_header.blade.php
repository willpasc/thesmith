<!-- Header -->
{{--<header>--}}
{{--    <div class="d-none d-md-block">--}}
{{--        <!-- Header desktop STILL -->--}}
{{--        <nav class="container-header-desktop" id="header-still">--}}
{{--            <!-- Logo desktop -->--}}
{{--            <div class="wrap-menu-desktop">--}}
{{--                <div class="limiter-menu-desktop container">--}}
{{--                    <a href="{{ route('home') }}" style="margin: 0 auto 0; margin-top: -100px">--}}
{{--                        <img src="{{ asset('images/marc/about/Marcs Website components-14.png') }}" alt="LOGO" height="50" >--}}
{{--                    </a>--}}
{{--                    <!-- Menu desktop -->--}}
{{--                    <div class="menu-desktop w-100" style="position: absolute; left: 0;">--}}
{{--                        <ul class="main-menu respon-sub-menu" style="margin: 0 auto 0;">--}}
{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('home') }}" @if(Route::currentRouteName() == 'home') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >HOME</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.about') }}" @if(Route::currentRouteName() == 'frontend.about') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>ABOUT</a>--}}

{{--                            </li>--}}

{{--                            <li>--}}
{{--                                @if(Route::currentRouteName() == 'frontend.district' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.introduction' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.prives' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.lanes')--}}
{{--                                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}" style="border-bottom: 1px solid #000; padding-bottom: 10px;" >DISTRICT <i class="fa fa-chevron-down"></i></a>--}}
{{--                                @else--}}
{{--                                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}">DISTRICT <i class="fa fa-chevron-down"></i></a>--}}
{{--                                @endif--}}
{{--                                <ul class="sub-menu" style="z-index:9999;">--}}
{{--                                    <li><a href="{{ route('frontend.paul.introduction') }}" class="custom-font-1">PAUL MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">DEAN MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">GRANT MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">WILL MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">OLENN MARC</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.developer') }}" @if(Route::currentRouteName() == 'frontend.developer') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>DEVELOPER</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.masterplan') }}" @if(Route::currentRouteName() == 'frontend.masterplan') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>MASTERPLAN</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.partners') }}" @if(Route::currentRouteName() == 'frontend.partners') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>PARTNERS</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.contact_us') }}" style="padding-right: 20px !important;" @if(Route::currentRouteName() == 'frontend.contact_us') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>CONTACT</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <!-- Header desktop STICKY -->--}}
{{--        <nav class="container-header-desktop" id="header-sticky" style="display: none;">--}}
{{--            <div class="wrap-menu-desktop">--}}
{{--                <div class="limiter-menu-desktop container">--}}
{{--                    <!-- Logo desktop -->--}}
{{--                    <div class="logo">--}}
{{--                        <a href="{{ route('home') }}"><img src="{{ asset('images/marc/logo-black-without-tagline.png') }}" alt="LOGO" style="width: 350px; height: auto;"></a>--}}
{{--                    </div>--}}

{{--                    <!-- Menu desktop -->--}}
{{--                    <div class="menu-desktop">--}}
{{--                        <ul class="main-menu respon-sub-menu">--}}
{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('home') }}" @if(Route::currentRouteName() == 'home') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >HOME</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.about') }}" @if(Route::currentRouteName() == 'frontend.about') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >ABOUT</a>--}}

{{--                            </li>--}}

{{--                            <li>--}}
{{--                                @if(Route::currentRouteName() == 'frontend.district' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.introduction' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.prives' ||--}}
{{--                                Route::currentRouteName() == 'frontend.paul.lanes')--}}
{{--                                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}" style="border-bottom: 1px solid #000; padding-bottom: 10px;" >DISTRICT <i class="fa fa-chevron-down"></i></a>--}}
{{--                                @else--}}
{{--                                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}">DISTRICT <i class="fa fa-chevron-down"></i></a>--}}
{{--                                @endif--}}

{{--                                <ul class="sub-menu" style="z-index:9999;">--}}
{{--                                    <li><a href="{{ route('frontend.paul.introduction') }}" class="custom-font-1">PAUL MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">DEAN MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">GRANT MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">WILL MARC</a></li>--}}
{{--                                    <li><a href="#" class="custom-font-1 disabled-link">OLENN MARC</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.developer') }}" @if(Route::currentRouteName() == 'frontend.developer') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >DEVELOPER</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.masterplan') }}" @if(Route::currentRouteName() == 'frontend.masterplan') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >MASTERPLAN</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.partners') }}" @if(Route::currentRouteName() == 'frontend.partners') style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif >PARTNERS</a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="custom-font-1 menu-font-style" href="{{ route('frontend.contact_us') }}" @if(Route::currentRouteName() == 'frontend.contact_us') style="border-bottom: 1px solid #000; padding-bottom: 10px; padding-right: 20px !important;" @endif >CONTACT</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}



{{--    <!-- Header Mobile -->--}}
{{--    <nav class="container-header-mobile">--}}
{{--        <div class="wrap-header-mobile">--}}
{{--            <!-- Logo moblie -->--}}
{{--            <div class="logo-mobile">--}}
{{--                <a href="{{ route('home') }}"><img src="{{ asset('images/marc/logo-black-without-tagline.png') }}" alt="LOGO"></a>--}}
{{--            </div>--}}


{{--            <!-- Button show menu -->--}}
{{--            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">--}}
{{--					<span class="hamburger-box">--}}
{{--						<span class="hamburger-inner"></span>--}}
{{--					</span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="menu-mobile">--}}
{{--            --}}{{--<ul class="top-bar-m p-l-20 p-tb-8">--}}
{{--                --}}{{--<li>--}}
{{--                    --}}{{--<div class="t1-s-1 cl-5 p-tb-3">--}}
{{--							--}}{{--<span class="fs-16 m-r-6">--}}
{{--								--}}{{--<i class="fa fa-home" aria-hidden="true"></i>--}}
{{--							--}}{{--</span>--}}
{{--                        --}}{{--<span>379 5Th Ave New York, Nyc 10018</span>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</li>--}}

{{--                --}}{{--<li>--}}
{{--                    --}}{{--<div class="t1-s-1 cl-5 p-tb-3">--}}
{{--							--}}{{--<span class="fs-16 m-r-6">--}}
{{--								--}}{{--<i class="fa fa-phone" aria-hidden="true"></i>--}}
{{--							--}}{{--</span>--}}
{{--                        --}}{{--<span>(+1) 96 716 6879</span>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</li>--}}

{{--                --}}{{--<li>--}}
{{--                    --}}{{--<div class="t1-s-1 cl-5 p-tb-3">--}}
{{--							--}}{{--<span class="fs-16 m-r-6">--}}
{{--								--}}{{--<i class="fa fa-clock-o" aria-hidden="true"></i>--}}
{{--							--}}{{--</span>--}}
{{--                        --}}{{--<span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</li>--}}

{{--                --}}{{--<li>--}}
{{--                    --}}{{--<div>--}}
{{--                        --}}{{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
{{--                            --}}{{--<i class="fa fa-facebook-official"></i>--}}
{{--                        --}}{{--</a>--}}

{{--                        --}}{{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
{{--                            --}}{{--<i class="fa fa-twitter"></i>--}}
{{--                        --}}{{--</a>--}}

{{--                        --}}{{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
{{--                            --}}{{--<i class="fa fa-google-plus"></i>--}}
{{--                        --}}{{--</a>--}}

{{--                        --}}{{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
{{--                            --}}{{--<i class="fa fa-instagram"></i>--}}
{{--                        --}}{{--</a>--}}

{{--                        --}}{{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
{{--                            --}}{{--<i class="fa fa-linkedin"></i>--}}
{{--                        --}}{{--</a>--}}
{{--                    --}}{{--</div>--}}
{{--                --}}{{--</li>--}}
{{--            --}}{{--</ul>--}}

{{--            <ul class="main-menu" style="background-color: #000 !important;">--}}
{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('home') }}">HOME</a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.about') }}">ABOUT</a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.district') }}">DISTRICT</a>--}}
{{--                    <ul class="sub-menu" style="z-index:9999;">--}}
{{--                        <li><a href="{{ route('frontend.paul.introduction') }}" class="custom-font-1">PAUL MARC</a></li>--}}
{{--                        <li><a href="#" class="custom-font-1 disabled-link">DEAN MARC</a></li>--}}
{{--                        <li><a href="#" class="custom-font-1 disabled-link">GRANT MARC</a></li>--}}
{{--                        <li><a href="#" class="custom-font-1 disabled-link">WILL MARC</a></li>--}}
{{--                        <li><a href="#" class="custom-font-1 disabled-link">GLENN MARC</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.masterplan') }}">MASTERPLAN</a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.developer') }}">DEVELOPER</a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.partners') }}">PARTNERS</a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a class="custom-font-1 text-white" href="{{ route('frontend.contact_us') }}">CONTACT</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
<header class="header-v3">
    <!-- Header desktop -->
    <nav class="container-header-desktop">

        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop container">

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu left">
                        <li>
                            <a href="#" onclick="navigateSection('location')" class="text-white font-metropolis let-spa-2 txt-body">LOCATION</a>
                            {{--                            <ul class="sub-menu">--}}
                            {{--                                <li><a href="index.html">Homepage v1</a></li>--}}
                            {{--                                <li><a href="home-02.html">Homepage v2</a></li>--}}
                            {{--                                <li><a href="home-03.html">Homepage v3</a></li>--}}
                            {{--                            </ul>--}}
                        </li>
                        <li>
                            <a href="{{route('frontend.towerplans', ['tabname'=>'residence'])}}" @if(Route::currentRouteName() == 'frontend.towerplans') style="border-bottom: 1px solid #fff; padding-bottom: 10px;" @endif class="text-white font-metropolis let-spa-2 txt-body">TOWER PLANS</a>
                            {{--                            <ul class="sub-menu">--}}
                            {{--                                <li><a href="services-list.html">Services List</a></li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="#">Services Detail</a>--}}

                            {{--                                    <ul class="sub-menu">--}}
                            {{--                                        <li><a href="services-detail-01.html">Services Detail v1</a></li>--}}
                            {{--                                        <li><a href="services-detail-02.html">Services Detail v2</a></li>--}}
                            {{--                                        <li><a href="services-detail-03.html">Services Detail v3</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </li>
                    </ul>

                    <!-- Logo desktop -->
                    <a class="logo-v2" href="{{ route('home') }}"><img src="{{ asset('images/thesmith/thesmith-web-menu-logo_1.0.png') }}" alt="LOGO"></a>

                    <ul class="main-menu respon-sub-menu right">
                        <li>
                            <a href="{{route('frontend.facilities')}}" class="text-white font-metropolis let-spa-2 txt-body" @if(Route::currentRouteName() == 'frontend.facilities') style="border-bottom: 1px solid #fff; padding-bottom: 10px;" @endif>FACILITIES</a>
                            {{--                            <ul class="sub-menu">--}}
                            {{--                                <li><a href="news-grid.html">News Grid</a></li>--}}
                            {{--                                <li><a href="news-list.html">News List</a></li>--}}
                            {{--                                <li><a href="news-detail.html">News Detail</a></li>--}}
                            {{--                            </ul>--}}
                        </li>

                        {{--                        <li>--}}
                        {{--                            <a href="{{route('frontend.gallery')}}" class="text-white font-montserrat">GALLERY</a>--}}
                        {{--                        </li>--}}

                        <li>
                            <a href="{{ route('frontend.developer')}}" @if(Route::currentRouteName() == 'frontend.developer') style="border-bottom: 1px solid #fff; padding-bottom: 10px;" @endif class="text-white font-metropolis let-spa-2 txt-body">DEVELOPERS</a>
                            {{--                            <ul class="sub-menu">--}}
                            {{--                                <li><a href="projects-grid.html">Projects Grid</a></li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="#">Projects Detail</a>--}}

                            {{--                                    <ul class="sub-menu">--}}
                            {{--                                        <li><a href="projects-detail-01.html">Projects Detail v1</a></li>--}}
                            {{--                                        <li><a href="projects-detail-02.html">Projects Detail v2</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile ">
                <a href="{{ route('home') }}"><img src="{{ asset('images/thesmith/thesmith-web-menu-logo_1.0.png') }}" alt="LOGO" class="center-logo"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze pl-md-5" >
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
                <div class="pl-3 fs-18 text-white font-lato let-spa d-none d-md-block" >
                    <p class="let-spa-5 ">MENU</p>
                </div>
            </div>
            <div class="text-right d-none d-md-block" style="padding-right: 10%;">
                <span class="text-white font-lato fs-14 pr-3 let-spa-5">REACH US</span>
                <a href="http://wa.me/6287888688860">
                    <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-53.png') }}" style="width:25px;">
                </a>
                <a href="https://www.instagram.com/thesmithofficial_id/">
                    <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-55.png') }}" style="width:25px;">
                </a>
                <a href="https://www.youtube.com/channel/UCMtJaeyUqYNbgsBHmr112RA">
                    <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-56.png') }}" style="width:25px;">
                </a>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="main-menu left pb-5 text-right text-md-left" style="background-color: black;">
{{--                <li>--}}
{{--                    <a href="{{ route('home') }}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">HOME</a>--}}
{{--                </li>--}}

                <li>
                    <a href="{{route('frontend.concept')}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">THE CONCEPT</a>
                </li>

                <li>
                    <a href="{{route('frontend.location')}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">LOCATION</a>
                </li>

                <li>
                    <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">TOWER PLANS</a>
                </li>


                <li>
                    <a href="{{route('frontend.facilities')}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">FACILITIES</a>
                </li>

                {{--                <li>--}}
                {{--                    <a href="{{route('frontend.gallery')}}" class="text-white font-montserrat">Gallery</a>--}}
                {{--                </li>--}}

                <li>
                    <a href="{{ route('frontend.virtual')}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">VIRTUAL TOUR</a>
                </li>

                <li>
                    <a href="{{ route('frontend.developer')}}" class="text-white font-metropolis txt-header" style="letter-spacing: 2px;">DEVELOPER</a>
                </li>

                <li class="d-block d-md-none">
                    <a href="http://wa.me/6287888688860">
                        <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-53.png') }}" style="width:30px;">
                    </a>
                    <a href="https://www.instagram.com/thesmithofficial_id/">
                        <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-55.png') }}" style="width:30px;">
                    </a>
                    <a href="https://www.youtube.com/channel/UCMtJaeyUqYNbgsBHmr112RA">
                        <img class=" pl-1" src="{{ asset('images/thesmith/thesmith-web_2.0-56.png') }}" style="width:30px;">
                    </a>
                </li>

                {{--                <li>--}}
                {{--                    <a href="{{ route('frontend.contact_us')}}" class="text-white font-lato">Contact Us--}}
                {{--                        <img src="{{ asset('images/thescott/phone icon-36.png') }}" alt="LOGO">--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </nav>
</header>

<style></style>
