<section class="container">
    <div class="row">
        <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
            <div class="d-flex m-auto justify-content-center align-items-center gap-4 wow zoomIn" style="">
                <svg width="281" height="3" viewBox="0 0 281 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050" stroke-width="2"/>
                    </svg>

                <div class=" text-center d-flex  gap-2" >

                    <svg width="65" height="44" viewBox="0 0 85 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.1" d="M16.42 0.695999C27.492 0.695999 31.908 10.616 31.908 22.008C31.908 34.808 26.724 43.704 16.164 43.704C5.412 43.704 0.676 34.04 0.612 22.264C0.612 10.168 5.668 0.695999 16.42 0.695999ZM16.292 8.056C12.772 8.056 10.34 12.536 10.34 22.264C10.34 31.8 12.644 36.344 16.356 36.344C20.132 36.344 22.18 31.608 22.18 22.136C22.18 12.92 20.196 8.056 16.292 8.056ZM63.12 43H53.904V33.08H35.472V26.744L51.152 1.4H63.12V25.784H68.048V33.08H63.12V43ZM44.496 25.784H53.904V16.568C53.904 14.072 54.032 11.512 54.16 8.824H53.968C52.624 11.512 51.472 13.944 50.064 16.568L44.56 25.656L44.496 25.784ZM78.332 43.704C75.068 43.704 72.7 41.208 72.7 37.816C72.7 34.296 75.068 31.864 78.46 31.864C81.788 31.864 84.092 34.232 84.156 37.816C84.156 41.208 81.852 43.704 78.332 43.704Z" fill="#212121"/>
                        </svg>




                        @php
                            $words= explode(' ',__('lang.our_partners'));

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
    <br><br>
    <div class="pt-3">
        <div class="row">


            <div class="col-md-12">
                <div class="row">
                    <div class="owl-carousel" id="parteners--owl" style="direction: ltr" >
                        @foreach ($parteners as $item)
                            <div class="item m-2">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="height: 200px!important; width: auto!important">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
