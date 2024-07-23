<div class="container-xxl " dir="{{ isRtl()?'rtl':'ltr' }}" >
    <div class="container ">
        <div class="row pt-5 g-5 mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class=""  src="{{ asset($about->image) }}" alt="" style="object-fit: cover; border-top-left-radius: 500px;
                border-top-right-radius: 500px;">

            </div>
            <div class="col-lg-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4">
                    <div  class="">
                        <span class="main-color fs-5" style="font-size: 24px !important;">{{ __('lang.about') }}</span>
                        <h3 class="fs-2"><b>{{ $about->title }}</b></h3>
                    </div>
                    <p class=" text-dark mb-4"  style="line-height: 36px;font-size: 24px;font-weight: 400;">
                        {{ $about->short_description }}
                    </p>
                   <div class=" mt-4 pt-4">
                    <a href="{{ route('front.about') }}" class="btn btn--custom" style="font-weight: bold;">
                        {{ __('lang.read_more') }}
                        <svg width="25" height="25" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ app()->getLocale() == 'ar'  ? 'rtl-icon' : '' }}">
                            <g clip-path="url(#clip0_69_1847)">
                            <path d="M2.66667 4.5H22.6667C23.6 4.5 24.2667 5.03333 24.8 5.7L32 16.5L24.8 27.3C24.2667 27.9667 23.4667 28.5 22.5333 28.5H2.66667C1.2 28.5 0 27.3 0 25.8333V7.16667C0 5.7 1.2 4.5 2.66667 4.5ZM20 18.5C21.0667 18.5 22 17.5667 22 16.5C22 15.4333 21.0667 14.5 20 14.5C18.9333 14.5 18 15.4333 18 16.5C18 17.5667 18.9333 18.5 20 18.5ZM13.3333 18.5C14.4 18.5 15.3333 17.5667 15.3333 16.5C15.3333 15.4333 14.4 14.5 13.3333 14.5C12.2667 14.5 11.3333 15.4333 11.3333 16.5C11.3333 17.5667 12.2667 18.5 13.3333 18.5ZM6.66667 18.5C7.73333 18.5 8.66667 17.5667 8.66667 16.5C8.66667 15.4333 7.73333 14.5 6.66667 14.5C5.6 14.5 4.66667 15.4333 4.66667 16.5C4.66667 17.5667 5.6 18.5 6.66667 18.5Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_69_1847">
                            <rect width="32" height="32" fill="white" transform="matrix(-1 0 0 1 32 0.5)"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
