<!-- Navbar Start -->
<div class="{{ !request()->routeIs('front.home') || isMobile() || isTablet() ? 'bg-liner' : '' }}">
    <div class="container p-3">
        <nav class="navbar round-100-0 navbar-expand-lg  w3-white sticky-top " style="padding: 10px  15px"
            dir="{{ isRtl() ? 'rtl' : 'ltr' }}">
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                @if (getSettingValue('logo'))
                    <h1 class="m-0"><img class="img-fluid me-3" style="width: 145px"
                            src="{{ asset(getSettingValue('logo')) }}" alt=""></h1>
                @else
                @endif
            </a>
            <button type="button" class="navbar-toggler text-dark" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4 7h16v2H4zm0-4h16v2H4zm0 8h16v2H4zm0 4h16v2H4zm2 4h12v2H6z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">


                <div class="navbar-nav gap-1 align-items-center rounded p{{ isRtl() ? 'e' : 's' }}-5 py-3 py-lg-0">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ request()->routeIs('front.home') ? 'nav-active' : '' }}">{{ __('lang.home') }}</a>
                    <a href="{{ route('front.about') }}"
                        class="nav-item nav-link {{ request()->routeIs('front.about') ? 'nav-active' : '' }}">{{ __('lang.about_us') }}</a>
                    <a href="{{ route('front.service.show', 1) }}"
                        class="nav-item nav-link {{ request()->routeIs('front.service*') ? 'nav-active' : '' }}">{{ __('lang.our_services') }}</a>
                    {{-- <a href="{{ route('front.package') }}" class="nav-item nav-link {{ request()->routeIs('front.package*') ? 'nav-active' : '' }}">{{ __('lang.packages') }}</a>
                    <span class="bg-sec" style="    width: 2px;height: 40px;"></span> --}}
                    <a href="{{ route('front.product') }}"
                        class="nav-item nav-link {{ request()->routeIs('front.product*') ? 'nav-active' : '' }}">{{ __('lang.our_work') }}</a>

                    {{-- <a href="{{ route('front.project') }}" class="nav-item {{ request()->routeIs('front.project*') ? 'active' : '' }} nav-link">{{ __('lang.projects') }}</a> --}}


                    @if (isMobile())
                        <a href="{{ route('front.contact') }}" class="btn btn--custom">
                            <div class="d-flex align-items-center gap-4">
                                <span style="font-weight: 700!imporatnt;">{{ __('lang.get_in_touch') }}</span>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.4853 17.165C31.5347 18.3464 31.1135 19.4993 30.3141 20.3705C29.5146 21.2418 28.4022 21.7604 27.2209 21.8125C27.1518 21.8157 27.0828 21.8173 27.014 21.8173C26.7001 21.8171 26.3872 21.7831 26.0806 21.716C25.1708 23.1207 23.9779 24.32 22.5781 25.2373C21.1783 26.1545 19.6025 26.7695 17.9514 27.0429C17.7561 27.6166 17.3665 28.104 16.8499 28.421C16.3334 28.7379 15.7223 28.8644 15.1224 28.7786C14.5225 28.6928 13.9714 28.4 13.5644 27.951C13.1574 27.502 12.9201 26.9248 12.8934 26.3194C12.8668 25.7139 13.0526 25.1182 13.4186 24.6352C13.7846 24.1522 14.3079 23.8122 14.898 23.6741C15.4881 23.5359 16.1079 23.6083 16.6503 23.8787C17.1926 24.1491 17.6235 24.6005 17.8684 25.1548C20.1929 24.7249 22.2928 23.493 23.8022 21.6737C25.3116 19.8544 26.1347 17.5632 26.1281 15.1993C26.1281 9.61457 21.5846 5.07114 16 5.07114C10.4153 5.07114 5.87183 9.61457 5.87183 15.1993C5.87152 16.9261 6.31286 18.6244 7.15389 20.1326C7.18239 20.1824 7.20379 20.2359 7.21745 20.2916C7.29869 20.5174 7.29 20.7658 7.1932 20.9854C7.09639 21.2049 6.91888 21.3789 6.69739 21.4712C6.15505 21.6994 5.57255 21.817 4.98414 21.8169C4.91489 21.8169 4.84549 21.8153 4.77595 21.8121C3.59513 21.7593 2.48343 21.2404 1.68461 20.3692C0.885785 19.498 0.465044 18.3455 0.514639 17.1646C0.534577 16.6936 0.523452 16.2734 0.512577 15.8671C0.502452 15.4846 0.49189 15.0889 0.509265 14.6761C0.561119 13.523 1.05714 12.4347 1.89342 11.6392C2.72971 10.8436 3.8414 10.4025 4.99564 10.4082C6.84914 6.16745 11.0837 3.19614 16 3.19614C20.9162 3.19614 25.1508 6.16745 27.0043 10.4083C28.1587 10.4017 29.2707 10.8424 30.1072 11.638C30.9436 12.4336 31.4394 13.5222 31.4906 14.6754C31.508 15.0889 31.4975 15.4844 31.4873 15.867C31.4765 16.2734 31.4653 16.6938 31.4853 17.165ZM23.8628 15.1993C23.8623 16.4039 23.5852 17.5922 23.0528 18.6728C22.5204 19.7533 21.7469 20.6972 20.7921 21.4315C19.8372 22.1659 18.7264 22.6711 17.5454 22.9082C16.3644 23.1454 15.1447 23.1081 13.9803 22.7993L10.7978 24.6372C10.6372 24.7299 10.4527 24.773 10.2677 24.7608C10.0826 24.7487 9.90534 24.682 9.75822 24.5691C9.61111 24.4562 9.50077 24.3023 9.44117 24.1267C9.38157 23.9511 9.37538 23.7617 9.42339 23.5826L10.2368 20.5484C8.88977 19.0924 8.14029 17.1827 8.13745 15.1993C8.13745 10.8625 11.6644 7.33464 16 7.33464C20.3355 7.33464 23.8628 10.8625 23.8628 15.1993ZM13.814 15.1993C13.814 14.9506 13.7152 14.7122 13.5394 14.5363C13.3636 14.3605 13.1252 14.2618 12.8765 14.2618H12.875C12.6896 14.2621 12.5085 14.3174 12.3546 14.4206C12.2006 14.5238 12.0808 14.6704 12.0101 14.8417C11.9394 15.013 11.9211 15.2015 11.9574 15.3832C11.9938 15.565 12.0832 15.7319 12.2144 15.8628C12.3456 15.9937 12.5126 16.0828 12.6944 16.1189C12.8763 16.1549 13.0647 16.1362 13.2359 16.0652C13.4071 15.9942 13.5534 15.8741 13.6563 15.7199C13.7593 15.5658 13.8142 15.3846 13.8142 15.1993H13.814ZM16.9376 15.1993C16.9376 15.1686 16.9359 15.1379 16.9326 15.1074C16.9297 15.0768 16.9251 15.0463 16.919 15.0161C16.9134 14.9861 16.9058 14.9565 16.8964 14.9274C16.8877 14.898 16.8771 14.8693 16.8658 14.8405C16.8546 14.8118 16.8408 14.7849 16.8265 14.758C16.8122 14.731 16.7965 14.7047 16.7796 14.6793C16.7625 14.6536 16.7441 14.6287 16.7245 14.6049C16.7053 14.581 16.6846 14.5582 16.6627 14.5368C16.6415 14.5149 16.6183 14.4943 16.5946 14.4743C16.5708 14.4555 16.5458 14.4368 16.5201 14.4199C16.4947 14.4029 16.4685 14.3873 16.4415 14.373C16.4145 14.3586 16.3865 14.3455 16.3583 14.3336C16.3301 14.3219 16.3013 14.3116 16.2721 14.303C16.2136 14.2842 16.1532 14.2721 16.0921 14.2668C16.0003 14.2579 15.9076 14.2623 15.8171 14.2799C15.7869 14.286 15.7571 14.2938 15.7278 14.303C15.6985 14.3116 15.6697 14.3218 15.6415 14.3336C15.6134 14.3455 15.5853 14.3586 15.5584 14.373C15.5315 14.3874 15.5053 14.403 15.4796 14.4199C15.4283 14.4539 15.3806 14.4931 15.3371 14.5368C15.3152 14.5583 15.2945 14.581 15.2752 14.6049C15.2558 14.6287 15.2377 14.6536 15.2209 14.6793C15.2037 14.7047 15.1879 14.731 15.1734 14.758C15.159 14.7848 15.146 14.8123 15.1346 14.8405C15.1227 14.8689 15.1123 14.8979 15.1033 14.9274C15.0946 14.9561 15.0871 14.9861 15.0809 15.0161C15.0747 15.0463 15.0701 15.0768 15.0671 15.1074C15.064 15.138 15.0627 15.1686 15.0627 15.1993C15.0627 15.2299 15.064 15.2611 15.0671 15.2918C15.0702 15.3222 15.0748 15.3524 15.0809 15.3824C15.0871 15.4124 15.0946 15.4424 15.1033 15.4718C15.1123 15.501 15.1227 15.5298 15.1346 15.558C15.146 15.5864 15.159 15.6141 15.1734 15.6411C15.1877 15.668 15.204 15.6943 15.2209 15.7199C15.2377 15.7454 15.2559 15.77 15.2752 15.7936C15.2947 15.8176 15.3154 15.8405 15.3371 15.8624C15.359 15.8836 15.3815 15.9049 15.4059 15.9243C15.4294 15.9438 15.454 15.9619 15.4796 15.9786C15.5053 15.9955 15.5315 16.0118 15.5584 16.0261C15.6127 16.0544 15.6693 16.0779 15.7278 16.0961C15.7571 16.1049 15.7871 16.1124 15.8171 16.1186C15.8773 16.131 15.9387 16.137 16.0002 16.1368C16.2485 16.1361 16.4866 16.0375 16.6627 15.8624C16.7059 15.8185 16.745 15.7708 16.7796 15.7199C16.7965 15.6943 16.8121 15.668 16.8265 15.6411C16.8408 15.6143 16.854 15.5861 16.8658 15.558C16.8777 15.5299 16.8877 15.5005 16.8964 15.4718C16.9057 15.4425 16.9133 15.4126 16.919 15.3824C16.9251 15.3524 16.9296 15.3222 16.9326 15.2918C16.9358 15.261 16.9374 15.2301 16.9375 15.1991L16.9376 15.1993ZM20.0626 15.1993C20.0626 14.9506 19.9639 14.7122 19.7881 14.5363C19.6122 14.3605 19.3738 14.2618 19.1251 14.2618H19.1233C18.938 14.2621 18.7569 14.3174 18.603 14.4206C18.449 14.5239 18.3292 14.6704 18.2585 14.8418C18.1878 15.0131 18.1695 15.2015 18.2059 15.3833C18.2423 15.565 18.3317 15.7319 18.4629 15.8628C18.5941 15.9937 18.7611 16.0829 18.9429 16.1189C19.1247 16.1549 19.3131 16.1362 19.4843 16.0652C19.6555 15.9942 19.8018 15.8741 19.9048 15.7199C20.0077 15.5658 20.0626 15.3846 20.0626 15.1993Z"
                                        fill="white" />
                                </svg>

                            </div>

                        </a>
                        <div class=" nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                                <span class=""> {{ App::getLocale() == 'en' ? 'EN' : 'AR' }} </span>
                            </a>
                            <div class="dropdown-menu p-0" style="min-width: 225px">
                                <a class="dropdown-item w3-border-bottom p-3" href="{{ route('front.lang') }}?lang=en">
                                    <i>English</i>
                                </a>
                                <a class="dropdown-item p-3" href="{{ route('front.lang') }}?lang=ar">
                                    <i>العربية</i>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            @if (!isMobile())
                <a href="{{ route('front.contact') }}" class="btn btn--custom">
                    <div class="d-flex align-items-center gap-4">
                        <span style="font-weight: 700;">{{ __('lang.get_in_touch') }}</span>
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M31.4853 17.165C31.5347 18.3464 31.1135 19.4993 30.3141 20.3705C29.5146 21.2418 28.4022 21.7604 27.2209 21.8125C27.1518 21.8157 27.0828 21.8173 27.014 21.8173C26.7001 21.8171 26.3872 21.7831 26.0806 21.716C25.1708 23.1207 23.9779 24.32 22.5781 25.2373C21.1783 26.1545 19.6025 26.7695 17.9514 27.0429C17.7561 27.6166 17.3665 28.104 16.8499 28.421C16.3334 28.7379 15.7223 28.8644 15.1224 28.7786C14.5225 28.6928 13.9714 28.4 13.5644 27.951C13.1574 27.502 12.9201 26.9248 12.8934 26.3194C12.8668 25.7139 13.0526 25.1182 13.4186 24.6352C13.7846 24.1522 14.3079 23.8122 14.898 23.6741C15.4881 23.5359 16.1079 23.6083 16.6503 23.8787C17.1926 24.1491 17.6235 24.6005 17.8684 25.1548C20.1929 24.7249 22.2928 23.493 23.8022 21.6737C25.3116 19.8544 26.1347 17.5632 26.1281 15.1993C26.1281 9.61457 21.5846 5.07114 16 5.07114C10.4153 5.07114 5.87183 9.61457 5.87183 15.1993C5.87152 16.9261 6.31286 18.6244 7.15389 20.1326C7.18239 20.1824 7.20379 20.2359 7.21745 20.2916C7.29869 20.5174 7.29 20.7658 7.1932 20.9854C7.09639 21.2049 6.91888 21.3789 6.69739 21.4712C6.15505 21.6994 5.57255 21.817 4.98414 21.8169C4.91489 21.8169 4.84549 21.8153 4.77595 21.8121C3.59513 21.7593 2.48343 21.2404 1.68461 20.3692C0.885785 19.498 0.465044 18.3455 0.514639 17.1646C0.534577 16.6936 0.523452 16.2734 0.512577 15.8671C0.502452 15.4846 0.49189 15.0889 0.509265 14.6761C0.561119 13.523 1.05714 12.4347 1.89342 11.6392C2.72971 10.8436 3.8414 10.4025 4.99564 10.4082C6.84914 6.16745 11.0837 3.19614 16 3.19614C20.9162 3.19614 25.1508 6.16745 27.0043 10.4083C28.1587 10.4017 29.2707 10.8424 30.1072 11.638C30.9436 12.4336 31.4394 13.5222 31.4906 14.6754C31.508 15.0889 31.4975 15.4844 31.4873 15.867C31.4765 16.2734 31.4653 16.6938 31.4853 17.165ZM23.8628 15.1993C23.8623 16.4039 23.5852 17.5922 23.0528 18.6728C22.5204 19.7533 21.7469 20.6972 20.7921 21.4315C19.8372 22.1659 18.7264 22.6711 17.5454 22.9082C16.3644 23.1454 15.1447 23.1081 13.9803 22.7993L10.7978 24.6372C10.6372 24.7299 10.4527 24.773 10.2677 24.7608C10.0826 24.7487 9.90534 24.682 9.75822 24.5691C9.61111 24.4562 9.50077 24.3023 9.44117 24.1267C9.38157 23.9511 9.37538 23.7617 9.42339 23.5826L10.2368 20.5484C8.88977 19.0924 8.14029 17.1827 8.13745 15.1993C8.13745 10.8625 11.6644 7.33464 16 7.33464C20.3355 7.33464 23.8628 10.8625 23.8628 15.1993ZM13.814 15.1993C13.814 14.9506 13.7152 14.7122 13.5394 14.5363C13.3636 14.3605 13.1252 14.2618 12.8765 14.2618H12.875C12.6896 14.2621 12.5085 14.3174 12.3546 14.4206C12.2006 14.5238 12.0808 14.6704 12.0101 14.8417C11.9394 15.013 11.9211 15.2015 11.9574 15.3832C11.9938 15.565 12.0832 15.7319 12.2144 15.8628C12.3456 15.9937 12.5126 16.0828 12.6944 16.1189C12.8763 16.1549 13.0647 16.1362 13.2359 16.0652C13.4071 15.9942 13.5534 15.8741 13.6563 15.7199C13.7593 15.5658 13.8142 15.3846 13.8142 15.1993H13.814ZM16.9376 15.1993C16.9376 15.1686 16.9359 15.1379 16.9326 15.1074C16.9297 15.0768 16.9251 15.0463 16.919 15.0161C16.9134 14.9861 16.9058 14.9565 16.8964 14.9274C16.8877 14.898 16.8771 14.8693 16.8658 14.8405C16.8546 14.8118 16.8408 14.7849 16.8265 14.758C16.8122 14.731 16.7965 14.7047 16.7796 14.6793C16.7625 14.6536 16.7441 14.6287 16.7245 14.6049C16.7053 14.581 16.6846 14.5582 16.6627 14.5368C16.6415 14.5149 16.6183 14.4943 16.5946 14.4743C16.5708 14.4555 16.5458 14.4368 16.5201 14.4199C16.4947 14.4029 16.4685 14.3873 16.4415 14.373C16.4145 14.3586 16.3865 14.3455 16.3583 14.3336C16.3301 14.3219 16.3013 14.3116 16.2721 14.303C16.2136 14.2842 16.1532 14.2721 16.0921 14.2668C16.0003 14.2579 15.9076 14.2623 15.8171 14.2799C15.7869 14.286 15.7571 14.2938 15.7278 14.303C15.6985 14.3116 15.6697 14.3218 15.6415 14.3336C15.6134 14.3455 15.5853 14.3586 15.5584 14.373C15.5315 14.3874 15.5053 14.403 15.4796 14.4199C15.4283 14.4539 15.3806 14.4931 15.3371 14.5368C15.3152 14.5583 15.2945 14.581 15.2752 14.6049C15.2558 14.6287 15.2377 14.6536 15.2209 14.6793C15.2037 14.7047 15.1879 14.731 15.1734 14.758C15.159 14.7848 15.146 14.8123 15.1346 14.8405C15.1227 14.8689 15.1123 14.8979 15.1033 14.9274C15.0946 14.9561 15.0871 14.9861 15.0809 15.0161C15.0747 15.0463 15.0701 15.0768 15.0671 15.1074C15.064 15.138 15.0627 15.1686 15.0627 15.1993C15.0627 15.2299 15.064 15.2611 15.0671 15.2918C15.0702 15.3222 15.0748 15.3524 15.0809 15.3824C15.0871 15.4124 15.0946 15.4424 15.1033 15.4718C15.1123 15.501 15.1227 15.5298 15.1346 15.558C15.146 15.5864 15.159 15.6141 15.1734 15.6411C15.1877 15.668 15.204 15.6943 15.2209 15.7199C15.2377 15.7454 15.2559 15.77 15.2752 15.7936C15.2947 15.8176 15.3154 15.8405 15.3371 15.8624C15.359 15.8836 15.3815 15.9049 15.4059 15.9243C15.4294 15.9438 15.454 15.9619 15.4796 15.9786C15.5053 15.9955 15.5315 16.0118 15.5584 16.0261C15.6127 16.0544 15.6693 16.0779 15.7278 16.0961C15.7571 16.1049 15.7871 16.1124 15.8171 16.1186C15.8773 16.131 15.9387 16.137 16.0002 16.1368C16.2485 16.1361 16.4866 16.0375 16.6627 15.8624C16.7059 15.8185 16.745 15.7708 16.7796 15.7199C16.7965 15.6943 16.8121 15.668 16.8265 15.6411C16.8408 15.6143 16.854 15.5861 16.8658 15.558C16.8777 15.5299 16.8877 15.5005 16.8964 15.4718C16.9057 15.4425 16.9133 15.4126 16.919 15.3824C16.9251 15.3524 16.9296 15.3222 16.9326 15.2918C16.9358 15.261 16.9374 15.2301 16.9375 15.1991L16.9376 15.1993ZM20.0626 15.1993C20.0626 14.9506 19.9639 14.7122 19.7881 14.5363C19.6122 14.3605 19.3738 14.2618 19.1251 14.2618H19.1233C18.938 14.2621 18.7569 14.3174 18.603 14.4206C18.449 14.5239 18.3292 14.6704 18.2585 14.8418C18.1878 15.0131 18.1695 15.2015 18.2059 15.3833C18.2423 15.565 18.3317 15.7319 18.4629 15.8628C18.5941 15.9937 18.7611 16.0829 18.9429 16.1189C19.1247 16.1549 19.3131 16.1362 19.4843 16.0652C19.6555 15.9942 19.8018 15.8741 19.9048 15.7199C20.0077 15.5658 20.0626 15.3846 20.0626 15.1993Z"
                                fill="white" />
                        </svg>

                    </div>

                </a>

                <div class=" nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                        <span class=""> {{ App::getLocale() == 'en' ? 'EN' : 'AR' }} </span>
                    </a>
                    <div class="dropdown-menu p-0" style="min-width: 225px">
                        <a class="dropdown-item w3-border-bottom p-3" href="{{ route('front.lang') }}?lang=en">
                            <i>English</i>
                        </a>
                        <a class="dropdown-item p-3" href="{{ route('front.lang') }}?lang=ar">
                            <i>العربية</i>
                        </a>
                    </div>
                </div>
            @endif
        </nav>
    </div>
</div>
<!-- Navbar End -->
<!-- ***** Header Area Start ***** -->
<!-- ***** Header Area End ***** -->
