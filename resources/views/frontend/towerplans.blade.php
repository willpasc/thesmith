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
                        <li class="nav-item col-md-4 col-12 p-0 tab-nav">
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabresidence}}" data-toggle="tab" href="#residence-tower" role="tab" id="tabResidence"  onclick="changetower(1)">RESIDENCE</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabsoho}}" data-toggle="tab" href="#soho-tower" role="tab" id="tabSoho" onclick="changetower(2)">SOHO</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
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
                <div class="col-12">
                    <div class="bg-tower bg-towerplans d-none d-mb-block" id=""></div>
                    <div class="bg-tower bg-towerplans-m d-block d-mb-none" id=""></div>
                </div>
            </div>
        </div>
    </section>

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
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Swiper -->
                                                <div id="residence-swiper" class="swiper-container">
                                                    <div class="swiper-wrapper py-3">
                                                        <div class="swiper-slide">
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE RESIDENCES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                        Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.
                                                                        Every unit is equipped with safety fittings, including an intercom that connects
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-a.png') }}" alt="img" class="img-tower">
                                                                    </div>
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-b.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-c.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="mb-5">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/studio.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="px-5 px-md-0">
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">BED ROOM</p>
                                                                            <p class="txt-body font-metropolis">Vitrase · Blackout Curtain · Bed Frame · Bed Head · Queen Size Mattress · 2 Pillows · Bed Sheet<br/>
                                                                                Bed Cover · 1 Night Case · 1 Table Lamp · Wallpaper · 1 Large Photo Frame<br/>
                                                                                1 Sliding Wardrobe with Mirror · 1 Set Flat Screen TV · Vynil Parquet
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">LIVING ROOM</p>
                                                                            <p class="txt-body font-metropolis">2 Seater Sofa · 1 Coffee Table · 1 Large Photo Frame · Carpet · Wallpaper · Telephone Set<br/>
                                                                                Dining Table · 2 Dining Chairs · Marble Floor
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">BATHROOM</p>
                                                                            <p class="txt-body font-metropolis">Light & Large Mirror · Toiletries Rack · 2 Large Towels · 2 Small Towels · Floor Carpet<br/>
                                                                                Soap Dispenser · Marble Floor · Sanitair Kohler & Grohe
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">KITCHEN</p>
                                                                            <p class="txt-body font-metropolis">Premium Kitchen Set · Cooker Hood · Cooker Hob · Glassware<br/>
                                                                                Cutlery · Utensils
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">ELECTRONICS</p>
                                                                            <p class="txt-body font-metropolis">Refrigerator Mini Bar · AC
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">FLOOR FINISHING</p>
                                                                            <p class="txt-body font-metropolis">Living Room: Marble Floor<br/>
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE RESIDENCES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                        Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.
                                                                        Every unit is equipped with safety fittings, including an intercom that connects
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-a.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="">
                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-b.png') }}" alt="img" class="img-tower">
                                                                    </div>
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-c.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="mb-5">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/studio.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="px-5 px-md-0">
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">BED ROOM</p>
                                                                            <p class="txt-body font-metropolis">Vitrase · Blackout Curtain · Bed Frame · Bed Head · Queen Size Mattress · 2 Pillows · Bed Sheet<br/>
                                                                                Bed Cover · 1 Night Case · 1 Table Lamp · Wallpaper · 1 Large Photo Frame<br/>
                                                                                1 Sliding Wardrobe with Mirror · 1 Set Flat Screen TV · Vynil Parquet
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">LIVING ROOM</p>
                                                                            <p class="txt-body font-metropolis">2 Seater Sofa · 1 Coffee Table · 1 Large Photo Frame · Carpet · Wallpaper · Telephone Set<br/>
                                                                                Dining Table · 2 Dining Chairs · Marble Floor
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">BATHROOM</p>
                                                                            <p class="txt-body font-metropolis">Light & Large Mirror · Toiletries Rack · 2 Large Towels · 2 Small Towels · Floor Carpet<br/>
                                                                                Soap Dispenser · Marble Floor · Sanitair Kohler & Grohe
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">KITCHEN</p>
                                                                            <p class="txt-body font-metropolis">Premium Kitchen Set · Cooker Hood · Cooker Hob · Glassware<br/>
                                                                                Cutlery · Utensils
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">ELECTRONICS</p>
                                                                            <p class="txt-body font-metropolis">Refrigerator Mini Bar · AC
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">FLOOR FINISHING</p>
                                                                            <p class="txt-body font-metropolis">Living Room: Marble Floor<br/>
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE RESIDENCES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                        Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.
                                                                        Every unit is equipped with safety fittings, including an intercom that connects
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-a.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-b.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="">
                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-c.png') }}" alt="img" class="img-tower">
                                                                    </div>
{{--                                                                    <div class="mb-5">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/studio.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="px-5 px-md-0">
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">BED ROOM</p>
                                                                            <p class="txt-body font-metropolis">Vitrase · Blackout Curtain · Bed Frame · Bed Head · Queen Size Mattress · 2 Pillows · Bed Sheet<br/>
                                                                                Bed Cover · 1 Night Case · 1 Table Lamp · Wallpaper · 1 Large Photo Frame<br/>
                                                                                1 Sliding Wardrobe with Mirror · 1 Set Flat Screen TV · Vynil Parquet
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">LIVING ROOM</p>
                                                                            <p class="txt-body font-metropolis">2 Seater Sofa · 1 Coffee Table · 1 Large Photo Frame · Carpet · Wallpaper · Telephone Set<br/>
                                                                                Dining Table · 2 Dining Chairs · Marble Floor
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">BATHROOM</p>
                                                                            <p class="txt-body font-metropolis">Light & Large Mirror · Toiletries Rack · 2 Large Towels · 2 Small Towels · Floor Carpet<br/>
                                                                                Soap Dispenser · Marble Floor · Sanitair Kohler & Grohe
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">KITCHEN</p>
                                                                            <p class="txt-body font-metropolis">Premium Kitchen Set · Cooker Hood · Cooker Hob · Glassware<br/>
                                                                                Cutlery · Utensils
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">ELECTRONICS</p>
                                                                            <p class="txt-body font-metropolis">Refrigerator Mini Bar · AC
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">FLOOR FINISHING</p>
                                                                            <p class="txt-body font-metropolis">Living Room: Marble Floor<br/>
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
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE RESIDENCES</p>
                                                                    <div class="border-swiper-custom"></div>
                                                                    <p class="txt-body pt-3 font-metropolis d-none d-md-block">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators<br/>
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.<br/>
                                                                        Every unit is equipped with safety fittings, including an intercom that connects<br/>
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
                                                                    <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Crafted with a thoughtful stroke of luxury and comfort, The Smith invents a home perfect for innovators
                                                                        with interiors installed smartly, together with ample ventilations that shines every room.
                                                                        Every unit is equipped with safety fittings, including an intercom that connects
                                                                        directly to the safety officers, ensuring needs are attended promptly.
                                                                    </p>
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-a.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-b.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="">--}}
{{--                                                                        <img src="{{ asset('images/thesmith/tower/onebedroom-c.png') }}" alt="img" class="img-tower">--}}
{{--                                                                    </div>--}}
                                                                    <div class="mb-5">
                                                                        <img src="{{ asset('images/thesmith/tower/studio.png') }}" alt="img" class="img-tower">
                                                                    </div>
                                                                    <div class="px-5 px-md-0">
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">BED ROOM</p>
                                                                            <p class="txt-body font-metropolis">Vitrase · Blackout Curtain · Bed Frame · Bed Head · Queen Size Mattress · 2 Pillows · Bed Sheet<br/>
                                                                                Bed Cover · 1 Night Case · 1 Table Lamp · Wallpaper · 1 Large Photo Frame<br/>
                                                                                1 Sliding Wardrobe with Mirror · 1 Set Flat Screen TV · Vynil Parquet
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">LIVING ROOM</p>
                                                                            <p class="txt-body font-metropolis">2 Seater Sofa · 1 Coffee Table · 1 Large Photo Frame · Carpet · Wallpaper · Telephone Set<br/>
                                                                                Dining Table · 2 Dining Chairs · Marble Floor
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">BATHROOM</p>
                                                                            <p class="txt-body font-metropolis">Light & Large Mirror · Toiletries Rack · 2 Large Towels · 2 Small Towels · Floor Carpet<br/>
                                                                                Soap Dispenser · Marble Floor · Sanitair Kohler & Grohe
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">KITCHEN</p>
                                                                            <p class="txt-body font-metropolis">Premium Kitchen Set · Cooker Hood · Cooker Hob · Glassware<br/>
                                                                                Cutlery · Utensils
                                                                            </p>
                                                                        </div>
                                                                        <div class=" pb-5">
                                                                            <p class="pb-1 font-lato">ELECTRONICS</p>
                                                                            <p class="txt-body font-metropolis">Refrigerator Mini Bar · AC
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <p class="txt-header-body font-lato let-spa-2">FURNISHINGS INCLUDED</p>
                                                                            <div class="border-swiper-custom"></div>
                                                                        </div>
                                                                        <div class="pt-4 pb-5">
                                                                            <p class="pb-1 font-lato">FLOOR FINISHING</p>
                                                                            <p class="txt-body font-metropolis">Living Room: Marble Floor<br/>
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
{{--                                                        <div class="swiper-slide"></div>--}}


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
                                                        <p class="txt-header-body font-lato-bold let-spa-5">SOHO UNITS</p>
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
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5">
                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">TOWER PLANS</p>
                                                        <div class="text-center">
                                                            <img src="{{ asset('images/thesmith/tower/TheSmith-Web_2.0-38.png') }}" alt="img" class="img-soho">
                                                        </div>
                                                    </div>
                                                </div>
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
                                                            <li class="nav-item col-md-2 col-12 p-0 tab-nav">
                                                                <a class="nav-link font-lato let-spa-2 active" data-toggle="tab" href="#sohoa" role="tab" id="tabSohoa"  onclick="changeDetailTower(1)">SOHO A</a>
                                                            </li>

                                                            <li class="nav-item col-md-2 p-0 tab-nav">
                                                                <a class="nav-link  font-lato let-spa-2 " data-toggle="tab" href="#sohob" role="tab" id="tabSohob" onclick="changeDetailTower(2)">SOHO B</a>
                                                            </li>

                                                            <li class="nav-item col-md-2 p-0 tab-nav">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohoc" role="tab" id="tabSohoc" onclick="changeDetailTower(3)">SOHO C</a>
                                                            </li>
                                                            <li class="nav-item col-md-2 p-0 tab-nav">
                                                                <a class="nav-link font-lato let-spa-2" data-toggle="tab" href="#sohod" role="tab" id="tabSohod" onclick="changeDetailTower(4)">SOHO D</a>
                                                            </li>
                                                            <li class="nav-item col-md-2 p-0 tab-nav">
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-08.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohob" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-09.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohoc" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-13.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohod" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-14.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="sohoe" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-15.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="border-swiper-custom-specification" styl="padding-top: 25px"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">FLOOR TO FLOOR</div>
                                                            <div class="col-7 txt-body font-metropolis">600 cm</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">FLOOR FINISHING</div>
                                                            <div class="col-2 txt-body font-metropolis">Living Room</div>
                                                            <div class="col-5 txt-body font-metropolis">: Homogenous Tile<br>&nbsp; Double Loaded 60x60</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body font-metropolis">Mezzanine</div>
                                                            <div class="col-5 txt-body font-metropolis">: Laminated Parquette Floor</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body font-metropolis">Bathroom</div>
                                                            <div class="col-5 txt-body font-metropolis">: Homogenous Tile Double Loaded</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">WALL FINISHING</div>
                                                            <div class="col-2 txt-body font-metropolis">General Wall</div>
                                                            <div class="col-5 txt-body font-metropolis">: Lightweight Concrete Painted Finish</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body font-metropolis">Bathroom Wall</div>
                                                            <div class="col-4 txt-body font-metropolis">: Homogenous Tile Double Loaded</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">CEILING</div>
                                                            <div class="col-7 txt-body font-metropolis">Gypsum Board Painted Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">DOOR</div>
                                                            <div class="col-7 txt-body font-metropolis">Engineering Door</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">PANTRY</div>
                                                            <div class="col-7 txt-body font-metropolis">Marble Top Table</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">SANITARY</div>
                                                            <div class="col-7 txt-body font-metropolis">Ex. Kohler / equal</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">ELECTRICITY</div>
                                                            <div class="col-7 txt-body font-metropolis">4400 Watt</div>
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
                                                        <p class="txt-header-body font-lato-bold let-spa-5">OFFICE UNITS</p>
                                                        <p class="txt-body pt-4 font-metropolis d-none d-md-block">Supported by Go-Work, this dedicated 1.300m2 space allows residents to innovate and establish
                                                            startup offices through renting private spaces or hot desks. Equipped with spacious business
                                                            centers, premium event spaces, trained on-site staffs, and in-house cleaning facilities; it invents
                                                            a hassle-free venture as initiators craft their opportunities.
                                                        </p>
                                                        <p class="txt-body pt-3 font-metropolis d-block d-md-none px-5">Supported by Go-Work, this dedicated 1.300m2 space allows residents to innovate and establish
                                                            startup offices through renting private spaces or hot desks. Equipped with spacious business
                                                            centers, premium event spaces, trained on-site staffs, and in-house cleaning facilities; it invents
                                                            a hassle-free venture as initiators craft their opportunities.
                                                        </p>
                                                        <br>
                                                        <a href="#" class="txt-body font-lato-light text-dark text-center" style="border: 1px solid black;padding:5px 20px;margin:10px">Book a Unit</a>
                                                    </div>
                                                </div>
                                                <div class="border-swiper-custom"></div>
                                                <div class="row">
                                                    <div class="col-12 text-dark text-center pt-5">
                                                        <p class="txt-header-body font-metropolis-bold let-spa-5">TOWER PLANS</p>
                                                        <div class="text-center">
                                                            <img src="{{ asset('images/thesmith/tower/TheSmith-Web_2.0-40.png') }}" alt="img" class="img-soho">
                                                        </div>
                                                    </div>
                                                </div>
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
                                                            <li class="nav-item col-md-4 col-12 p-0 tab-nav">
                                                                <a class="nav-link font-lato let-spa-2 active" data-toggle="tab" href="#officea" role="tab" id="tabOfficea">OFFICE A</a>
                                                            </li>

                                                            <li class="nav-item col-md-4 p-0 tab-nav">
                                                                <a class="nav-link  font-lato let-spa-2 " data-toggle="tab" href="#officeb" role="tab" id="tabOfficeb">OFFICE B</a>
                                                            </li>

                                                            <li class="nav-item col-md-4 p-0 tab-nav">
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-16.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="officeb" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-17.jpg') }}" alt="img" class="img-soho">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="officec" role="tabpanel">
                                                                <div class="panel-body" style="z-index:9999999 !important;">
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-18.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">FLOOR TO FLOOR</div>
                                                            <div class="col-7 txt-body font-metropolis">380 cm</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">FLOOR FINISHING</div>
                                                            <div class="col-7 txt-body font-metropolis">Homogenous Tile Double Loaded 60x60</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">WALL FINISHING</div>
                                                            <div class="col-7 txt-body font-metropolis">Lightweight Concrete Painted Finish</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">CEILING</div>
                                                            <div class="col-7 txt-body font-metropolis">Gypsum Board Painted Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">DOOR</div>
                                                            <div class="col-7 txt-body font-metropolis">Bare Finishing</div>
                                                        </div>
                                                        <div class="border-swiper-custom-specification"></div>
                                                        <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-2 txt-body-f11 font-metropolis-bold">ELECTRICITY</div>
                                                            <div class="col-7 txt-body font-metropolis">4400 Watt</div>
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


@endsection

@section('styles')
    <style>
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
        background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-towerplans-img_1.0.jpg') }}');
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
            background-image: url('{{ asset('images/thesmith/home/thesmith-web-home-towerplans-img_1.0.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 540px;
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

    @media (min-width: 992px) {
    }

    @media (min-width: 1369px) {
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
                initialSlide: initialSlide,
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
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-residence_1.jpg') }}");
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/tower/thesmith-mobile-units-residence_1.0.jpg') }}");
            }

            if (typeid === 2) {
                $('#residence-tower').hide();
                $('#soho-tower').show();
                $('#office-tower').hide();
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-soho_1.jpg') }}");
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/tower/thesmith-mobile-units-soho_1.0.jpg') }}");
            }
            if (typeid === 3) {
                $('#soho-tower').hide();
                $('#residence-tower').hide();
                $('#office-tower').show();
                $('.bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-office_1.jpg') }}");
                $('.bg-towerplans-m').css("background-image", "url('{{ asset('images/thesmith/tower/thesmith-mobile-units-office_1.0.jpg') }}");
            }
        }
    </script>
@endsection


