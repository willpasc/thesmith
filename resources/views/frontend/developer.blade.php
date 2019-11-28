@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - DEVELOPER</title>
@endsection


@section('content')
    <section class="bg-header-developer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div>
                    <p class="header-developer font-librecaslon">THE DEVELOPER</p>
                    </div>
                    <div class="py-5 my-5">
                        <img src="{{ asset('images/thescott/developer/trinitilandlogo.png') }}" alt="logo" class="logo-developer">
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-12">
                            <p class="text-white txt-body font-montserrat px-md-0 px-4">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                                hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero e.
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                    <div class="border-developer pt-5">
                        <img src="{{ asset('images/thescott/developer/ourproject.png') }}" alt="logo" class="img-ourproject">
                    </div>
                </div>
            </div>
            <div class="row no-gutters pb-md-0 pb-5">
                <div class="col-12 d-block d-md-none">
                    <img src="{{ asset('images/thescott/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 col-12 project-padds-1 text-md-left text-center">
                    <p class="pb-md-5 pb-3 header-project font-librecaslon font-italic">
                        Brooklyn<br/>
                        SOHO & Apartment
                    </p>
                    <p class="txt-body font-montserrat d-none d-md-block">
                        New York inspired, Brooklyn stands<br/>
                        gracefully in 2 towers & 900 units<br/>
                        developed by Waskita Karya & Triniti Group.<br/>
                        A masterpiece and the first mixed-use building in<br/>
                        Alam Sutera built in 2014 and finished in 2016.<br/>
                        More information are available at<br/>
                        www.brooklynalamsutera.com
                    </p>
                    <p class="txt-body font-montserrat d-block d-md-none px-4">
                        New York inspired, Brooklyn stands
                        gracefully in 2 towers & 900 units
                        developed by Waskita Karya & Triniti Group.
                        A masterpiece and the first mixed-use building in
                        Alam Sutera built in 2014 and finished in 2016.
                        More information are available at
                        www.brooklynalamsutera.com
                    </p>
                </div>
                <div class="col-md-7 d-none d-md-block">
                    <img src="{{ asset('images/thescott/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                </div>
            </div>
            <div class="row no-gutters pb-md-0 pb-5">
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-yukata.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 project-padds-1 text-md-left text-center">
                    <p class="pb-md-5 pb-3 header-project font-librecaslon font-italic">
                        Yukata Suites
                    </p>
                    <p class="txt-body font-montserrat d-none d-md-block">
                        Yukata Suites is the first Japanese Resort<br/>
                        Condominium in Alam Sutera presented by Waskita<br/>
                        Karya & Triniti Group. The premium facilities it offers<br/>
                        surely blow the mind; from Japanese hot spring (onsen),<br/>
                        smart home system, private lift and Zen Garden. Yukata<br/>
                        Suites has elected to be the best Apartment in Serpong<br/>
                        2015 according to Consumer Choice Award.<br/>
                        More information are available at<br/>
                        www.yukatasuites.com
                    </p>
                    <p class="txt-body font-montserrat d-block d-md-none px-4">
                        Yukata Suites is the first Japanese Resort
                        Condominium in Alam Sutera presented by Waskita
                        Karya & Triniti Group. The premium facilities it offers
                        surely blow the mind; from Japanese hot spring (onsen),
                        smart home system, private lift and Zen Garden. Yukata
                        Suites has elected to be the best Apartment in Serpong
                        2015 according to Consumer Choice Award.
                        More information are available at
                        www.yukatasuites.com
                    </p>
                </div>
            </div>
            <div class="row no-gutters pb-md-0 pb-5">
                <div class="col-md-7 d-block d-md-none">
                    <img src="{{ asset('images/thescott/developer/img-springwood.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 project-padds-1 text-md-left text-center">
                    <p class="pb-md-5 pb-3 header-project font-librecaslon font-italic">
                        Springwood Residence
                    </p>
                    <p class="txt-body font-montserrat d-none d-md-block">
                        When it comes to prestige,<br/>
                        Springwood Residence is the first<br/>
                        prestigious apartment in Jl Raya Serpong.<br/>
                        Consist of 1,400 units within only 1 minute from exit toll<br/>
                        Serpong, Mall Alam Sutera and Binus University,<br/>
                        Springwood Residence finish the construction in<br/>
                        2017. More information are available at<br/>
                        www.springwoodresidence.com
                    </p>
                    <p class="txt-body font-montserrat d-block d-md-none px-4">
                        When it comes to prestige,
                        Springwood Residence is the first
                        prestigious apartment in Jl Raya Serpong.
                        Consist of 1,400 units within only 1 minute from exit toll
                        Serpong, Mall Alam Sutera and Binus University,
                        Springwood Residence finish the construction in
                        2017. More information are available at
                        www.springwoodresidence.com
                    </p>
                </div>
                <div class="col-md-7 d-none d-md-block">
                    <img src="{{ asset('images/thescott/developer/img-springwood.png') }}" alt="img" class="img-project">
                </div>
            </div>
            <div class="row no-gutters pb-md-0 pb-5">
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-smith.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 project-padds-1 text-md-left text-center">
                    <p class="pb-md-5 pb-3 header-project font-librecaslon font-italic">
                        The Smith
                    </p>
                    <p class="txt-body font-montserrat d-none d-md-block">
                        The Smith is considered as the Silicon Valley of<br/>
                        Alam Sutera. Featuring the first<br/>
                        3.0 Small Office Home Office (SOHO) and the<br/>
                        most advance smart office with<br/>
                        Sillicon Valley facility. More information are<br/>
                        available at www.thesmith.co.id
                    </p>
                    <p class="txt-body font-montserrat d-block d-md-none px-4">
                        The Smith is considered as the Silicon Valley of
                        Alam Sutera. Featuring the first
                        3.0 Small Office Home Office (SOHO) and the
                        most advance smart office with
                        Sillicon Valley facility. More information are
                        available at www.thesmith.co.id
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">
        .logo-developer{
            width:150px;
            margin-top: -30px;
            margin-bottom:-30px;
        }
        .project-padds-1{

            padding-top: 1rem;

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
            margin-left: 27px;
        }
        .header-developer{
            font-size: 26px;
            color: grey;
            padding-top: 40px;
        }

        .bg-header-developer{
            background-color: #000000;
            height: 700px;
            width: auto;
        }

        @media (max-width: 576px) {
            .header-img{
                min-height: 150px;
            }
        }

        @media (min-width: 576px) {
            .project-padds-1{
                padding-left: 6rem !important;
                padding-top: 5rem;
                padding-right: 5rem !important;
            }
            .border-developer{
                border-top: 1px solid black;
                width: 85%;
                margin-top: 70px;
                margin-left: 120px;
            }
            .bg-header-developer{
                background-color: #000000;
                height: 600px;
                width: auto;
            }
            .logo-developer{
                width:inherit;
                margin-top: 0px;
            }
            .header-developer{
                font-size: 26px;
                color: grey;
                padding-top: 100px;
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
