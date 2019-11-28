@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - UNITS</title>
@endsection


@section('content')
    <section class="bg-header-units">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <p class="header-developer pb-5 text-white font-librecaslon">UNIT PLANS</p>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                        <P class="txt-body font-montserrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ea et eum, excepturi, harum ipsum laborum magni non perspiciatis, quisquam quo soluta sunt vitae? Aliquam architecto assumenda eaque exercitationem incidunt maiores nobis rem veritatis. Vel?</P>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row pb-3 mb-5">
                <div class="col-12">
                    <p class="text-dark header-units border-units font-librecaslon">Grand Studio</p>
                    <div class="row font-montserrat txt-body">
                        <div class="col-md-2 col-12">
                            <div class="d-block d-md-none">
                            <p>Semi Gross : 32.93 Sqm<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Bathroom</span></p>
                            </div>
                            </div>
                            <div class="d-none d-md-block marlefmin">
                                <p>Semi Gross : 32.93 Sqm</p>
                            </div>
                        <div class="col-md-2 d-none d-md-block">
                            <p class="text-dark text-center">1 Bathroom</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/thescott/units/grandstudio-denah.png') }}" alt="img" class="img-grandstudio-denah">
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/thescott/units/grandstudio-image.png') }}" alt="img" class="w-100">
                </div>
            </div>
            <div class="row pb-3 mb-5">
                <div class="col-12">
                    <p class="text-dark header-units border-units font-librecaslon">1 Bedroom</p>
                    <div class="row font-montserrat txt-body">
                        <div class="col-md-2 col-12">
                            <div class="d-block d-md-none">
                                <p>Semi Gross : 32.93 Sqm<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Bathroom</span></p>
                            </div>
                        </div>
                        <div class="d-none d-md-block marlefmin">
                            <p>Semi Gross : 32.93 Sqm</p>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <p class="text-dark text-center">1 Bathroom</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('images/thescott/units/bedroom-image.png') }}" alt="img" class="w-100 bedroom-1">
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/thescott/units/bedroom-denah-2.png') }}" alt="img" class="bedroom-denah">
                </div>
            </div>
            <div class="row pb-3 mb-5">
                <div class="col-12">
                    <p class="text-dark header-units border-units font-librecaslon">2 Bedroom</p>
                    <div class="row font-montserrat txt-body">
                        <div class="col-md-2 col-12">
                            <div class="d-block d-md-none">
                                <p>Semi Gross : 54.88 Sqm<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 Bathroom</span></p>
                            </div>
                        </div>
                        <div class="d-none d-md-block marlefmin">
                            <p>Semi Gross : 54.88 Sqm</p>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <p class="text-dark text-center">2 Bathroom</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/thescott/units/2bedroom-denah-2.png') }}" alt="img" class="img-2bedroom-denah">
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/thescott/units/2bedroom-image.png') }}" alt="img" class="w-100">
                </div>
            </div>
            <div class="row pb-3 mb-5">
                <div class="col-12">
                    <p class="text-dark header-units border-units font-librecaslon">2 Bedroom Corner</p>
                    <div class="row font-montserrat txt-body">
                        <div class="col-md-2 col-12">
                            <div class="d-block d-md-none">
                                <p>Semi Gross : 36.28 Sqm<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 Bathroom</span></p>
                            </div>
                        </div>
                        <div class="d-none d-md-block marlefmin">
                            <p>Semi Gross : 36.28 Sqm</p>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <p class="text-dark text-center">2 Bathroom</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('images/thescott/units/2bedroomcorner-image.png') }}" alt="img" class="w-100 bedroomcorner">
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/thescott/units/2bedroomcorner-denah.png') }}" alt="img" class="img-2bedroomcorner-denah">
                </div>
            </div>
            <div class="row pb-3 mb-5">
                <div class="col-12">
                    <p class="text-dark header-units border-units font-librecaslon">3 Bedroom</p>
                    <div class="row font-montserrat txt-body">
                        <div class="col-md-2 col-12">
                            <div class="d-block d-md-none">
                                <p>Semi Gross : 64 Sqm<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 Bathroom</span></p>
                            </div>
                        </div>
                        <div class="d-none d-md-block marlefmin">
                            <p>Semi Gross : 64 Sqm</p>
                        </div>
                        <div class="col-md-2 d-none d-md-block">
                            <p class="text-dark text-center">2 Bathroom</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/thescott/units/3bedroom-denah.png') }}" alt="img" class="img-3bedroom-denah">
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('images/thescott/units/3bedroom-image.png') }}" alt="img" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="header-spesifications text-center pb-5 font-librecaslon">SPECIFICATIONS</p>
                    <p class=" pb-4 font-librecaslon"style="font-style: italic;">Finishing & Material Specifications</p>
                </div>
            </div>
            <div class="row pb-4 font-montserrat txt-body">
                <div class="col-md-3 col-5" style="font-weight: bold;">
                    <p class="pb-md-2 livingroom-padds">Living Room & Dining Room</p>
                    <p class="pb-md-2 masterroom-padds">Master Room</p>
                    <p class="pb-md-2 bedroom-padds">Bed Room</p>
                    <p class="pb-md-2 bathroom-padds">Bathroom</p>
                </div>
                <div class="col-md-9 col-7">
                    <p class="pb-md-2 txt-livingroom">Homogenous tile floor, plaster paint wall, painted gypsum board ceilling</p>
                    <p class="pb-md-2 txt-livingroom">Laminate Parquet flooring, plaster paint wall, painted gypsum board ceilling</p>
                    <p class="pb-md-2 txt-livingroom">Homogenous tile floor, plaster paint wall, painted gypsum board ceilling</p>
                    <p class="pb-md-2 txt-livingroom">Homogenous tile floor, Homogenous tile wall, painted gypsum board ceilling</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 font-librecaslon">
                <p class=" pb-4"style="font-style: italic;">General Spesifications</p>
                </div>
            </div>
            <div class="row pb-4 font-montserrat txt-body">
                <div class="col-md-3 col-5" style="font-weight: bold;">
                    <p class="pb-md-2 power-padds">Power</p>
                    <p class="pb-md-2 internet-padds">Internet, Telephone & Cable</p>
                    <p class="pb-md-2 air-padds">Air Conditioning</p>
                    <p class="pb-md-2 water-padds">Water Heater</p>
                    <p class="pb-md-2 sanitary-padds">Sanitary Ware</p>
                    <p class="pb-md-2 kitchen-padds">Kitchen</p>
                    <p class="pb-md-2 door-padds">Door & Windows</p>
                </div>
                <div class="col-md-9 col-7">
                    <p class="pb-md-2 txt-power">3500 VA (STUDIO) ; 4.400 VA (1 BR) ; 5.500 VA (2 BR) ; 7.700 VA (3 BR)</p>
                    <p class="pb-md-2 txt-power">Installation only 1 line (studio & 1 BR); for other type in living and master bedroom</p>
                    <p class="pb-md-2 txt-power">Refrigerant Pipe, drain pipe & power</p>
                    <p class="pb-md-2 txt-power">Water and electrical point only</p>
                    <p class="pb-md-2 txt-power">BATHROOM (ex TOTO or equivalent)</p>
                    <p class="pb-md-2 txt-power">Single bowl - stainless steel sink, engineered marble table top</p>
                    <p class="pb-md-2 txt-power">Main Door : Solid frame, engineered wooden door<br/>
                        Bedroom Door : Solid frame, honeycomb wooden door<br/>
                        Windows : Powder coated alumunium frame with tinted glass</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <style type="text/css">
        .kitchen-padds{
            padding-bottom:63px;
        }
        .sanitary-padds{
            padding-bottom:45px;
        }
        .water-padds{
            padding-bottom:45px;
        }
        .air-padds{
            padding-bottom:45px;
        }
        .internet-padds{
            padding-bottom:41px;
        }
        .power-padds{
            padding-bottom:68px;
        }
        .txt-power{
            padding-bottom:20px;
        }
        .txt-livingroom{
            padding-bottom:15px;
        }
        .livingroom-padds{
            padding-bottom:38px;
        }
        .masterroom-padds{
            padding-bottom:63px;
        }
        .bedroom-padds{
            padding-bottom: 61px;
        }
        .bedroom-1{
            margin-top:-50px;
        }
        .bedroomcorner{
            margin-top:-50px;
        }
        .bedroom-denah{
            width: 50%;
        }
        .header-spesifications{
            padding-top:10%;
            font-size: 20px;
        }
        .img-3bedroom-denah{
            width: 70%;
        }
        .img-2bedroomcorner-denah{
            width:70%;
        }
        .img-2bedroom-denah{
            width:63%;
            margin-top: -50px;
        }
        .img-grandstudio-denah{
            width:100%;
            margin-top: -50px;
        }
        .border-units{
            border-bottom: 1px solid black;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .project-padds-1{
            padding-left: 6rem !important;
            padding-top: 5rem;
            padding-right: 5rem !important;
        }
        .container-fluid{
            padding:0px;
        }
        .header-project{
            font-size:20px;
        }
        .img-project{
            width:100%;
            height:auto;
        }
        .img-ourproject{
            margin-top: -114px;
        }
        .border-developer{
            border-top: 1px solid black;
            width: 85%;
            margin-top: 70px;
            margin-left: 120px;
        }
        .header-developer{
            padding-top:13%;
            font-size: 20px;
        }
        .header-units{
            font-size: 20px;
            padding-top:100px;
        }

        .bg-header-units{
            background-image: url('{{ asset('images/thescott/units/bg-units.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: auto;
            height: 350px;
        }
        @media (min-width: 576px) {

            .header-spesifications{
                padding-top:10%;
                font-size: 26px;
            }

            bedroom-1{
                margin-top:0px;
            }

            .marlefmin{
                margin-left: -180px;
            }

            .bg-header-units {
                background-image: url('{{ asset('images/thescott/units/bg-units.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: auto;
                height: 532px;
            }
            .header-developer{
                padding-top:20%;
                font-size: 26px;
            }
            .header-units{
                font-size: 26px;
                padding-top:100px;
            }
            .img-grandstudio-denah{
                width:400px;
                margin-top:0px;
            }
            .bedroom-denah{
                width: 226px;
                margin-top:0px;
            }
            .img-2bedroom-denah{
                width:285px;
                margin-top:0px;
            }
            .bedroomcorner{
                margin-top:0px;
            }
            .img-2bedroomcorner-denah{
                width:400px;
            }
            .img-3bedroom-denah{
                width: 350px;
            }
        }

        @media (max-width: 576px) {
            .header-img{
                min-height: 150px;
            }
        }

        @media (min-width: 768px) {
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .header-img{
                min-height: 300px;
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .header-img{
                min-height: 400px;
                width: 100%;
            }
        }

        .bg-img3 {
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
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
    </script>
@endsection
