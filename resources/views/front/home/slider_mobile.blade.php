<section class="home--slider" style="background-image: url({{ asset($slider->bg_image) }}); ">
    <div class="slider--text pt-5 position-relative">

            <div class="">
                <div class="row pt-5 mt-5">
                    <div class="col-md-6 col-12 ">
                        <img src="{{ asset($slider->image) }}" style="width: 100%; {{isRtl()? 'transform: rotateY(181deg);' : ''}}"  alt="">

                    </div>
                    <div class="col-md-6 col-12 p-sm-5 " >
                        <div class="p-md-5 text-title-description-baner" style="
                        padding-right: 10px;
                    ">

                            {{-- <span class="slider--span">{{ __('lang.hello_to_trust') }}</span> --}}

                            <div class="pt-3 title--n {{!isMobile()?'slider--title':''}} title-slider-bg-screen {{ isMobile() ? 'text-slider-mobile title-slider-mobile title-slider-mobile-p' : '' }}">
                                {!! $slider->title !!}
                            </div>
                            <div class="text-white title-slider-bg-screen {{ app()->getLocale() == 'ar'  ? 'pl-3' : ''  }} {{ isMobile() ? 'text-slider-mobile slider--description-mobile' : '' }}" style="{{ isMobile() ? 'margin-top: 5%;line-height: 21px !important;font-weight: 500 !important;' : 'margin-top: 5%;font-weight: 600;font-size: 24px!important;' }}">
                                    {{ $slider->description }}
                            </div>

                            <br>
                            <a href="{{ route('front.service.show', 1) }}" class="btn btn--custom btn-big-screen btn-mobile" style="font-weight: bolder;padding: 16px 20px!important">
                                {{ __('lang.view_services') }}
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ app()->getLocale() == 'ar'  ? 'rtl-icon' : '' }}">
                                    <path d="M13.7688 3.66881C14.0688 3.36885 14.4757 3.20035 14.9 3.20035C15.3243 3.20035 15.7311 3.36885 16.0312 3.66881L23.2312 10.8688C23.5311 11.1689 23.6996 11.5757 23.6996 12C23.6996 12.4243 23.5311 12.8312 23.2312 13.1312L16.0312 20.3312C15.7294 20.6227 15.3253 20.7839 14.9057 20.7803C14.4862 20.7766 14.0849 20.6084 13.7883 20.3117C13.4916 20.0151 13.3234 19.6138 13.3197 19.1942C13.3161 18.7747 13.4773 18.3706 13.7688 18.0688L18.1 13.6H2.89999C2.47564 13.6 2.06868 13.4314 1.76862 13.1314C1.46856 12.8313 1.29999 12.4244 1.29999 12C1.29999 11.5757 1.46856 11.1687 1.76862 10.8686C2.06868 10.5686 2.47564 10.4 2.89999 10.4H18.1L13.7688 5.93121C13.4688 5.63116 13.3003 5.22427 13.3003 4.80001C13.3003 4.37574 13.4688 3.96885 13.7688 3.66881Z" fill="white"/>
                                    </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</section>

{{-- <section class="home--slider"
    style="background-image: url(http://127.0.0.1:8000/uploads/sliders/-2024-07-08-01-47-04-3307.png); ">
    <div class="slider--text pt-5 position-relative">

        <div class="">
            <div class="row pt-5 mt-5">
                <div class="col-7 p-md-5 ">
                    <div class="p-md-5 p-2 text-title-description-baner" style="
    text-align: justify;
">



                        <div class="pt-3  title-slider-bg-screen" style="">
                            <p>التشاور و الإبداع <span style="color: #e67e23;">من التصاميم</span> الهندسية</p>
                        </div>
                        <p class="text-white title-slider-bg-screen" style="
    font-size: 10px;
">
                            متخصصون في تقديم الاستشارات وإنشاء التصاميم الفنية والهندسية ووضع الخطط والدراسات التي تدعم
                            اتخاذ القرار.
                        </p>

                        <br>
                        <a href="http://127.0.0.1:8000/services/1" class="btn btn--custom btn-big-screen"
                            style="
    /* margin-right: 159px; */
">
                            عرض الخدمات
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7688 3.66881C14.0688 3.36885 14.4757 3.20035 14.9 3.20035C15.3243 3.20035 15.7311 3.36885 16.0312 3.66881L23.2312 10.8688C23.5311 11.1689 23.6996 11.5757 23.6996 12C23.6996 12.4243 23.5311 12.8312 23.2312 13.1312L16.0312 20.3312C15.7294 20.6227 15.3253 20.7839 14.9057 20.7803C14.4862 20.7766 14.0849 20.6084 13.7883 20.3117C13.4916 20.0151 13.3234 19.6138 13.3197 19.1942C13.3161 18.7747 13.4773 18.3706 13.7688 18.0688L18.1 13.6H2.89999C2.47564 13.6 2.06868 13.4314 1.76862 13.1314C1.46856 12.8313 1.29999 12.4244 1.29999 12C1.29999 11.5757 1.46856 11.1687 1.76862 10.8686C2.06868 10.5686 2.47564 10.4 2.89999 10.4H18.1L13.7688 5.93121C13.4688 5.63116 13.3003 5.22427 13.3003 4.80001C13.3003 4.37574 13.4688 3.96885 13.7688 3.66881Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-5 ">
                    <img src="http://127.0.0.1:8000/uploads/sliders/-2024-07-07-09-50-33-9286.png"
                        style="/* width: 109%; */transform: rotateY(181deg);height: 100%;" alt="">

                </div>
            </div>
        </div>
    </div>
</section> --}}
{{--

    IN MOBILE
    btn-mobile :
    padding: 4px 20px;
    text-slider-mobile :
        font-size: 11px;
        font-size: 10px;
        line-height: 17px;
    col-6 and col-6

--}}
