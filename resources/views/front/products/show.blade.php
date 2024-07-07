@extends('front.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">
@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0"
        style="background-image: url({{ asset($metaBanner->image) }}); {{ isMobile() ? 'height:150px' : '' }}"
        data-wow-delay="0.1s">
        <div class="meta--banner">
            <div class="container py-5">
                <h1 class=" animated slideInDown mb-4 text-center">{{ $product->title }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <section class="container ">
        <div class="row">

            <div class="col-md-7  p-2 ">
                <img style="border-radius: 24px 0px!important;height: 400px;" src="{{ asset($product->image) }}"
                    alt="" data-zoom-image="{{ asset($product->image) }}">
            </div>
            <div class="col-md-4 pt-2 position-relative offset-md-1">
                <div class="position-absolute top-50 start-0 translate-middle-y">
                    <b class=" p-3" style="border-radius: 24px 0px!important;background-color:#F8F2EE; color:#B58050">{{ __('lang.project_details') }}</b>
                    <h3 class="mt-5">{{ $product->title }}</h3>
                </div>
                
                
            </div>

        </div>

        <div class="row pt-4">

            @if ($product->description)
                <div class="col-7">

                    
                    <div class="desc pt-3 w3-round-large">
                        {{ $product->short_description }}
                    </div>
                    <div class="desc w3-round-large">
                        {!! $product->description !!}
                    </div>
                </div>
                <div class="col-4 position-relative offset-md-1">
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
