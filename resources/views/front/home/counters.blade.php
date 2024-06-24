<section class="section--product ">
    <div class="bg-white ">
        <div class="container mb-5">

            <div class="row " style="{{ isMobile()?'flex-direction: column;align-items: center;':'' }}">
                @forelse ($counters as $item)


                <div class="col-md-6 col-lg-3 m-auto">
                    <div class=" text-center  counter--item">
                        <img src="{{ asset($item->image) }}" style="width:80px;height:80px " alt="">

                        <div>
                            <h1 class=" mb-0" data-toggle="counter-up">{{ $item->number }}</h1>
                            <p class="fs-5 m-0 text-white" style="min-width: 135px">{{ $item->title }}</p>
                        </div>
                    </div>
                </div>



                @empty
                @endforelse
            </div>

        </div>
        <br><br>
    </div>
</section>
