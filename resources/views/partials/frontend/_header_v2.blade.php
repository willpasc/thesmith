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
                            <a href="#" class="text-white font-montserrat">THE IDEA</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="index.html">Homepage v1</a></li>--}}
{{--                                <li><a href="home-02.html">Homepage v2</a></li>--}}
{{--                                <li><a href="home-03.html">Homepage v3</a></li>--}}
{{--                            </ul>--}}
                        </li>

                        <li>
                            <a href="{{ route('frontend.gallery' )}}" class="text-white font-montserrat">GALLERY</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.units')}}" class="text-white font-montserrat">UNITS</a>
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
                    <a class="logo-v2" href="{{ route('home') }}"><img src="{{ asset('images/thescott/home/web-cekot-preview-3-17.png') }}" alt="LOGO"></a>

                    <ul class="main-menu respon-sub-menu right">
                        <li>
                            <a href="{{route('frontend.facilities')}}" class="text-white font-montserrat">FACILITIES</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="news-grid.html">News Grid</a></li>--}}
{{--                                <li><a href="news-list.html">News List</a></li>--}}
{{--                                <li><a href="news-detail.html">News Detail</a></li>--}}
{{--                            </ul>--}}
                        </li>

                        <li>
                            <a href="{{ route('frontend.developer')}}" class="text-white font-montserrat">DEVELOPER</a>
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

                        <li>
                            <a href="#" class="text-white font-montserrat">CONTACT</a>
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
            <div class="logo-mobile">
                <a href="{{ route('home') }}"><img src="{{ asset('images/thescott/home/web-cekot-preview-3-17.png') }}" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="top-bar-m p-l-20 p-tb-8">
                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                        <span>379 5Th Ave New York, Nyc 10018</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                        <span>(+1) 96 716 6879</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</span>
                        <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-google-plus"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage v1</a></li>
                        <li><a href="home-02.html">Homepage v2</a></li>
                        <li><a href="home-03.html">Homepage v3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="about.html">About Us</a>
                </li>

                <li>
                    <a href="services-list.html">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services-list.html">Services List</a></li>
                        <li>
                            <a href="#">Services Detail</a>

                            <ul class="sub-menu">
                                <li><a href="services-detail-01.html">Services Detail v1</a></li>
                                <li><a href="services-detail-02.html">Services Detail v2</a></li>
                                <li><a href="services-detail-03.html">Services Detail v3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="news-grid.html">News</a>
                    <ul class="sub-menu">
                        <li><a href="news-grid.html">News Grid</a></li>
                        <li><a href="news-list.html">News List</a></li>
                        <li><a href="news-detail.html">News Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="projects-grid.html">Projects</a>
                    <ul class="sub-menu">
                        <li><a href="projects-grid.html">Projects Grid</a></li>
                        <li>
                            <a href="#">Projects Detail</a>

                            <ul class="sub-menu">
                                <li><a href="projects-detail-01.html">Projects Detail v1</a></li>
                                <li><a href="projects-detail-02.html">Projects Detail v2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
