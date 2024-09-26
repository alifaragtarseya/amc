@extends('front.layouts.master')
@section('css')
    <style>
        .slider--description * {
            color: white!important;
        }
    </style>

@endsection
@section('content')

    <!-- Carousel Start ?v=2 -->
        @if(isMobile())
            @include('front.home.slider_mobile', ['slider' => $slider])
        @else
            @include('front.home.slider', ['slider' => $slider])
        @endif
    <!-- Carousel End -->





    <!-- counters Start -->
    @include('front.home.counters', ['counters' => $counters])
    <!-- counters End -->


    <!-- About Start -->
    @include('front.home.about', ['about' => $about])
    <!-- About End -->


    {{-- <!-- goals Start -->
    @include('front.home.goals')
    <!-- goals End --> --}}



<!-- Service Start -->
    @include('front.home.services', ['services' => $services])
    <!-- Service End -->

     <!-- feature Start -->
    @include('front.home.features', ['features' => $features])
    <!-- feature End -->

   <!-- projects Start -->
    @include('front.home.projects', ['products' => $products])
    <!-- projects End -->




     {{-- <!-- steps Start -->
     @include('front.home.steps', ['steps' => $steps])
     <!-- steps End -->


     <!-- teams Start -->
     @include('front.home.teams', ['teams' => $teams])
     <!-- teams End -->

 <!-- blogs Start -->
 @include('front.home.blogs', ['blogs' => $blogs])
 <!-- blogs End --> --}}


     <!-- parteners Start -->
     @include('front.home.partener', ['parteners' => $parteners])
     <!-- parteners End -->
    <!-- contact-us Start -->
    @include('front.home.contact-us')
    <!-- contact-us End -->







@endsection

@section('js')
    <script>
        // $('#services--owl').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     responsiveClass: true,
        //     autoplay: true,
        //     autoplayTimeout: 2000,
        //     autoplayspeed: 2000,
        //     ltr:true,
        //     nav: false,
        //     responsive: {
        //         0: {
        //             items: 1,
        //         },
        //         600: {
        //             items: 2,
        //         },
        //         1000: {
        //             items: 3,

        //         }
        //     }
        // });
        $('#parteners--owl').owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            autoplay: true,
            center: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            ltr:true,
            nav: false,
            dots:true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots:false,
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: false,

                }
            }
        })
        $('#projects--owl').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            ltr:true,
            center: true,
            nav: false,
            autoplayHoverPause:true,
            dots:false,
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
        function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11) ?
                match[2] :
                null;
        }
        var videolink = '{{ getSettingValue("features_video_url") }}';
        const videoId = getId(videolink);
        // alert(videoId);
        const iframeMarkup =
            '<iframe width="80%" height="380px" style="border-radius: 20px;" src="//www.youtube.com/embed/' + videoId +
            '" frameborder="0" allowfullscreen></iframe>';
        $('#youtube_link').html(iframeMarkup);
        // alert(videoId);

        // function showScreenDimensions() {
        //     var width = window.innerWidth;
        //     var height = window.innerHeight;
        //     alert('Width: ' + width + 'px, Height: ' + height + 'px');
        // }

        // // Show dimensions when the page loads
        // showScreenDimensions();

        // // Update dimensions when the window is resized
        // window.addEventListener('resize', showScreenDimensions);



    </script>
@endsection
