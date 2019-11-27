@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - SLOW LIVING</title>
@endsection


@section('content')
    <section class="bg-header-slow">
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
                <div class="col-2"></div>
                <div class="col-8 text-center pb-5">
                    <p class="header-developer  text-dark pt-5 pb-3 font-librecaslon">SLOW LIVING</p>
                    <p class="txt-body px-3 text-dark font-montserrat">As life evolves quickly, The Scott Residence infuses the root of Slow Living for its residents by eliminating the non - essential
                        errands of the demanding world. Every element is carefully planned, crafted perfectly to create amore balanced, meaningful and
                        affirmed lifestyle. None is more precious than the beauty of contentment, while engaging deeply on activities close to your heart,
                        consciously absorbing a composed lifestyle through sensory profusion, elegantly stepping away from endless chaotic affairs.</p>
                </div>
                <div class="col-2"></div>
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

        .bg-header-slow{
            background-image: url('{{ asset('images/thescott/home/banner-slow.png') }}');
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
