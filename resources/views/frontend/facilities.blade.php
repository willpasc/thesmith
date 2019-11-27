@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - FACILITIES</title>
@endsection


@section('content')

    <section>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 text-center">
                    <div class="border-developer py-5">
                        <img src="{{ asset('images/thescott/facilities/keyfeatures.png') }}" alt="logo" class="img-ourproject">
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-5 project-padds-1">
                    <p class="pb-5 header-project font-librecaslon">
                        Brooklyn<br/>
                        SOHO & Apartment
                    </p>
                    <p class="txt-body font-montserrat">
                        New York inspired, Brooklyn stands<br/>
                        gracefully in 2 towers & 900 units<br/>
                        developed by Waskita Karya & Triniti Group.<br/>
                        A masterpiece and the first mixed-use building in<br/>
                        Alam Sutera built in 2014 and finished in 2016.<br/>
                        More information are available at<br/>
                        www.brooklynalamsutera.com
                    </p>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-brooklyn.png') }}" alt="img" class="img-project">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-yukata.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 project-padds-1">
                    <p class="pb-5 header-project font-librecaslon">
                        Yukata Suites
                    </p>
                    <p class="txt-body font-montserrat">
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
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-5 project-padds-1">
                    <p class="pb-5 header-project font-librecaslon">
                        Springwood Residence
                    </p>
                    <p class="txt-body font-montserrat">
                        When it comes to prestige,<br/>
                        Springwood Residence is the first<br/>
                        prestigious apartment in Jl Raya Serpong.<br/>
                        Consist of 1,400 units within only 1 minute from exit toll<br/>
                        Serpong, Mall Alam Sutera and Binus University,<br/>
                        Springwood Residence finish the construction in<br/>
                        2017. More information are available at<br/>
                        www.springwoodresidence.com
                    </p>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-springwood.png') }}" alt="img" class="img-project">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-7">
                    <img src="{{ asset('images/thescott/developer/img-smith.png') }}" alt="img" class="img-project">
                </div>
                <div class="col-md-5 project-padds-1">
                    <p class="pb-5 header-project font-librecaslon">
                        The Smith
                    </p>
                    <p class="txt-body font-montserrat">
                        The Smith is considered as the Silicon Valley of<br/>
                        Alam Sutera. Featuring the first<br/>
                        3.0 Small Office Home Office (SOHO) and the<br/>
                        most advance smart office with<br/>
                        Sillicon Valley facility. More information are<br/>
                        available at www.thesmith.co.id
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">
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
            font-size: 26px;
            color: grey;
            padding-top: 100px;
        }

        .bg-header-developer{
            background-color: #000000;
            height: 600px;
            width: auto;
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
