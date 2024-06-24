@extends('front.layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">


@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0" style="background-image: url({{ asset($metaBanner->image) }}); {{ isMobile()?'height:150px':'' }}" data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class=" animated slideInDown mb-4 text-center">{{ $product->title }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class="container ">
        <div class="row">

            <div class="col-md-8  p-2 ">
                        <img class=" w3-round-large" src="{{ asset($product->image) }}" alt="" style=" height: 400px;"
                            data-zoom-image="{{ asset($product->image) }}">
            </div>
            <div class="col-md-4 pt-2 ">
                <div class="card" style="height: 100%">
                 <div class="card-header bg-main">
                     <b class="text-white">{{ __('lang.project_details') }}</b>
                 </div>
                 <div class="card-body w3-light-gray">
                    <ul class="w3-ul">
                        <li class="p-3">
                            <div class="d-flex justify-content-between">
                                <b>{{ __('lang.customer_name') }}</b>
                                <span>{{ $product->field }}</span>
                            </div>
                        </li>
                        <li class="p-3">
                            <div class="d-flex justify-content-between">
                                <b>{{ __('lang.location') }}</b>
                                <span>{{ $product->country }}</span>
                            </div>
                        </li>
                        <li class="p-3">
                            <div class="d-flex justify-content-between">
                                <b>{{ __('lang.mission') }}</b>
                                <span>{{ $product->technology }}</span>
                            </div>
                        </li>
                        <li class="p-3">
                            <div class="d-flex justify-content-between">
                                <b>{{ __('lang.time') }}</b>
                                <span>{{ $product->url }}</span>
                            </div>
                        </li>
                        <li class="p-3">
                            <div class="d-flex justify-content-between">
                                <b>{{ __('lang.rate') }}</b>
                                <span>
                                    <svg width="159" height="25" viewBox="0 0 159 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0003 17.77L16.1503 20.28C16.9103 20.74 17.8403 20.06 17.6403 19.2L16.5403 14.48L20.2103 11.3C20.8803 10.72 20.5203 9.62001 19.6403 9.55001L14.8103 9.14001L12.9203 4.68001C12.5803 3.87001 11.4203 3.87001 11.0803 4.68001L9.19032 9.13001L4.36032 9.54001C3.48032 9.61001 3.12032 10.71 3.79032 11.29L7.46032 14.47L6.36032 19.19C6.16032 20.05 7.09032 20.73 7.85032 20.27L12.0003 17.77Z" fill="#FFCE3F"/>
                                        <path d="M45.7503 17.77L49.9003 20.28C50.6603 20.74 51.5903 20.06 51.3903 19.2L50.2903 14.48L53.9603 11.3C54.6303 10.72 54.2703 9.62001 53.3903 9.55001L48.5603 9.14001L46.6703 4.68001C46.3303 3.87001 45.1703 3.87001 44.8303 4.68001L42.9403 9.13001L38.1103 9.54001C37.2303 9.61001 36.8703 10.71 37.5403 11.29L41.2103 14.47L40.1103 19.19C39.9103 20.05 40.8403 20.73 41.6003 20.27L45.7503 17.77Z" fill="#FFCE3F"/>
                                        <path d="M79.5003 17.77L83.6503 20.28C84.4103 20.74 85.3403 20.06 85.1403 19.2L84.0403 14.48L87.7103 11.3C88.3803 10.72 88.0203 9.62001 87.1403 9.55001L82.3103 9.14001L80.4203 4.68001C80.0803 3.87001 78.9203 3.87001 78.5803 4.68001L76.6903 9.13001L71.8603 9.54001C70.9803 9.61001 70.6203 10.71 71.2903 11.29L74.9603 14.47L73.8603 19.19C73.6603 20.05 74.5903 20.73 75.3503 20.27L79.5003 17.77Z" fill="#FFCE3F"/>
                                        <path d="M113.25 17.77L117.4 20.28C118.16 20.74 119.09 20.06 118.89 19.2L117.79 14.48L121.46 11.3C122.13 10.72 121.77 9.62001 120.89 9.55001L116.06 9.14001L114.17 4.68001C113.83 3.87001 112.67 3.87001 112.33 4.68001L110.44 9.13001L105.61 9.54001C104.73 9.61001 104.37 10.71 105.04 11.29L108.71 14.47L107.61 19.19C107.41 20.05 108.34 20.73 109.1 20.27L113.25 17.77Z" fill="#FFCE3F"/>
                                        <path d="M147 17.77L151.15 20.28C151.91 20.74 152.84 20.06 152.64 19.2L151.54 14.48L155.21 11.3C155.88 10.72 155.52 9.62001 154.64 9.55001L149.81 9.14001L147.92 4.68001C147.58 3.87001 146.42 3.87001 146.08 4.68001L144.19 9.13001L139.36 9.54001C138.48 9.61001 138.12 10.71 138.79 11.29L142.46 14.47L141.36 19.19C141.16 20.05 142.09 20.73 142.85 20.27L147 17.77Z" fill="#FFCE3F"/>
                                        </svg>
                                        </span>
                            </div>
                        </li>
                    </ul>
                 </div>
                </div>
             </div>

        </div>

        <div class="row pt-4">

            @if ($product->description )

            <div class="col-12">

                <b>{{ __('lang.project_desc') }} : </b>
                <div class="desc  pt-3 w3-round-large">
                    {{ $product->short_description }}
                </div>
                <div class="desc   w3-round-large">
                    {!! $product->description !!}
                </div>
            </div>
            @endif

        </div>
     </section>

     <br><br>
     <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="sec-color">
                    {{__('lang.related_projects')}}
                </h3>
            </div>

        </div>
        <div class="row">

            @forelse ($relatedProducts as $item)
            <div class="col-md-4  ">
                <div class="product-item" style="position: relative;z-index: 999;">
                    <div class=" border-0 ">
                        <div class="card-body text-center">
                            <span style="top: 15px;border:2px solid #fff" class="badge position-relative fs-5 w3-round-xxlarge   bg-main ">{{ $item->category->title }}</span>
                            <div class="image">
                                <img src="{{ asset($item->image) }}" class="w3-round-large" style="height: 300px" alt="">
                            </div>
                            <h3 class=" pt-2">{{ $item->title }}</h3>
                            <a href="{{ route('front.product.show',$item->id) }}" class="btn btn--custom">
                                {{ __('lang.learn_more') }}
                                <svg width="35" height="35" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#9C802F"/>
                                    <path d="M12 20L28 20M28 20L22 26M28 20L22 14" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    @empty
            @endforelse
        </div>
     </div>
@endsection

@section('js')

@endsection
