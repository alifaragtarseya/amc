<section class="project--section pt-5 ">
    <div class="container pt-5 mb-5">
        <div class="row">
            <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
                <div class="d-flex m-auto justify-content-center align-items-center gap-4 wow zoomIn" style="">
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                        </svg>

                    <div class=" text-center d-flex  gap-2" >

                        <svg width="65" height="44" viewBox="0 0 84 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.1" d="M15.92 0.695999C26.992 0.695999 31.408 10.616 31.408 22.008C31.408 34.808 26.224 43.704 15.664 43.704C4.912 43.704 0.176 34.04 0.112 22.264C0.112 10.168 5.168 0.695999 15.92 0.695999ZM15.792 8.056C12.272 8.056 9.84 12.536 9.84 22.264C9.84 31.8 12.144 36.344 15.856 36.344C19.632 36.344 21.68 31.608 21.68 22.136C21.68 12.92 19.696 8.056 15.792 8.056ZM35.932 40.824L37.916 33.464C39.644 34.424 43.612 36.024 47.58 36.024C52.636 36.024 55.196 33.592 55.196 30.52C55.196 26.36 51.1 24.504 46.812 24.504H42.844V17.528H46.684C49.948 17.528 54.044 16.248 54.044 12.728C54.044 10.232 52.06 8.376 47.9 8.376C44.508 8.376 40.924 9.848 39.26 10.872L37.276 3.832C39.772 2.232 44.7 0.695999 50.14 0.695999C58.972 0.695999 63.9 5.368 63.9 11.064C63.9 15.48 61.404 19 56.284 20.728V20.856C61.276 21.752 65.308 25.528 65.308 31.032C65.308 38.328 58.844 43.704 48.284 43.704C42.908 43.704 38.364 42.296 35.932 40.824ZM77.832 43.704C74.568 43.704 72.2 41.208 72.2 37.816C72.2 34.296 74.568 31.864 77.96 31.864C81.288 31.864 83.592 34.232 83.656 37.816C83.656 41.208 81.352 43.704 77.832 43.704Z" fill="#212121"/>
                            </svg>



                            @php
                                $words= explode(' ',__('lang.our_projects'));

                            @endphp
                        <b class="text-center fs-3 " >
                            @foreach ($words as $word)
                                <span style="font-weight: bold;" class="{{ $loop->last ? 'main-color' : '' }}">{{ $word }}</span>
                            @endforeach
                        </b><br><br>

                    </div>
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                        </svg>

                </div>
            </div>

        </div>

        @if (isMobile())
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-12 mb-3">
                    <a href="{{ route('front.product.show',$item->id) }}">
                        <div class="project--item">
                            <img style="border-radius: 20px;" src="{{ asset($item->image) }}" alt="{{ $item->title }}" >
                            <div class="overlay">
                                <div class="text">{{ $item->title }}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @else
            <div class="row pt-3 mb-5 facts-counter ">
                <div class="col-md-5">
                    <div class="row">

                        @foreach ($products->take(2) as $item)
                            <div class="col-md-12 pt-3">
                                <a href="{{ route('front.product.show',$item->id) }}">
                                    <div class="project--item">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="image">
                                        <div class="overlay">
                                            <div class="text">{{ $item->title }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        @foreach ($products->skip(2)->take(4) as $item)
                            <div class="col-md-6 pt-3">
                                <a href="{{ route('front.product.show',$item->id) }}">
                                    <div class="project--item">
                                        <img src="{{ asset($item->image) }}" style="{{ $loop->iteration == 3 ||$loop->iteration == 4? 'width: 100%;height: 470px;' : '' }}" alt="{{ $item->title }}" class="image">
                                        <div class="overlay">
                                            <div class="text">{{ $item->title }}</div>
                                        </div>
                                    </div></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        
        <div class="text-center pt-4">
            <a href="{{ route('front.product') }}" class="btn btn--custom border-white" style="font-weight: 400;font-size: 20px;">

                {{ __('lang.view_all_projects') }}
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.7688 3.6689C14.0689 3.36894 14.4758 3.20044 14.9 3.20044C15.3243 3.20044 15.7312 3.36894 16.0312 3.6689L23.2312 10.8689C23.5312 11.1689 23.6997 11.5758 23.6997 12.0001C23.6997 12.4244 23.5312 12.8313 23.2312 13.1313L16.0312 20.3313C15.7295 20.6228 15.3253 20.784 14.9058 20.7804C14.4863 20.7767 14.085 20.6085 13.7883 20.3118C13.4917 20.0152 13.3234 19.6139 13.3198 19.1943C13.3161 18.7748 13.4774 18.3707 13.7688 18.0689L18.1 13.6001H2.90005C2.4757 13.6001 2.06874 13.4315 1.76868 13.1315C1.46862 12.8314 1.30005 12.4244 1.30005 12.0001C1.30005 11.5758 1.46862 11.1688 1.76868 10.8687C2.06874 10.5687 2.4757 10.4001 2.90005 10.4001H18.1L13.7688 5.9313C13.4689 5.63125 13.3004 5.22436 13.3004 4.8001C13.3004 4.37584 13.4689 3.96894 13.7688 3.6689Z" fill="white"/>
                    </svg>

            </a>
        </div>

    </div>

</section>
