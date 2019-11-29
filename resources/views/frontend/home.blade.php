@extends('layouts.frontend-v2')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT</title>
@endsection

@section('content')

<section class="bg-home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('images/thescott/home/web-cekot-preview 3-17.png') }}" alt="img" class="img-cekot-home">
                <p class="essentialy font-montserrat">LIVE ESSENTIALY</p>
                <div>
                    <a href="http://download.scotthomestudio.com/img/Ecatalogue_the_scott.pdf">
                        <img src="{{ asset('images/thescott/home/web-cekot-preview 3-18.png') }}" alt="img" class="img-btn-donlod">
                        <p class="font-montserrat text-white txt-download">DOWNLOAD</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row no-gutters px-5">
            <div class="col-md-6 col-12">
                <a href="{{ route('frontend.slow') }}">
                <div class="img-home-2 txt-spacing text-white">
                    <p class="txt-spacing-header font-librecaslon">SLOW LIVING</p>
                    <p class="readmore font-montserrat">Read More</p>
                </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('frontend.less') }}">
                <div class="img-home-3 txt-spacing text-white">
                    <p class="txt-spacing-header font-librecaslon">LESS IS MORE</p>
                    <p class="readmore font-montserrat">Read More</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-dark px-5">
                <p class="txt-header-body py-5 font-librecaslon">LIVE ESSENTIALLY</p>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                <p class="txt-live pb-4 font-montserrat">For recent decades, the simplicity of decision making seemed to fade. Hundreds of choices are stretched widely, beginning from the attire we pick, lunch menu up to
                    Netflix programs. Complexity has clouded decisionmakingprocesses, igniting bias energy that could compromise productivity. This is where Essentialism sets its place, offeringperfect
                    lifestyle choices in this tireless modern world.</p>
                <p class="txt-live font-montserrat">Essentialism is a focused lifestyle that highlights essential needs that shares a strong impact in one’s life, eliminating unproductive tasks in the process.
                    An Essentialist believes in an affluent lifestyle, attained in a minimalist manner. Triniti Land stimulates the need of reflecting
                    The Essentialism concept within the newly built apartment, The Scott Residence.</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <img src="{{ asset('images/thescott/home/web-cekot-preview-3-19.png') }}" alt="img" class="py-5 img-cekotlogo2">
            </div>
        </div>
    </div>
</section>
    <section>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="map-home text-center">
                    <a data-toggle="modal" data-target="#first_modal">
                        <img src="{{ asset('images/thescott/home/web-cekot-preview-3-18.png') }}" alt="img" class="click-img">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center text-dark">
                    <p class="txt-header-body txt-what font-librecaslon">WHAT SOUTH TANGERANG HAS TO OFFER</p>
                </div>
            </div>
            <div class="row text-center pb-5">
                <div class="col-md-4 col-12">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-23.png') }}" alt="img" class="pb-5" style="width:200px">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-22.png') }}" alt="img" class="pb-5" style="width:200px">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-21.png') }}" alt="img" class="pb-5" style="width:200px">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="row px-2">
                <div class="col-md-4 pb-5">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-13.jpg') }}" alt="img" class="text-center w-100" >
                    <p class="txt-header-body py-3 text-dark font-librecaslon">ADAPTABLE SPACE</p>
                    <p class="txt-body pr-3 font-montserrat">Initiating a minimalist home where functions matters most,
                        each unit at The Scott is installed with multi-purpose
                        interiors that adapts to your demands effortlessly. Whether
                        you seek for a cozy night sleep or a daylight working space,
                        let the room transform seamlessly, without compromising
                        any comfort.</p>
                </div>
                <div class="col-md-4 pb-5">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-14.jpg') }}" alt="img" class="text-center w-100" >
                    <p class="txt-header-body py-3 text-dark font-librecaslon">ROOM FOR CREATORS</p>
                    <p class="txt-body pr-3 font-montserrat">Built thoughtfully for creators, every room is designed
                        perfectly for productive pursuits, elegantly incorporating
                        coziness as the creative mind invents its best.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/thescott/home/web-cekot-preview-3-15.jpg') }}" alt="img" class="text-center w-100" >
                    <p class="txt-header-body py-3 text-dark font-librecaslon">THE 1<sup>ST</sup> IOT RESIDENCE</p>
                    <p class="txt-body pr-4 font-montserrat">Renowned as a pioneer for an innovative residence at
                        Serpong, The Scott proudly delivers an in-built
                        IOT technology that integrates to your needs flawlessly,
                        defining a perfect home for those seeking an ultimate
                        contentment.</p>
                </div>
            </div>
        </div>
    </section>


<div class="modal" id="first_modal">
    <div class="modal-dialog">
        <div class="modal-content bg_popup">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <!-- Modal body -->
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>


@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style>
        .click-img{
            width: 100px;
            padding-top: 23%;
        }
        .map-home{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-20.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: auto;
            height: 280px;
        }
        .txt-download{
            letter-spacing: 0.3rem;
            margin-top: -30px;
        }
        .img-btn-donlod{
            width: 160px;
            padding-top:60px;
        }
        .img-cekotlogo2{
            width:50px;
        }
        sup {
            vertical-align: super;
            font-size: 13px;
            top:-1.5px;

        }
        .txt-live{
            line-height: 1.5em;
            font-size: 13px;
        }
        .txt-header-body{
            font-size:20px;
        }
        .readmore{
            font-size: 13px;
        }
        .txt-spacing-header{
            letter-spacing: 0.5rem;
            font-size:14px;
            padding-bottom: 5px;
        }
        .txt-spacing{
            padding-left: 35px;
            padding-top: 38%;
        }
        .img-home-2{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-11.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: auto;
            height: 155px;
            margin-bottom:40px;
        }
        .img-home-3{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-12.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            width: auto;
            height: 155px;
        }
        .essentialy{
            color: #cec6af;
            font-size: 18px;
            letter-spacing: 0.5rem;
            padding-top: 10px;
        }
        .img-cekot-home{
            padding-top: 23%;
            width: 262px;
        }
        .bg-home{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-10.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width:100%;
            height: 420px;
        }
/*
pop up css
*/
        .modal-open .modal {
              display: flex!important;
              align-items: center!important;
              z-index: 99999999;
          }

        .modal-dialog {
            display: flex!important;
            align-items: center!important;
            flex-grow: 1;
            width: 100% !important;
            height: auto;
        }

        .modal-header{
            border-bottom: 0 !important;
        }

        .bg_popup{
            background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-20.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 265px;
            width: 355px;
        }

        .btn-paulmarc-more .w-25{
            width: 75% !important;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

        .text-finely-crafted{
            font-size: 10px;
            font-weight: bold;
        }

        /*.slick-dots li button:before {*/
            /*color: #fff;*/
        /*}*/

        /*.slick-dots li.slick-active button:before {*/
            /*color: #fff !important;*/
        /*}*/

        @media (min-width: 576px) {

            .click-img{
                width: 150px;
                padding-top: 20%;
            }
            .modal-dialog{
                max-width: 960px !important;
            }
            .bg_popup{
                height: 600px;
                width: 960px;
            }

            .map-home{
                height: 635px;
            }

            .txt-header-body{
                font-size:26px;
            }

            .txt-spacing{
                padding-left: 50px;
                padding-top: 45%;
            }

            .txt-spacing-header{
                letter-spacing: 0.5rem;
                font-size:26px;
                padding-bottom: 5px;
            }

            .img-home-3{
                background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-12.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                width: auto;
                height: 348px;
                margin-left: 5px;
            }

            .img-home-2{
                background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-11.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                width: auto;
                height: 348px;
                margin-right: 5px;
            }

            .img-cekot-home{
                padding-top: 15%;
                width: 400px;
            }
            .bg-home {
                background-image: url('{{ asset('images/thescott/home/web-cekot-preview-3-10.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 755px !important;
            }
            .img-btn-donlod{
                width: 160px;
                padding-top:100px;
            }
            .img-cekot{
                margin-top: 0px;
            }

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .img-house-responsive{
                height: 600px;
            }

            .img-paulmarc-responsive{
                height: 200px;
                width: auto;
            }

            .img-trinity-responsive{
                margin-top: -28px;
                height: 45px;
                width: auto;
            }

            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }

            .m-b-50{
                margin-bottom: 50px;
            }

            .text-finely-crafted{
                font-size: 13px;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1369px) {
            .click-img{
                width: 150px;
                padding-top: 12%;
            }
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $('.slider-within').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
    </script>
@endsection
