<section class=" pb-5 " style="">
    <div class="container pt-5 pb-5">
        <div class="row pb-5">
            <div class="d-flex m-auto justify-content-center align-items-center gap-4 wow zoomIn" style="">
                <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                    </svg>

                <div class=" text-center d-flex  gap-2" >

                    <svg width="65" height="34" viewBox="0 0 85 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.1" d="M16.42 0.695999C27.492 0.695999 31.908 10.616 31.908 22.008C31.908 34.808 26.724 43.704 16.164 43.704C5.412 43.704 0.676 34.04 0.612 22.264C0.612 10.168 5.668 0.695999 16.42 0.695999ZM16.292 8.056C12.772 8.056 10.34 12.536 10.34 22.264C10.34 31.8 12.644 36.344 16.356 36.344C20.132 36.344 22.18 31.608 22.18 22.136C22.18 12.92 20.196 8.056 16.292 8.056ZM49.104 43V10.04H48.976L41.04 13.816L39.44 6.52L50.512 1.4H58.512V43H49.104ZM78.332 43.704C75.068 43.704 72.7 41.208 72.7 37.816C72.7 34.296 75.068 31.864 78.46 31.864C81.788 31.864 84.092 34.232 84.156 37.816C84.156 41.208 81.852 43.704 78.332 43.704Z" fill="#212121"/>
                        </svg>

                        @php
                            $words= explode(' ',__('lang.our_services'));

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
        <div class="row pt-3">
                @foreach ($services as $item)
                    <div class="item col-lg-4  col-md-6  p-3">
                        <div class="card service-card border-0 round-100-0 overflow-hidden " style="background-image: url({{ asset($item->image) }});background-position: center;background-size: cover;background-repeat: no-repeat;height: 100%">

                            <div class="card-body round-100-0 text-center" style="background: #10312bc7;">
                                <img src="{{ asset($item->icon) }}" style="width: 72px; height: 72px" class=" m-auto" alt="">


                                <div class="p-2" style="">
                                    <div class="text-center" style="gap: 15px">

                                        <b  class="fs-4 text-white">{{ $item->title }}</b>
                                        <p class="pt-4 text-card text-white" style="height: 120px;">
                                            {{ Str::limit($item->short_description, 100) }}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ route('front.service.show',$item->id) }}" class="btn btn--custom-2 border-white  w3-block" style="font-size: 18px;font-weight: 600;">

                                    {{ __('lang.service_details') }}
                                </a>

                            </div>
                        </div>
                    </div>

                @endforeach

        </div>

        <div class="text-center pt-4">
            <a href="{{ route('front.service') }}" class="btn btn--custom border-white" style="font-weight: 400;font-size: 20px;">

                {{ __('lang.view_all_services') }}
                <svg width="20" height="20" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.7688 3.6689C14.0689 3.36894 14.4758 3.20044 14.9 3.20044C15.3243 3.20044 15.7312 3.36894 16.0312 3.6689L23.2312 10.8689C23.5312 11.1689 23.6997 11.5758 23.6997 12.0001C23.6997 12.4244 23.5312 12.8313 23.2312 13.1313L16.0312 20.3313C15.7295 20.6228 15.3253 20.784 14.9058 20.7804C14.4863 20.7767 14.085 20.6085 13.7883 20.3118C13.4917 20.0152 13.3234 19.6139 13.3198 19.1943C13.3161 18.7748 13.4774 18.3707 13.7688 18.0689L18.1 13.6001H2.90005C2.4757 13.6001 2.06874 13.4315 1.76868 13.1315C1.46862 12.8314 1.30005 12.4244 1.30005 12.0001C1.30005 11.5758 1.46862 11.1688 1.76868 10.8687C2.06874 10.5687 2.4757 10.4001 2.90005 10.4001H18.1L13.7688 5.9313C13.4689 5.63125 13.3004 5.22436 13.3004 4.8001C13.3004 4.37584 13.4689 3.96894 13.7688 3.6689Z" fill="white"/>
                    </svg>

            </a>
        </div>
    </div>
</section>


