@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->

    {{-- <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); "
        data-wow-delay="0.1s">
        <div class="meta--banner ">
            <b
                class="text-center p-2 w3-round-xxlarge border text-white animated slideInDown mb-4">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
            <div class="text-center" style="width: {{ isMobile() ? '' : '50%;' }}">
                {{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}
            </div>
        </div>
    </div> --}}
    <!-- Page Header End -->

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
