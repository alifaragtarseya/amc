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


   <div class="container">
    <div class="row mb-5 facts-counter ">
        @foreach ($blogs as $item)
            <div class="col-md-6 col-lg-4 pt-2 ">
                <a href="{{ route('front.blog.show',$item->id) }}">
                    <div class=" border-0 blog-item">
                        <div class="card-body text-center">
                            {{-- <span style="top: 15px;border:2px solid #fff" class="badge position-relative fs-5 w3-round-xxlarge   bg-main ">{{ $item->category->title }}</span> --}}
                            <div class="image">
                                <img src="{{ asset($item->image) }}" class="w3-round-large" style="height: 300px" alt="">
                            </div>
                            <br>
                            <span class="sec-color">{{ $item->created_at->isoFormat('MMMM DD YYYY') }}</span>
                            <h5 class=" text-dark">{{ $item->title }}</h5>

                        </div>
                    </div>
                </a>
            </div>



        @endforeach

</div>
   </div>

@endsection
