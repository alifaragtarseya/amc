<section class="section--product pt-5">
    <div class="container ">
        <div class="row mb-5">
            <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
                <div class="d-flex m-auto justify-content-center align-items-center gap-4 wow zoomIn" style="">
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                        </svg>
    
                    <div class=" text-center d-flex  gap-2" >
    
                        <svg width="65" height="44" viewBox="0 0 85 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.1" d="M16.42 0.695999C27.492 0.695999 31.908 10.616 31.908 22.008C31.908 34.808 26.724 43.704 16.164 43.704C5.412 43.704 0.676 34.04 0.612 22.264C0.612 10.168 5.668 0.695999 16.42 0.695999ZM16.292 8.056C12.772 8.056 10.34 12.536 10.34 22.264C10.34 31.8 12.644 36.344 16.356 36.344C20.132 36.344 22.18 31.608 22.18 22.136C22.18 12.92 20.196 8.056 16.292 8.056ZM66.256 43H36.752V37.112L42.064 32.312C51.216 24.12 55.632 19.448 55.696 14.584C55.696 11.192 53.712 8.504 48.912 8.504C45.328 8.504 42.192 10.296 40.016 11.896L37.264 4.984C40.336 2.616 45.264 0.695999 50.832 0.695999C60.304 0.695999 65.424 6.2 65.424 13.688C65.424 20.728 60.432 26.296 54.352 31.672L50.512 34.872V35H66.256V43ZM78.332 43.704C75.068 43.704 72.7 41.208 72.7 37.816C72.7 34.296 75.068 31.864 78.46 31.864C81.788 31.864 84.092 34.232 84.156 37.816C84.156 41.208 81.852 43.704 78.332 43.704Z" fill="#212121"/>
                            </svg>
                            
    
                            @php
                                $words= explode(' ',__('lang.why_choose_us'));
    
                            @endphp
                        <b class="text-center fs-3 " >
                            @foreach ($words as $word)
                                <span class="{{ $loop->last ? 'main-color' : '' }}">{{ $word }}</span>
                            @endforeach
                        </b><br><br>
    
                    </div>
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                        </svg>
    
                </div>
            </div>
            
            
        </div>
        <br>
    </div>
    <div class="row  mb-5 facts-counter ">
        <div class="col-md-6 bg-sec p-0">
            <div class="p-md-5">
                <div class="row ">

                    @foreach ($features->take(3) as $feature)
                    <div class="col-12 pt-5 ">
                        <div class="d-flex gap-3 border w3-round-xlarge align-items-start p-4">
                            <span class="border p-3 w3-round-xlarge">
                                <img src="{{ asset($feature->image) }}" style="width: 40px"  alt="">
                            </span>
                            <div class="text-white">
                                <h5>
                                    <b>{{ $feature->title }}</b>
                                </h5>
                                <p class="text-white">
                                    {{ $feature->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <img src="{{ asset(getSettingValue('bg_feature')) }}" alt="{{ getSettingValue('site_name_'.app()->getLocale()) }}">
        </div>


    </div>
</section>
