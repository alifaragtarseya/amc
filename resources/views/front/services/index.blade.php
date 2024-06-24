@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner " >
            <b class="text-center p-2 w3-round-xxlarge border text-white animated slideInDown mb-4">{{isRtl()? $metaBanner->title :  $metaBanner->title_en}}</b>
            <div class="text-center" style="width: {{ isMobile()?'':'50%;' }}">
                {{ isRtl()? $metaBanner->description :  $metaBanner->description_en }}
               </div>
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
