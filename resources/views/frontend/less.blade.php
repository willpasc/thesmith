@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - LESS IS MORE</title>
@endsection


@section('content')
    <section class="bg-header-less">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12 text-center pb-5">
                    <p class="header-developer  text-dark pt-5 pb-3 font-librecaslon">
                        LESS IS MORE
                    </p>
                    <p class="txt-body px-md-0 px-4 text-dark font-montserrat">
                        Serenity has become a luxury within this fast-paced world. The Scott Residence adopts a minimalist life style that lays a foundation
                        of Less is More, offering values leading to a stress-free life. Without compromising on quality of life, declutter your self from
                        additional possessions and meaningless activities as you focus on life essentials. Beginning from home, cherish the wonders of
                        simplicity, while crafting meaningful tasks that adds a value of timeliness
                    </p>
                </div>
                <div class="col-md-2"></div>
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
        }

        .bg-header-less {
            background-image: url('{{ asset('images/thescott/home/banner-less.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 400px;
        }

        @media (max-width: 576px) {
            .header-img{
                min-height: 150px;
            }
            .bg-header-less{
                background-image: url('{{ asset('images/thescott/home/banner-less.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width:100%;
                height: 180px;
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
