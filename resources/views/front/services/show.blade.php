@extends('front.layouts.master')
@section('css')

@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner " >
            <b class="text-center p-2 w3-round-xxlarge border text-white animated slideInDown mb-4">{{$service->title}}</b>

        </div>
    </div>


     <section class=" container mb-5 ">


        <div class="row">
            <div class="col-md-4 p-5 container">

                <div class="" style="height: 100%;background-color: #F5F2EA">
                    <ul class="w3-ul">
                        @foreach ($services as $item)
                            <li class="{{ $service->id == $item->id ? 'bg-main text-white' : ' text-dark' }} ">
                                <a class="{{ $service->id == $item->id ? 'bg-main text-white' : ' text-dark' }}" href="{{ route('front.service.show', $item->id) }}">{{ $item->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>



            </div>
            <div class="col-md-8  p-2 w3-round-large">
                <h3 class="sec-color">{{ $service->title }}</h3>
                    <img class="" style="height: 450px;width: 100%" src="{{ asset($service->image) }}" alt="">

            </div>
        </div>

        <div class="row pt-4 container">
            @if ($service->description )

            <div class="col-12">
                <div class="" style="font-weight: 400 !important;">

                    {{ $service->short_description }}
                </div>
                <div class="desc  p-2 w3-round-large">
                    {!! $service->description !!}
                </div>
            </div>
            @endif


        </div>
     </section>
     <section class="container">
        <div class="tools w3-light-grey p-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 >{{ __('lang.w3_build_tools') }}</h3>
                    <h3 class="sec-color">{{ __('lang.technology_tools') }}</h3>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        @foreach ($tools as $item)
                        @if (isRtl())

                        <div class="col-md-4  col-4 text-center {{ isMobile()?'p-2':' p-5' }}" style="border-bottom: 1px solid #ddd; {{$loop->last || in_array($loop->iteration, [3, 6, 9,12,15])  ?'': 'border-left: 1px solid #ddd'}}">
                        @else

                        <div class="col-md-4  col-4 text-center {{ isMobile()?'p-2':' p-5' }}" style="border-bottom: 1px solid #ddd; {{$loop->last || in_array($loop->iteration, [3, 6, 9,12,15])  ?'': 'border-right: 1px solid #ddd' }}">
                        @endif
                                <img src="{{ asset($item->image) }}" alt="w3" style="width: {{ isMobile()?'100%':'140px' }}">
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
     </section>
     <br><br>
     <!-- projects Start -->
    @include('front.home.projects', ['products' => $products])
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
            ltr:true,
            nav: false,
            autoplayHoverPause:true,
            dots:true,
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
