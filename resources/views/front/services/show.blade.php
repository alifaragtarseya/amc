@extends('front.layouts.master')
@section('css')
@endsection
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

    <section class=" container mb-5 ">


        <div class="row">
            <div class="col-md-4 p-5 container">

                <div class="">
                    <ul class="w3-ul">
                        @foreach ($services as $item)
                            <li class="{{ $service->id == $item->id ? 'bg-main text-white' : ' text-dark' }} border mb-4"
                                style="border-radius: 24px 0px!important;">

                                <a class="{{ $service->id == $item->id ? 'bg-main text-white' : ' text-dark' }}"
                                    href="{{ route('front.service.show', $item->id) }}">
                                    <img src="{{ asset($item->icon) }}" alt="" style="width: 40px!important">
                                    {{ $item->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>



            </div>
            @if ($service->description)
                <div class="col-4">
                    <div class="" style="font-weight: 400 !important;">

                        {{ $service->short_description }}
                    </div>
                    <div class="desc  p-2 w3-round-large">
                        {!! $service->description !!}
                    </div>
                </div>
            @endif
            <div class="col-md-4  p-2 w3-round-large">
                
                <img class="" style="height: 450px;width: 100%;border-radius: 24px 0px!important;"
                    src="{{ asset($service->image) }}" alt="">

            </div>
            


        </div>

    </section>

    <br><br>

    <!-- projects End -->
@endsection
@section('js')
    <script>
        $('#projects--owl').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            ltr: true,
            nav: false,
            autoplayHoverPause: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        })
    </script>
@endsection
