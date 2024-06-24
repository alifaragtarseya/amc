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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container ">
            <div class="row pt-5 g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="" src="{{ asset($about->image) }}" alt="" style="object-fit: cover;">

                </div>
                <div class="col-lg-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="p-4">
                        <div class="">
                            <span class="slider--span">{{ __('lang.about_trust') }}</span>
                            <br><br>
                            <h3>{{ $about->title }}</h3>
                        </div>
                        <br>
                        <p class=" text-dark mb-4" style="line-height: 36px;; ">
                            {{ $about->short_description }}
                        </p>
                        <div>
                            {!! $about->description !!}
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    @include('front.home.partener', ['parteners' => $parteners])
    <br><br>
    @include('front.home.counters', ['counters' => $counters])

    <div class="pt-5 mb-5 container">
        <div class="row">
            <div class="col-md-4  p-4">
                <div class=" card  mission-item">
                    <div class="card-header bg-sec">
                        <h3 class="text-white text-center">{{ __('lang.our_message') }}</h3>
                    </div>
                    <div class="card-body text-center  w3-light-grey"
                        style="    position: relative;
                        z-index: 9;">

                        <div class="text-dark fs-5 pt-3">
                            {{ getSettingValue('our_message_' . app()->getLocale()) }}
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4  p-4">
                <div class=" card  mission-item">
                    <div class="card-header bg-sec">
                        <h3 class="text-white text-center">{{ __('lang.our_vision') }}</h3>
                    </div>
                    <div class="card-body text-center  w3-light-grey"
                        style="    position: relative;
                        z-index: 9;">

                        <div class="text-dark fs-5 pt-3">
                            {{ getSettingValue('our_vision_' . app()->getLocale()) }}
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4  p-4">
                <div class=" card  mission-item">
                    <div class="card-header bg-sec">
                        <h3 class="text-white text-center">{{ __('lang.our_value') }}</h3>
                    </div>
                    <div class="card-body text-center  w3-light-grey"
                        style="    position: relative;
                        z-index: 9;">

                        <div class="text-dark fs-5 pt-3">
                            {{ getSettingValue('goals_' . app()->getLocale()) }}
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


    @include('front.home.teams', ['teams' => $teams])

    <!-- About End -->
@endsection
@section('js')
    <script>
        function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11) ?
                match[2] :
                null;
        }
        var videolink = '{{ getSettingValue('features_video_url') }}';
        const videoId = getId(videolink);
        // alert(videoId);
        const iframeMarkup =
            '<iframe width="80%" height="320px" style="border-radius: 20px;" src="//www.youtube.com/embed/' + videoId +
            '" frameborder="0" allowfullscreen></iframe>';
        $('#youtube_link').html(iframeMarkup);
        // alert(videoId);
    </script>
@endsection
