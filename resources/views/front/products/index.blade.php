@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); "
        data-wow-delay="0.1s">
        <div class="meta--banner ">
            <b
                class="text-center p-2 w3-round-xxlarge border text-white animated slideInDown mb-4">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
            <div class="text-center" style="width: {{ isMobile() ? '' : '50%;' }}">
                {{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}
            </div>
        </div>
    </div>
    <!-- Page Header End -->

        <div class="container p-3">
            <h3 class="text-center sec-color">{{ __('lang.we_create_digital_products') }}</h3>
            <div class="d-flex  flex-wrap align-items-center gap-3" >
                <div class=" cat--item {{  !request()->category  ? 'cat-active' : 'text-dark' }}">
                    <a href="{{ route('front.product') }}">{{ __('lang.view_all_projects') }}</a>
                </div>
                @foreach ($categories as $cat)
                <div class=" cat--item {{ $cat->id == request()->category  ? 'cat-active' : 'text-dark' }}">
                    <a href="{{ route('front.product',['category'=> $cat->id]) }}#categores">{{ $cat->title }}</a>
                </div>
            @endforeach
            </div>
        </div>
     <section class=" pt-5 mb-5 py-5 container">

        <div class="row">

            @forelse ($products as $item)
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
     </section>

@endsection
