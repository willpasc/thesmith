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
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabresidence}}" data-toggle="tab" href="#residence-tower" role="tab" id="tabResidence"  onclick="changetower(1)">RESIDENCE UNIT</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
                            <a class="nav-link text-white font-lato let-spa-2 {{$tabsoho}}" data-toggle="tab" href="#soho-tower" role="tab" id="tabSoho" onclick="changetower(2)">SOHO UNITS</a>
                        </li>

                        <li class="nav-item col-md-4 p-0 tab-nav">
                            <a class="nav-link text-white font-lato let-spa-2 {{$taboffice}}" data-toggle="tab" href="#office-tower" role="tab" id="tabOffice" onclick="changetower(3)">OFFICE UNITS</a>
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
                    <div class="bg-tower" id="bg-towerplans"></div>
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
                                                <!-- Swiper -->
                                                <div id="soho-swiper" class="swiper-container">
                                                    <div class="swiper-wrapper py-3">
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-08.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-09.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-10.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-11.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-12.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-13.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-14.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE SOHO</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-15.jpg') }}" alt="img" class="img-soho">
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
                                                <!-- Swiper -->
                                                <div id="office-swiper" class="swiper-container">
                                                    <div class="swiper-wrapper py-3">
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE OFFICE</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-16.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE OFFICE</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-17.jpg') }}" alt="img" class="img-soho">
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
                                                        <div class="swiper-slide" >
                                                            <div class="row">
                                                                <div class="col-12 text-dark text-center pt-5">
                                                                    <p class="txt-header-body font-metropolis let-spa-5">THE OFFICE</p>
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
                                                                    <div class="text-center">
                                                                        <img src="{{ asset('images/thesmith/tower/thesmith-web-towerplans_1-18.jpg') }}" alt="img" class="img-soho">
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
    height: 165px;
    }
    .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #414042;
        border-color: #fff #fff #fff;
        border-radius:0;
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
    width:100px;
    padding-top: 10px;
    padding-bottom: 10px;
        margin-left: 32%;
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
            width:100px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 42%;
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
                $('#bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-residence_1.jpg') }}");
            }

            if (typeid === 2) {
                $('#residence-tower').hide();
                $('#soho-tower').show();
                $('#office-tower').hide();
                $('#bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-soho_1.jpg') }}");
            }
            if (typeid === 3) {
                $('#soho-tower').hide();
                $('#residence-tower').hide();
                $('#office-tower').show();
                $('#bg-towerplans').css("background-image", "url('{{ asset('images/thesmith/tower/tower-office_1.jpg') }}");
            }
        }
    </script>
@endsection


