@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">


    <title>THE SMITH - FACILITIES</title>
@endsection

@section('content')

    {{--    <section class="bg-home">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row no-gutters padd-top50">--}}
    {{--                <div class="col-12 text-center">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="" id="facilities">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-dark text-center py-5">
                    <p class="txt-header-body font-gotham-book font-weight-bold let-spa-7">FACILITIES</p>
                    <p class="txt-subheader-2 font-lato let-spa-2">Experience Silicon Valley Amenities</p>
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
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                <div class="swiper-slide">
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-03.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                <div class="swiper-slide" >
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_2.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-04.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_2.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                <div class="swiper-slide">
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-05.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                <div class="swiper-slide">
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-office-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-06.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_4.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                {{--            <div class="swiper-slide">--}}
                {{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img">--}}
                {{--            </div>--}}
                <div class="swiper-slide">
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-business-lounge_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-07.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lounge_1.0.jpg') }}" alt="img" class="d-block d-md-none">
                </div>
                <div class="swiper-slide">
                    {{--                <img src="{{ asset('images/thesmith/facilities/facilities-coworking-space-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
                    <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-08.jpg') }}" alt="img" class="d-none d-md-block">
                    <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-meetingrooms_1.0.jpg') }}" alt="img" class="d-block d-md-none">
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
    <section  class="fac-slide">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-1"></div>
                <div class="col-md-8 col-10">
                    <div class="row text-center box-accor">
                        <div class="col-12">
                            <div class="swiper-container content-slider">
                                <div class="swiper-wrapper py-3">
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5 px-0">
                                                <p class="font-metropolis-bold">Swimming Pool</p>
                                                <p class="font-lato txt-body py-3 px-5">Live, Hustle, Create. Enjoy living in The Smith. May it be for sport, leisure, or any purposes.
                                                    A swimming pool with a view is at your doorstep for you to relish.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">Gym Studio</p>
                                                <p class="font-lato txt-body py-3 px-5">Stay vigorous to maximize your hustle. The Smith has a Gym Studio for any kind of exercise
                                                    that you need for tip-top fitness.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">1.400 Sqm Silicon Valley Facilities</p>
                                                <p class="font-lato txt-body py-3 px-5">Experience elegant Silicon Valley amenities within The Smith. Limitless opportunities
                                                    ready to be made.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">Meeting Rooms</p>
                                                <p class="font-lato txt-body py-3 px-5">Balance your life with utmost productivity by the convenience of having meeting rooms
                                                    steps away from your homes.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">Co-Working Space</p>
                                                <p class="font-lato txt-body py-3 px-5">Work with a view. Utilize the beautifully placed co-working space within The Smith. Equipped
                                                    with world-class features.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">Outdoor Plaza</p>
                                                <p class="font-lato txt-body py-3 px-5">Greeted with lavishness, then take delight in strolls, or get your fresh cups of coffee on the
                                                    outdoor plaza of The Smith.</p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="background-color: black;">
                                        <div class="row px-md-0">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 col-12 text-white text-center py-5 px-md-5">
                                                <p class="font-metropolis-bold">Double Road System</p>
                                                <p class="font-lato txt-body py-3 px-5">The Smith is the only mixed-use development in Alam Sutera that have both Slow Land and
                                                    a Fast Lane. Besides giving more privacy, the Slow Lane is adding the safety to commute
                                                    in or out of the building.</p>
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
                    <p class="txt-header-body font-lato let-spa-9">FLOOR PLAN</p>
                    <p class="txt-subheader-2 font-lato pb-3 pt-2 let-spa-2">Things to Luxuriate Within The Smith</p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section style="background-color: black;">
        <div class="container-fluid no-padding">
            <div class="row no-gutters bg-facilities"></div>
            <div class="row no-gutters">
                <div class="col-3"></div>
                <div class="col-6 bg-white text-center py-5" style="margin-top: -50px;">
                    {{--                    <div class="row no-gutters">--}}
                    {{--                        <div class="col-md-3"></div>--}}
                    {{--                        <div class="col-md-6 col-12 text-dark px-3 px-md-2">--}}
                    {{--                            <p class="font-metropolis-bold txt-subheader pb-3">Only 150 Meters Away</p>--}}
                    {{--                            <p class="txt-body font-lato ">--}}
                    {{--                                Located at the heart of CBD Alam Sutera, The Smith stands only 150 meters away--}}
                    {{--                                from the Exit Toll Gate of Alam Sutera. Providing ease for residents to commute within--}}
                    {{--                                and outside the city.--}}
                    {{--                            </p>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="col-md-3"></div>--}}
                    {{--                    </div>--}}
                    <div class="row">
                        <div class="col-12 text-dark text-center">
                            <div class="row">
                                <div class="col-md-2 col"></div>
                                <div class="col-md-8 col-12 pt-5">
                                    <p class="txt-subheader let-spa font-metropolis-bold">GROUND FLOOR | LOBBY</p>
                                    {{--                                                                    <div class="border-swiper-custom"></div>--}}
{{--                                    <p class="txt-body pt-3 font-lato d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.--}}
{{--                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities--}}
{{--                                        that boosts a balanced lifesyle experience.</p>--}}
{{--                                    <p class="txt-body pt-3 font-lato d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.--}}
{{--                                        Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities--}}
{{--                                        that boosts a balanced lifesyle experience.</p>--}}
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="py-5">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-10.png') }}" alt="img" class="w-100 d-none d-md-block">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                            </div>
                        </div>
                        <div class="col-12 text-dark text-center">
                            <div class="row">
                                <div class="col-md-2 col"></div>
                                <div class="col-md-8 col-12 pt-5">
                                    <p class="txt-subheader let-spa font-metropolis-bold">3<sup style="top:0px;font-size: 10px;">RD</sup> FLOOR | CO-WORKING SPACE</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="py-5">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-11.png') }}" alt="img" class="w-100 d-none d-md-block">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                            </div>
                        </div>
                        <div class="col-12 text-dark text-center">
                            <div class="row">
                                <div class="col-md-2 col"></div>
                                <div class="col-md-8 col-12 pt-5">
                                    <p class="txt-subheader let-spa font-metropolis-bold">F FLOOR | LEISURE</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="py-5">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-12.png') }}" alt="img" class="w-100 d-none d-md-block">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-13.png') }}" alt="img" class="w-100 d-none d-md-block">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                                <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>

{{--    <section class="swiper-container image-slider2">--}}
{{--        <div class="swiper-wrapper">--}}
{{--            --}}{{--            <div class="swiper-slide">--}}
{{--            --}}{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-floorplan_1.png') }}" alt="img" >--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <div class="swiper-slide">--}}
{{--            --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--            --}}{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            --}}{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-sky-pool_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Pool_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-pool_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_3.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_3.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide" >--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-grand-lobby_2.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_2.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_2.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-office-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lobby_4.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lobby_4.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            --}}{{--            <div class="swiper-slide">--}}
{{--            --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-apartment-lobby_1.jpg') }}" alt="img">--}}
{{--            --}}{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-business-lounge_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Lounge_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-lounge_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-coworking-space-lobby_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-MeetingRooms_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-meetingrooms_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--            <div class="swiper-slide">--}}
{{--                --}}{{--                <img src="{{ asset('images/thesmith/facilities/facilities-auditorium_1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/TheSmith-Auditorium_1.1.jpg') }}" alt="img" class="d-none d-md-block">--}}
{{--                <img src="{{ asset('images/thesmith/facilities/thesmith-mobile-auditorium_1.0.jpg') }}" alt="img" class="d-block d-md-none">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section style="background-color: black">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-2 col-1"></div>--}}
{{--                <div class="col-md-8 col-10">--}}
{{--                    <div class="text-center box-accor" >--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade show active" id="residence" role="tabpanel">--}}
{{--                                --}}{{--                                <a href="#facilities-accor" data-toggle="collapse" data-parent="accordion">--}}
{{--                                --}}{{--                                <span class=" font-lato text-dark">GRAND LOBBY--}}
{{--                                --}}{{--                                    &nbsp; <img--}}
{{--                                --}}{{--                                        src="{{ asset('images/thesmith/thesmith-web-scroll-arrow_1.0-1.png') }}"--}}
{{--                                --}}{{--                                        alt="IMG" style="width:20px;" class="img-fluid">--}}
{{--                                --}}{{--                                </span>--}}
{{--                                --}}{{--                                </a>--}}
{{--                                <div class="" id="facilities-accor">--}}
{{--                                    <div class="panel-body" style="z-index:9999999 !important;">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12">--}}
{{--                                                <!-- Swiper -->--}}
{{--                                                <div class="swiper-container content-slider2">--}}
{{--                                                    <div class="swiper-wrapper py-3">--}}
{{--                                                        <div class="swiper-slide"  id="fac-3">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">GRAND LOBBY</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-4">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">GRAND LOBBY</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-2">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">APARTMENT LOBBY</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-5">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">OFFICE LOBBY</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-7">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">BUSINESS LOUNGE</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-8">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">COWORKING SPACE LOBBY</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-9">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">AUDITORIUM</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="swiper-slide"  id="fac-10">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center pt-5">--}}
{{--                                                                    <p class=" font-lato  txt-body text-dark py-3">SKY POOL</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <!-- Add Pagination -->--}}
{{--                                                    <div class="swiper-pagination"></div>--}}
{{--                                                    <!-- Add Arrows -->--}}
{{--                                                    <div class="swiper-button-next swiper-button-black"></div>--}}
{{--                                                    <div class="swiper-button-prev swiper-button-black"></div>--}}
{{--                                                </div>--}}


{{--                                                <div class="swiper-container-content">--}}
{{--                                                    <div class="swiper-wrapper">--}}
{{--                                                        <div class="swiper-slide-content">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12 text-dark text-center">--}}
{{--                                                                    <div class="row">--}}
{{--                                                                        <div class="col-md-2 col"></div>--}}
{{--                                                                        <div class="col-md-8 col-12 pt-5">--}}
{{--                                                                            <p class="txt-subheader let-spa font-metropolis-bold">3<sup style="top:0px;font-size: 10px;">RD</sup> FLOOR FACILITES</p>--}}
{{--                                                                            --}}{{--                                                                    <div class="border-swiper-custom"></div>--}}
{{--                                                                            <p class="txt-body pt-3 font-lato d-none d-md-block">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.--}}
{{--                                                                                Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities--}}
{{--                                                                                that boosts a balanced lifesyle experience.</p>--}}
{{--                                                                            <p class="txt-body pt-3 font-lato d-block d-md-none px-5">The Smith stands as a home for millenials who seek limitless opportunities at the prosperous land of Alam Sutera.--}}
{{--                                                                                Relish an elegant home that smartly incorporates luxury and comfort, encircled with complete SOHO amenities--}}
{{--                                                                                that boosts a balanced lifesyle experience.</p>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col-md-2"></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="py-5">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-10.png') }}" alt="img" class="w-100 d-none d-md-block">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-11.png') }}" alt="img" class="w-100 d-none d-md-block">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/facilities/thesmith-mweb-facility-floor_1.0.jpg') }}" alt="img" class="w-100 d-block d-md-none">--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2 col-1"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



@endsection

@section('styles')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/swiper.css')}}"/>--}}
    <style>

        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #414042;
            border-color: #fff #fff #fff;
        }

        .border-swiper-custom{
            border-bottom: 1px solid black;
            width: 20%;
            padding-top: 10px;
            padding-bottom: 10px;
            display: flow-root inline;
            display: -webkit-inline-flex;
        }

        sup {
            vertical-align: super;
            font-size: 13px;
            top:-1.5px;

        }
        .no-padding{
            padding:0;
        }
        .bg-facilities{
            background-image: url('{{ asset('images/thesmith/facilities/thesmith-web-facilities_2.0-09.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 557px;
        }
        /*
        pop up css
        */
        .modal-open .modal {
            display: flex!important;
            align-items: center!important;
            z-index: 99999999;
        }
        .swiper-container-content {
            width: 100%;
        }
        .swiper-slide-content {
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

        /*swiper*/
        .swiper-container {
            width: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: inline;
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
            .txt-header-body{
                font-size:26px;
            }
        }

        @media (min-width: 768px) {
            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1369px) {

        }

    </style>
@endsection

@section('scripts')
    {{--        <script type="text/javascript" src="{{ asset('js/frontend/swiper.min.js') }}"></script>--}}
    <script>

        $( document ).ready(function() {
            let Url = window.location.href;
            let initialSlide = 0;
            if(Url.includes("#")){
                let splitUrl = Url.split("#");
                initialSlide = parseInt(splitUrl[1]) - 1;
            }
            var imageSwiper = new Swiper('.image-slider', {
                loop: true,
                // pagination: {
                //     el: '.swiper-pagination',
                //     type: 'fraction',
                // },
                slidesPerView: 1,
                setWrapperSize: true,
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });

            var swiper = new Swiper('.content-slider', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });
            imageSwiper.controller.control  = swiper;
            swiper.controller.control  = imageSwiper;

            var imageSwiper2 = new Swiper('.image-slider2', {
                loop: true,
                // pagination: {
                //     el: '.swiper-pagination',
                //     type: 'fraction',
                // },
                slidesPerView: 1,
                setWrapperSize: true,
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });

            var swiper2 = new Swiper('.content-slider2', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                initialSlide: initialSlide,
                observer: true,
                observeParents: true
            });
            imageSwiper2.controller.control  = swiper2;
            swiper2.controller.control  = imageSwiper2;
        });
        function navigateSection(section){
            var offsetTop = $('#' + section).offset().top;

            if (offsetTop) {
                $('html,body').animate({
                    scrollTop: offsetTop
                }, 1000);

                return false;
            }
        }

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
        }
    </script>
@endsection
