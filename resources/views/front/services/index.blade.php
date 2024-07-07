@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 pt-5" style="background-image: url({{ asset($metaBanner->image) }});"
        data-wow-delay="0.1s">
        <div class="overlay-banner"></div>
        
        <div class="border pt-5 title--banner" >
            <b class="text-center p-2 w3-round-xxlarge  text-white  mb-4 " style="font-size: x-large;">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
            <br>
            <svg width="167" height="8" viewBox="0 0 167 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="167" height="8" fill="url(#paint0_linear_64_701)"/>
                <defs>
                <linearGradient id="paint0_linear_64_701" x1="0" y1="4" x2="167" y2="4" gradientUnits="userSpaceOnUse">
                <stop stop-color="#B58050"/>
                <stop offset="1" stop-color="#4F3823"/>
                </linearGradient>
                </defs>
            </svg>
                
        </div>
    </div>
    <div class="text-center  d-flex justify-content-center">
       <div style="width: {{ isMobile()?'':'30%;' }}">
        <h2>{{ __('lang.we_provide_wide') }}</h2>
       </div>
    </div>
    <!-- Page Header End -->
<br><br>

   @include('front.home.services', ['services' => $services])

    {{-- <br><br>
    <div class="bg-foot"></div> --}}

@endsection
