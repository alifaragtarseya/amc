<section class="section--product " style="background: #F6F6F6">
    <div class=" pt-5">
        <div class="container mb-5">
            <div class="row pt-3 pb-5">
                <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
                    <div class="pt-2 text-center">

                        <b class="text-center slider--span"> {{ __('lang.work_steps') }}</b>
                        <h2 class="text-center pt-2"> <b>{{ __('lang.how_to_get_started') }}</b></h2>

                    </div>
                </div>

            </div>

           @if (isMobile())
               <div class="row">
                    @foreach ($steps as $item)
                        <div class="col-12 pt-2">
                            <div class="d-flex">
                                <div class="flex-shrink-0 pt-4">
                                    <div class="step--div text-white">{{ $loop->iteration }}</div>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="content">
                                        <h2>{{ $item->title }}</h2>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
               </div>
           @else
           <div class="timeline">
            <div class="line--key--timeline "></div>

            @foreach ($steps as $item)
                @if ($loop->iteration % 2 == 0)
                    <div class="timeline--container right text-{{ isRtl()?'end':'start' }}">
                        <span class="timeline--span text-white">{{ $loop->iteration }}</span>
                        <div class="content">
                            <h2>{{ $item->title }}</h2>
                            <p class="text-dark w-75">{{ $item->description }}</p>
                        </div>
                    </div>
                @else
                    <div class="timeline--container left text-{{ isRtl()?'start':'end' }}">
                        <span class="timeline--span--left text-white">{{ $loop->iteration }}</span>

                        <div class="content ">
                            <h2>{{ $item->title }}</h2>
                            <p class="text-dark w-75" style="float: inline-end">{{ $item->description }}</p>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
           @endif


        </div>
        <br><br>
    </div>
</section>
