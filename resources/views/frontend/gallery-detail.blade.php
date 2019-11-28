@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>THE SCOTT - DEVELOPER</title>
@endsection


@section('content')
    <section style="margin-top:8%;">
        <div class="container-fluid pb-6 pt-5">
            @if($type==1)
                <div class="row no-gutters">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 1
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @elseif($type==2)
                <div class="row no-gutters">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 2
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @elseif($type==3)
                <div class="row no-gutters">
                    <div class="col-md-7 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 3
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @elseif($type==4)
                <div class="row no-gutters">
                    <div class="col-md-7 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 4
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @elseif($type==5)
                <div class="row no-gutters">
                    <div class="col-md-7 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 5
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @elseif($type==6)
                <div class="row no-gutters">
                    <div class="col-md-7 col-12">
                        <img src="{{ asset('images/thescott/gallery/gallery-detail-1.png') }}" alt="img" class="img-project">
                    </div>
                    <div class="col-md-6 col-12 project-padds-1">
                        <p class="txt-body font-montserrat pb-2">
                            Lorem ipsum dolor sit
                        </p>
                        <p class="pb-5 header-project font-librecaslon font-italic">
                            Lorem Ipsum 6
                        </p>
                        <p class="txt-body font-montserrat pt-2">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">
        .project-padds-1{
            padding-left: 6rem !important;
            padding-top: 8%;
            padding-right: 11% !important;
        }
        .container-fluid{
            padding:0px;
        }
        .header-project{
            font-size:38px;
        }
        .img-project{
            width:100%;
            height:auto;
        }
        .pb-6{
            padding-bottom: 6rem !important;
        }

        @media (max-width: 576px) {
            .header-project{
                padding-bottom: 1rem !important;
            }
            .project-padds-1{
                padding-left: 3rem !important;
                padding-top: 8%;
                padding-right: 3rem !important;
            }
        }

        @media (min-width: 768px) {
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
        }

        @media (min-width: 1368px) {
            .project-padds-1{
                padding-left: 6rem !important;
                padding-top: 10%;
                padding-right: 16% !important;
            }
        }

    </style>
@endsection

@section('scripts')
@endsection
