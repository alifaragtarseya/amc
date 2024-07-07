@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 pt-5" style="background-image: url({{ asset($metaBanner->image) }});"
        data-wow-delay="0.1s">
        <div class="overlay-banner"></div>
        
        <div class="border pt-5 title--banner" >
            <b class="text-center p-2 w3-round-xxlarge  text-white  mb-4">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
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
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-lg-3 col-md-6 wow zoomInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="{{ route('front.project.show', $project->id) }}">
                <div class="team-item rounded">
                    <img class="img-fluid" src="{{ $project->image }}" style="height: 250px;width: 100%;" alt="">
                    <div class="text-center p-4">
                        <h5>{{ $project->title }}</h5>
                        <p class="text-muted">{{ Str::limit($project->description, 100) }}</p>
                    </div>

                </div>
            </a>
            </div>
            @endforeach
        </div>
     </section>
@endsection
