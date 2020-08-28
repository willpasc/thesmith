<!-- Footer -->
<footer>
    <div class="parallax100 py-md-5 bg-1" style="background-color: #0d0d0d;">
        <div class="container p-5 p-md-2 d-none d-md-block">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4 col-12 mb-4 mb-md-0 text-md-left text-center">
                    <a href="{{ route('home') }}">
                        <img class="mb-4" src="{{ asset('images/thesmith/thesmith-web-footer-logo_1.0.png') }}" width="280">
                    </a>
                </div>
                <div class="col-md-3 pl-5-c">
                    <p class="pb-2 font-metropolis" style="color: gray; font-size:11px;">SITE MAP</p>
                    <p>
                        <a href="{{ route('frontend.concept') }}" style="color:white;" class="fs-14 font-gotham-book lh-20">THE CONCEPT</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.location') }}" style="color:white;" class="fs-14 font-gotham-book lh-20">LOCATION</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" style="color:white;" class="fs-14 lh-20 font-gotham-book">TOWER PLANS</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.facilities') }}" style="color:white;" class="fs-14 font-gotham-book lh-20">FACILITIES</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.virtual') }}" style="color:white;" class="fs-14 font-gotham-book lh-20">VIRTUAL TOUR</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.developer') }}" style="color:white;" class="fs-14 font-gotham-book lh-20">DEVELOPER</a>
                    </p>
                </div>
                <div class="col-md-3 pl-5 pt-4 pt-md-0 ">
                    <p class="pb-2 font-metropolis lh-20" style="color: gray; font-size:11px;">CONTACT US</p>
                    <p class="fs-14 font-gotham-book lh-20" style="color:white"><span class="pr-3" style="font-weight: bold;">P</span><span>087 8886 8886 0</span></p>
                    <div class="fs-12 font-gotham-book lh-20 px-3 mb-4" style="border: 1px solid white;margin-left: 25px;margin-right: 25px;">
                        <a href="http://wa.me/6287888688860"  >
{{--                            <img class="w-100 pl-1" src="{{ asset('images/thesmith/watsap.png') }}" >--}}
                            <p class="text-white font-gotham-book text-center">CHAT VIA WHATSAPP</p>
                        </a>
                    </div>
                    <p class="fs-14 font-gotham-book lh-20" style="color:white"><span class="pr-3" style="font-weight: bold">A</span><span>Living World, 1<sup class="fs-8">ST</sup> Floor </span></p>
                    <p class="fs-14 font-gotham-book lh-20" style="color:white"><span class="pr-3 black">A</span><span>Monday — Sunday</span></p>
                    <p class="fs-14 font-gotham-book lh-20" style="color:white"><span class="pr-3 black">A</span><span>10.00 — 22.00</span></p>
                    <div class="pt-4">
                        <p class="fs-14 font-gotham-book lh-20" style="color:white"><span class="pr-3 black">A</span><span>FOLLOW US</span></p>
                        <a href="#">
                            <img class=" pl-4" src="{{ asset('images/thesmith/thesmith-web_2.0-56.png') }}" style="width:50px;">
                        </a>
                        <a href="#">
                            <img class=" pl-3" src="{{ asset('images/thesmith/thesmith-web_2.0-55.png') }}" style="width:40px;">
                        </a>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row pt-4">
                <div class="col-md-1 col-12"></div>
                <div class="col-md-4">
                    <p class="d-none d-md-block disclaimer font-metropolis">
                        DISCLAIMER: All pictures & photos just for illustration on preparation, they
                        are not always the same the developer build, although seriously to think &
                        preparing this flyer, the developer will not take any responsibility it there
                        are some mistakes in the future.
                    </p>
                    <p class="d-block d-md-none disclaimer-1">DISCLAIMER: All pictures & photos just for illustration on preparation, they
                        are not always the same the developer build, although seriously to think &
                        preparing this flyer, the developer will not take any responsibility it there
                        are some mistakes in the future.</p>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="container  d-block d-md-none pb-5">
            <div class="row">
                <div class="col-6 pt-5">
                    <a href="{{ route('home') }}">
                        <img class="mb-4" src="{{ asset('images/thesmith/thesmith-web-footer-logo_1.0.png') }}" width="170">
                    </a>
                </div>
                <div class="col-6 pt-5 pl-4">
                    <p class="pb-2" style="color: gray; font-size:9px;">SITE MAP</p>
                    <p>
                        <a href="{{ route('home') }}#concept" style="color:white; font-size:9px;" class="">CONCEPT</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.towerplans', ['tabname'=>'residence'])}}" style="color:white; font-size:9px;" class="">TOWER PLANS</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.facilities') }}" style="color:white; font-size:9px;" class="">FACILITIES</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.developer') }}" style="color:white; font-size:9px;" class="">DEVELOPERS</a>
                    </p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-6">
                    <p class="d-block d-md-none disclaimer-1 pt-4 ml-1">DISCLAIMER: All pictures & photos just for illustration on preparation, they
                        are not always the same the developer build, although seriously to think &
                        preparing this flyer, the developer will not take any responsibility it there
                        are some mistakes in the future.</p>
                </div>
                <div class="col-6 pl-4">
                    <p class="pb-2" style=" line-height:2em;color: gray; font-size:9px;">CONTACT US</p>
                    <p class="" style=" line-height:2em;font-size:9px;color:white"><span style="font-weight: bold;">P</span>&nbsp&nbsp&nbsp087 8886 8886 0</p>
                    <p class="" style=" line-height:2em; font-size:9px;color:white"><span style="font-weight: bold">I</span>&nbsp&nbsp&nbsp TRINITILAND</p>
                    <p class="" style=" line-height:2em; font-size:9px;color:white"><span style="font-weight: bold">A</span>&nbsp&nbsp&nbspLIVING WORLD, 1ST FLOOR</p>
                    <p class="" style=" line-height:2em; font-size:9px;color:white">&nbsp&nbsp&nbsp&nbsp&nbspMonday — Sunday</p>
                    <p class="" style=" line-height:2em; font-size:9px;color:white">&nbsp&nbsp&nbsp&nbsp&nbsp10.00 — 22.00</p>
                </div>
            </div>
        </div>
    </div>
</footer>
