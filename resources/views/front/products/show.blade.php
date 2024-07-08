@extends('front.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 pt-5" style="background-image: url({{ asset($metaBanner->image) }});"
        data-wow-delay="0.1s">
        <div class="overlay-banner"></div>
        
        <div class="border pt-5 title--banner" >
            <b class="text-center p-2 w3-round-xxlarge  text-white  mb-4">{{ $product->title }}</b>
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
    <!-- Page Header End -->
    <br><br><br><br><br>

    <section class="container ">
        <div class="row">

            <div class="col-md-7  p-2 ">
                <img style="border-radius: 24px 0px!important;height: 400px;" src="{{ asset($product->image) }}"
                    alt="" data-zoom-image="{{ asset($product->image) }}">
            </div>
            <div class="col-md-4  pt-2 p offset-md-1">
                <div class="" style="margin-top: 120px">
                    <b class=" p-3" style="border-radius: 24px 0px!important;background-color:#F8F2EE; color:#B58050">{{ __('lang.project_details') }}</b>
                    <h3 class="mt-5">{{ $product->title }}</h3>
                </div>
                
                
            </div>

        </div>

        <div class="row pt-4">

            @if ($product->description)
                <div class="col-12 col-md-7">

                    
                    <div class="desc pt-3 w3-round-large">
                        {{ $product->short_description }}
                    </div>
                    <div class="desc w3-round-large">
                        {!! $product->description !!}
                    </div>
                </div>
                <div class="col-md-4 col-12 position-relative offset-md-1">
                    <table class="table table-borderless">
                        <tr>
                            <td>{{ __('lang.customer_name') }}</td>
                            <td>{{ __('lang.location') }}</td>
                        <tr>
                        <tr>
                            <td style="color: #B58050">
                                {{ $product->field }}
                            </td>
                            <td style="color: #B58050">
                                {{ $product->country }}
                            </td>
                        <tr>
                    </table>
                </div>
            @endif

        </div>
    </section>

    <br><br>
    
@endsection

@section('js')
@endsection
