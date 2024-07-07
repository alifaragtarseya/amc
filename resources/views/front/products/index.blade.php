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
    <br><br><br><br>
    <div class="container p-3">
        {{-- <h3 class="text-center sec-color">{{ __('lang.we_create_digital_products') }}</h3> --}}
        <div class="d-flex  flex-wrap justify-content-center gap-3">
            <div class=" cat--item {{ !request()->category ? 'cat-active' : 'text-dark' }}">
                <a href="{{ route('front.product') }}">{{ __('lang.view_all_projects') }}</a>
            </div>
            @foreach ($categories as $cat)
                <div class=" cat--item {{ $cat->id == request()->category ? 'cat-active' : 'text-dark' }}">
                    <a style="" href="{{ route('front.product', ['category' => $cat->id]) }}#categores">{{ $cat->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
    <section class=" pt-5 mb-5 py-5 container">

        <div class="row">

            @forelse ($products as $item)
                <div class="col-md-4  ">
                    <a href="{{ route('front.product.show',$item->id) }}">
                        <div class="project--item" >
                            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="border-radius: 24px 0px!important;" >
                            <div class="overlay " style="border-radius: 24px 0px!important;">
                                <div class="text border w3-round-xlarge " style="width: 90%;height: 90%;text-align: center" >
                                   <p class="position-absolute top-50 start-50 translate-middle text-white fw-bold">{{ $item->title }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </section>
@endsection
