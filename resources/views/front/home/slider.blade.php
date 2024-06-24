
<section class="home--slider" style="background-image: url({{ asset($slider->bg_image) }});">
    <div class="slider--text pt-5 position-relative">

            <div class="">
                <div class="row pt-5 mt-5">
                    <div class="col-md-6 p-5 ">
                        <div class="p-5">

                            {{-- <span class="slider--span">{{ __('lang.hello_to_trust') }}</span> --}}

                            <div class="pt-3 {{!isMobile()?'slider--title':''}}" style="">
                                {!! $slider->title !!}
                            </div>
                            <p class="text-white ">
                                {{ $slider->description }}
                            </p>

                            <br>
                            <a href="{{ route('front.service') }}" class="btn btn--custom">
                                {{ __('lang.view_services') }}
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7688 3.66881C14.0688 3.36885 14.4757 3.20035 14.9 3.20035C15.3243 3.20035 15.7311 3.36885 16.0312 3.66881L23.2312 10.8688C23.5311 11.1689 23.6996 11.5757 23.6996 12C23.6996 12.4243 23.5311 12.8312 23.2312 13.1312L16.0312 20.3312C15.7294 20.6227 15.3253 20.7839 14.9057 20.7803C14.4862 20.7766 14.0849 20.6084 13.7883 20.3117C13.4916 20.0151 13.3234 19.6138 13.3197 19.1942C13.3161 18.7747 13.4773 18.3706 13.7688 18.0688L18.1 13.6H2.89999C2.47564 13.6 2.06868 13.4314 1.76862 13.1314C1.46856 12.8313 1.29999 12.4244 1.29999 12C1.29999 11.5757 1.46856 11.1687 1.76862 10.8686C2.06868 10.5686 2.47564 10.4 2.89999 10.4H18.1L13.7688 5.93121C13.4688 5.63116 13.3003 5.22427 13.3003 4.80001C13.3003 4.37574 13.4688 3.96885 13.7688 3.66881Z" fill="white"/>
                                    </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{ asset($slider->image) }}" style="width: 100%" alt="">

                    </div>
                </div>
            </div>
    </div>
</section>

