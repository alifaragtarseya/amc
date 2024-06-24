<section class="project--section pt-5 ">
    <div class="container pt-5 mb-5">
        <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
            <div class="pt-2 text-center" style="{{ isMobile() ? '100%' : '33.3%' }}">

                <b class="text-center slider--span"> {{ __('lang.blogs') }}</b>
                <h2 class="text-center t"> <b>{{ __('lang.latest_blogs') }}</b></h2>

            </div>
        </div>

        <div class="row pt-3 mb-5 facts-counter ">
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

</section>
