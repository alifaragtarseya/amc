@extends('front.layouts.master')
@section('css')
    <style>
        .pra p {
            /* margin: auto; */
            width: 90%;
            color: black;
            font-size: 20px;
            font-weight: 600;

        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 pt-5" style="background-image: url({{ asset($metaBanner->image) }});"
        data-wow-delay="0.1s">
        <div class="overlay-banner"></div>

        <div class="border pt-5 title--banner" >
            <b class="text-center p-2 w3-round-xxlarge  text-white  mb-4 " style="    font-size: x-large;">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
            <br>
            <svg width="167" height="8" viewBox="0 0 167 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="167" height="8" fill="url(#paint0_linear_64_701)"/>
                <defs>
                <linearGradient id="paint0_linear_64_701" x1="0" y1="4" x2="167" y2="4" gradientUnits="userSpaceOnUse">
                <stop stop-color="#B58050"/>
                <stop offset="1" stop-color="#4F3823"/>
                </linearGradient>
                </defs>
            </svg>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
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
                        <br>
                        <p class=" text-dark" style="line-height: 36px;font-size: 20px;font-weight: 400;">
                            {{ $about->short_description }}
                        </p>
                        <div class="decription--about" >
                            {!! $about->description !!}
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>


    @include('front.home.counters', ['counters' => $counters])

    <div class="pt-5 mb-5 container">
        <div class="row">
            <div class="col-md-6 mb-4 ">
                <div class=" card  mission-item p-4 "
                    style="border: 1px solid #B58050!important; border-radius: 12px!important; height: 100%;">
                    <div class="row ">
                        <div class="col-lg-2 col-4 mb-3 ">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" fill="#B58050"
                                    stroke="#B58050" />
                                <g clip-path="url(#clip0_66_796)">
                                    <path
                                        d="M36.1029 24.8329C36.0208 24.8331 35.9394 24.8171 35.8635 24.7858C35.7876 24.7544 35.7186 24.7084 35.6605 24.6503C35.6024 24.5922 35.5564 24.5232 35.525 24.4473C35.4937 24.3714 35.4777 24.29 35.4779 24.2079V21.5515H32.0974C31.7511 21.5515 31.4724 21.2728 31.4724 20.9264C31.4724 20.58 31.751 20.3014 32.0974 20.3014H36.1029C36.1851 20.3012 36.2664 20.3172 36.3423 20.3485C36.4183 20.3799 36.4873 20.4259 36.5453 20.484C36.6034 20.5421 36.6495 20.6111 36.6808 20.687C36.7121 20.7629 36.7282 20.8443 36.728 20.9264V24.2079C36.7279 24.5517 36.4493 24.8329 36.1029 24.8329ZM36.1029 48.2406H15.1902C15.1081 48.2407 15.0267 48.2247 14.9508 48.1934C14.8749 48.162 14.8059 48.116 14.7478 48.0579C14.6897 47.9998 14.6437 47.9309 14.6124 47.8549C14.581 47.779 14.565 47.6976 14.5652 47.6155V20.9239C14.565 20.8417 14.581 20.7604 14.6124 20.6845C14.6437 20.6085 14.6897 20.5395 14.7478 20.4815C14.8059 20.4234 14.8749 20.3773 14.9508 20.346C15.0267 20.3147 15.1081 20.2986 15.1902 20.2988H19.1957C19.5421 20.2988 19.8208 20.5775 19.8208 20.9239C19.8208 21.2703 19.5421 21.5489 19.1957 21.5489H15.8152V46.9879H35.4779V44.618C35.4779 44.2717 35.7565 43.993 36.1029 43.993C36.4493 43.993 36.728 44.2716 36.728 44.618V47.613C36.7279 47.9593 36.4493 48.2406 36.1029 48.2406Z"
                                        fill="white" />
                                    <path
                                        d="M32.0977 22.7053H19.1959C19.1137 22.7055 19.0324 22.6894 18.9564 22.6581C18.8805 22.6267 18.8115 22.5807 18.7534 22.5226C18.6954 22.4645 18.6493 22.3956 18.618 22.3196C18.5866 22.2437 18.5706 22.1623 18.5708 22.0802V17.4184C18.5708 16.4444 19.3625 15.6527 20.3365 15.6527H22.2116C22.558 15.6527 22.8367 15.9313 22.8367 16.2778C22.8367 16.6242 22.5581 16.9028 22.2116 16.9028H20.3365C20.0526 16.9028 19.8209 17.1346 19.8209 17.4184V21.4551H31.4726V17.4184C31.4726 17.1345 31.2408 16.9028 30.957 16.9028H29.0819C28.7355 16.9028 28.4568 16.6242 28.4568 16.2778C28.4568 15.9313 28.7355 15.6527 29.0819 15.6527H30.957C31.931 15.6527 32.7227 16.4444 32.7227 17.4184V22.0802C32.7229 22.1623 32.7069 22.2437 32.6755 22.3196C32.6442 22.3955 32.5981 22.4645 32.5401 22.5226C32.482 22.5807 32.413 22.6267 32.3371 22.6581C32.2612 22.6894 32.1798 22.7054 32.0977 22.7053Z"
                                        fill="white" />
                                    <path
                                        d="M38.6708 50.8058H12.6251C12.5429 50.806 12.4616 50.79 12.3856 50.7586C12.3097 50.7273 12.2407 50.6812 12.1826 50.6232C12.1246 50.5651 12.0785 50.4961 12.0472 50.4202C12.0158 50.3442 11.9998 50.2629 12 50.1807V18.3586C11.9998 18.2764 12.0158 18.1951 12.0472 18.1191C12.0785 18.0432 12.1246 17.9742 12.1826 17.9162C12.2407 17.8581 12.3097 17.812 12.3856 17.7807C12.4616 17.7494 12.5429 17.7333 12.6251 17.7335H19.1957C19.2779 17.7333 19.3592 17.7494 19.4352 17.7807C19.5111 17.812 19.5801 17.8581 19.6381 17.9162C19.6962 17.9742 19.7423 18.0432 19.7736 18.1191C19.8049 18.1951 19.821 18.2764 19.8208 18.3586C19.821 18.4407 19.8049 18.5221 19.7736 18.598C19.7423 18.6739 19.6962 18.7429 19.6381 18.801C19.5801 18.8591 19.5111 18.9051 19.4352 18.9365C19.3592 18.9678 19.2779 18.9838 19.1957 18.9836H13.25V49.5558H38.0457V44.7429C38.0457 44.3966 38.3244 44.1179 38.6708 44.1179C39.0172 44.1179 39.2959 44.3965 39.2959 44.7429V50.1807C39.2959 50.5245 39.0146 50.8058 38.6708 50.8058ZM38.6708 24.7105C38.5887 24.7107 38.5073 24.6947 38.4314 24.6634C38.3554 24.632 38.2865 24.586 38.2284 24.5279C38.1703 24.4698 38.1243 24.4008 38.0929 24.3249C38.0616 24.249 38.0455 24.1676 38.0457 24.0855V18.9836H32.0975C32.0154 18.9838 31.934 18.9678 31.8581 18.9365C31.7822 18.9051 31.7132 18.8591 31.6551 18.801C31.597 18.7429 31.551 18.6739 31.5197 18.598C31.4883 18.5221 31.4723 18.4407 31.4725 18.3586C31.4723 18.2764 31.4883 18.1951 31.5197 18.1191C31.551 18.0432 31.597 17.9742 31.6551 17.9162C31.7132 17.8581 31.7822 17.812 31.8581 17.7807C31.934 17.7494 32.0154 17.7333 32.0975 17.7335H38.6682C38.7503 17.7333 38.8317 17.7494 38.9076 17.7807C38.9836 17.812 39.0525 17.8581 39.1106 17.9162C39.1687 17.9742 39.2147 18.0432 39.2461 18.1191C39.2774 18.1951 39.2934 18.2764 39.2933 18.3586V24.0855C39.2959 24.4292 39.0146 24.7105 38.6708 24.7105ZM29.0818 18.2648H22.2116C22.1294 18.265 22.0481 18.249 21.9721 18.2177C21.8962 18.1863 21.8272 18.1403 21.7692 18.0822C21.7111 18.0241 21.665 17.9551 21.6337 17.8792C21.6024 17.8033 21.5863 17.7219 21.5865 17.6398V13.8193C21.5863 13.7371 21.6024 13.6558 21.6337 13.5798C21.665 13.5039 21.7111 13.4349 21.7692 13.3769C21.8272 13.3188 21.8962 13.2727 21.9721 13.2414C22.0481 13.2101 22.1294 13.194 22.2116 13.1942H29.0818C29.1639 13.194 29.2453 13.2101 29.3212 13.2414C29.3971 13.2727 29.4661 13.3188 29.5242 13.3769C29.5823 13.4349 29.6283 13.5039 29.6596 13.5798C29.691 13.6558 29.707 13.7371 29.7068 13.8193V17.6398C29.707 17.7219 29.691 17.8033 29.6596 17.8792C29.6283 17.9551 29.5822 18.0241 29.5242 18.0822C29.4661 18.1403 29.3971 18.1863 29.3212 18.2176C29.2453 18.249 29.1639 18.265 29.0818 18.2648ZM22.8366 17.0147H28.4567V14.4443H22.8366V17.0147Z"
                                        fill="white" />
                                    <path
                                        d="M30.2069 28.0804H23.6519C23.5697 28.0806 23.4883 28.0646 23.4124 28.0332C23.3365 28.0019 23.2675 27.9559 23.2094 27.8978C23.1514 27.8397 23.1053 27.7707 23.074 27.6948C23.0426 27.6189 23.0266 27.5375 23.0268 27.4554C23.0266 27.3732 23.0426 27.2919 23.074 27.2159C23.1053 27.14 23.1514 27.071 23.2094 27.0129C23.2675 26.9549 23.3365 26.9088 23.4124 26.8775C23.4883 26.8461 23.5697 26.8301 23.6519 26.8303H30.2069C30.289 26.8301 30.3704 26.8461 30.4463 26.8775C30.5223 26.9088 30.5912 26.9549 30.6493 27.0129C30.7074 27.071 30.7534 27.14 30.7848 27.2159C30.8161 27.2919 30.8322 27.3732 30.832 27.4554C30.8319 27.8018 30.5507 28.0804 30.2069 28.0804ZM19.4172 28.5518C19.335 28.552 19.2536 28.5361 19.1777 28.5048C19.1017 28.4735 19.0327 28.4275 18.9745 28.3695L18.1619 27.557C17.9171 27.3122 17.9171 26.9163 18.1619 26.6741C18.4067 26.4319 18.8025 26.4293 19.0447 26.6741L19.4146 27.044L20.8548 25.6038C21.0996 25.359 21.4955 25.359 21.7377 25.6038C21.9825 25.8486 21.9825 26.2444 21.7377 26.4866L19.8548 28.3695C19.7427 28.4841 19.5839 28.5518 19.4172 28.5518ZM27.6989 33.1276H23.6518C23.3054 33.1276 23.0267 32.849 23.0267 32.5026C23.0267 32.1561 23.3053 31.8775 23.6518 31.8775H27.6989C28.0452 31.8775 28.3239 32.1561 28.3239 32.5026C28.3239 32.849 28.0427 33.1276 27.6989 33.1276ZM19.4172 33.5964C19.335 33.5966 19.2536 33.5807 19.1777 33.5494C19.1017 33.5181 19.0327 33.4721 18.9745 33.4141L18.162 32.6016C17.9171 32.3568 17.9171 31.9609 18.162 31.7187C18.4068 31.4739 18.8026 31.4739 19.0448 31.7187L19.4147 32.0886L20.8549 30.6484C21.0997 30.4036 21.4955 30.4036 21.7377 30.6484C21.9825 30.8932 21.9825 31.289 21.7377 31.5312L19.8548 33.4141C19.7427 33.5313 19.5839 33.5964 19.4172 33.5964ZM28.0036 38.1722H23.6518C23.3054 38.1722 23.0267 37.8935 23.0267 37.5471C23.0267 37.2007 23.3053 36.922 23.6518 36.922H28.0036C28.35 36.922 28.6287 37.2007 28.6287 37.5471C28.6287 37.8935 28.35 38.1722 28.0036 38.1722ZM19.4172 38.6435C19.335 38.6438 19.2536 38.6278 19.1777 38.5965C19.1017 38.5652 19.0327 38.5193 18.9745 38.4613L18.1619 37.6487C17.9171 37.4039 17.9171 37.0081 18.1619 36.7659C18.4067 36.5211 18.8025 36.5211 19.0447 36.7659L19.4146 37.1357L20.8548 35.6955C21.0996 35.4507 21.4955 35.4507 21.7377 35.6955C21.9825 35.9403 21.9825 36.3362 21.7377 36.5784L19.8548 38.4613C19.7427 38.5784 19.5839 38.6435 19.4172 38.6435ZM31.5247 43.2194H23.6518C23.3054 43.2194 23.0267 42.9407 23.0267 42.5943C23.0267 42.2479 23.3053 41.9692 23.6518 41.9692H31.5247C31.871 41.9692 32.1497 42.2479 32.1497 42.5943C32.1497 42.9407 31.871 43.2194 31.5247 43.2194ZM19.4172 43.6908C19.335 43.691 19.2536 43.675 19.1777 43.6437C19.1017 43.6124 19.0327 43.5665 18.9745 43.5085L18.162 42.6959C17.9171 42.4511 17.9171 42.0553 18.162 41.8131C18.4068 41.5683 18.8026 41.5683 19.0448 41.8131L19.4147 42.1829L20.8549 40.7427C21.0997 40.4979 21.4955 40.4979 21.7377 40.7427C21.9825 40.9875 21.9825 41.3834 21.7377 41.6256L19.8548 43.5085C19.7427 43.623 19.5839 43.6908 19.4172 43.6908Z"
                                        fill="white" />
                                    <path
                                        d="M37.8793 45.3967C36.3975 45.3967 34.9573 45.1049 33.603 44.532C32.2956 43.9799 31.1211 43.1881 30.1132 42.1777C29.1054 41.1699 28.3137 39.9953 27.7589 38.6879C27.186 37.3337 26.8943 35.8961 26.8943 34.4116C26.8943 32.9272 27.186 31.4896 27.7589 30.1354C28.3111 28.828 29.1028 27.6534 30.1132 26.6456C31.1237 25.6378 32.2956 24.846 33.603 24.2913C34.9573 23.7183 36.3949 23.4266 37.8793 23.4266C39.3637 23.4266 40.8013 23.7183 42.1556 24.2913C43.4629 24.8434 44.6375 25.6351 45.6454 26.6456C46.6532 27.6534 47.4449 28.828 47.9996 30.1354C48.5726 31.4896 48.8643 32.9272 48.8643 34.4116C48.8643 35.8961 48.5726 37.3337 47.9996 38.6879C47.4475 39.9953 46.6558 41.1699 45.6454 42.1777C44.6375 43.1855 43.4629 43.9773 42.1556 44.532C40.8013 45.1075 39.3611 45.3967 37.8793 45.3967ZM37.8793 24.6793C32.5118 24.6793 28.1469 29.0467 28.1469 34.4142C28.1469 39.7818 32.5144 44.1466 37.8793 44.1466C43.2442 44.1466 47.6117 39.7792 47.6117 34.4142C47.6117 29.0493 43.2468 24.6793 37.8793 24.6793Z"
                                        fill="white" />
                                    <path
                                        d="M37.8793 41.9172C35.8739 41.9172 33.991 41.1359 32.5742 39.7192C31.1575 38.3024 30.3762 36.4169 30.3762 34.4142C30.3762 32.4114 31.1575 30.5259 32.5742 29.1092C33.991 27.6924 35.8765 26.9111 37.8793 26.9111C39.882 26.9111 41.7675 27.6925 43.1843 29.1092C44.6011 30.5259 45.3823 32.4114 45.3823 34.4142C45.3823 36.4169 44.601 38.3024 43.1843 39.7192C41.7675 41.1359 39.8845 41.9172 37.8793 41.9172ZM37.8793 28.1612C36.2099 28.1612 34.6395 28.8122 33.4571 29.992C32.2773 31.1718 31.6263 32.7422 31.6263 34.4142C31.6263 36.0862 32.2773 37.6539 33.4571 38.8363C34.6369 40.0161 36.2073 40.6672 37.8793 40.6672C39.5513 40.6672 41.119 40.0161 42.3014 38.8363C43.4838 37.6565 44.1323 36.0862 44.1323 34.4142C44.1323 32.7422 43.4812 31.1744 42.3014 29.992C41.119 28.8123 39.5512 28.1612 37.8793 28.1612Z"
                                        fill="white" />
                                    <path
                                        d="M37.8792 38.4354C37.3427 38.4354 36.8245 38.3338 36.3375 38.1332C35.8531 37.9327 35.413 37.6384 35.0353 37.2582C34.6551 36.8779 34.3608 36.4404 34.1603 35.956C33.9598 35.4716 33.8582 34.9534 33.8582 34.4143C33.8582 33.8752 33.9597 33.3595 34.1603 32.8725C34.3608 32.3881 34.6551 31.948 35.0353 31.5704C35.4156 31.1901 35.8531 30.8959 36.3375 30.6953C36.8219 30.4948 37.3401 30.3932 37.8792 30.3932C38.4184 30.3932 38.934 30.4947 39.421 30.6953C39.9054 30.8958 40.3455 31.1901 40.7231 31.5704C41.1034 31.9506 41.3976 32.3881 41.5982 32.8725C41.7987 33.3569 41.9003 33.8752 41.9003 34.4143C41.9003 34.9534 41.7988 35.469 41.5982 35.956C41.3977 36.4404 41.1034 36.8805 40.7231 37.2582C40.3429 37.6384 39.9054 37.9327 39.421 38.1332C38.9366 38.3337 38.4183 38.4354 37.8792 38.4354ZM37.8792 31.6407C37.5068 31.6407 37.15 31.711 36.8167 31.8491C36.4833 31.9871 36.1812 32.1902 35.9182 32.4532C35.6552 32.7163 35.452 33.0184 35.314 33.3517C35.176 33.6851 35.1057 34.0419 35.1057 34.4143C35.1057 34.7866 35.176 35.1435 35.314 35.4768C35.4521 35.8102 35.6552 36.1123 35.9182 36.3753C36.1812 36.6383 36.4833 36.8415 36.8167 36.9795C37.15 37.1174 37.5069 37.1878 37.8792 37.1878C38.2517 37.1878 38.6084 37.1175 38.9418 36.9795C39.2751 36.8414 39.5772 36.6383 39.8403 36.3753C40.1033 36.1123 40.3065 35.8102 40.4444 35.4768C40.5825 35.1435 40.6528 34.7866 40.6528 34.4143C40.6528 34.0419 40.5825 33.6851 40.4444 33.3517C40.3064 33.0184 40.1033 32.7163 39.8403 32.4532C39.5772 32.1902 39.2751 31.9871 38.9418 31.8491C38.6084 31.7111 38.2516 31.6407 37.8792 31.6407Z"
                                        fill="white" />
                                    <path
                                        d="M37.8791 35.0393C37.7969 35.0395 37.7155 35.0235 37.6395 34.9922C37.5636 34.9609 37.4945 34.915 37.4363 34.857C37.1915 34.6122 37.1915 34.2163 37.4363 33.9741L47.1947 24.2131C47.4395 23.9683 47.8353 23.9683 48.0775 24.2131C48.3223 24.4579 48.3223 24.8538 48.0775 25.096L38.3192 34.8543C38.2619 34.913 38.1935 34.9597 38.1179 34.9914C38.0423 35.0232 37.9611 35.0395 37.8791 35.0393Z"
                                        fill="white" />
                                    <path
                                        d="M47.6376 25.2809C47.4717 25.2808 47.3126 25.2153 47.1948 25.0986C47.1324 25.0361 47.0839 24.9611 47.0525 24.8785C47.0211 24.7959 47.0074 24.7076 47.0125 24.6194L47.1219 22.7599C47.1297 22.6063 47.1948 22.463 47.3041 22.3537L49.1844 20.4734C49.3667 20.2911 49.6454 20.239 49.8824 20.3457C50.1194 20.4525 50.2653 20.6947 50.2497 20.9526L50.1819 22.1088L51.3382 22.0411C51.4647 22.0333 51.5906 22.0643 51.6991 22.1299C51.8075 22.1955 51.8933 22.2927 51.9451 22.4084C51.997 22.5239 52.0126 22.6526 51.9898 22.7772C51.967 22.9018 51.9069 23.0166 51.8174 23.1064L49.9371 24.9866C49.8278 25.096 49.6845 25.1585 49.5309 25.1689L47.6714 25.2783C47.6637 25.2809 47.6507 25.2809 47.6376 25.2809ZM48.3564 23.0698L48.3016 23.9891L49.2209 23.9343L49.7705 23.3848L49.5517 23.3978C49.4634 23.4033 49.3751 23.3898 49.2924 23.3584C49.2098 23.3269 49.1348 23.2783 49.0725 23.2155C49.0101 23.153 48.9616 23.078 48.9302 22.9954C48.8987 22.9128 48.8851 22.8246 48.8902 22.7363L48.9032 22.5176L48.3564 23.0698Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_66_796">
                                        <rect width="40" height="40" fill="white" transform="translate(12 12)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class=" col-lg-10 col-12">
                            <h3 class="" style="font-weight: bold;">{{ __('lang.our_vision') }}</h3>
                            <div class="text-dark " style="font-size: 20px">
                                {{ getSettingValue('our_vision_' . app()->getLocale()) }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-6 mb-4  ">
                <div class=" card  mission-item p-4 "
                    style="border: 1px solid #B58050!important; border-radius: 12px!important; height: 100%;">
                    <div class="row ">
                        <div class="col-lg-2 col-4 mb-3">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" fill="#B58050"
                                    stroke="#B58050" />
                                <g clip-path="url(#clip0_66_915)">
                                    <path
                                        d="M51.5417 29.3409L44.7295 21.6325C44.6562 21.5495 44.5661 21.4831 44.4652 21.4376C44.3642 21.3921 44.2548 21.3686 44.1441 21.3686H19.8559C19.7452 21.3686 19.6357 21.3921 19.5348 21.4376C19.4339 21.4831 19.3438 21.5495 19.2705 21.6325L12.4582 29.3409C12.3898 29.4183 12.3374 29.5085 12.3041 29.6063C12.2709 29.704 12.2573 29.8075 12.2642 29.9105C12.2711 30.0136 12.2984 30.1142 12.3445 30.2067C12.3906 30.2991 12.4546 30.3815 12.5327 30.4491C12.5343 30.4509 12.5356 30.4529 12.5372 30.4548L31.4155 51.7372C31.4888 51.8198 31.5788 51.886 31.6795 51.9313C31.7803 51.9766 31.8895 52.0001 32 52.0001C32.1104 52.0001 32.2196 51.9766 32.3204 51.9313C32.4211 51.886 32.5111 51.8198 32.5844 51.7372L51.4627 30.4548C51.4643 30.453 51.4657 30.4509 51.4672 30.4491C51.5453 30.3815 51.6093 30.2991 51.6554 30.2067C51.7015 30.1142 51.7288 30.0136 51.7357 29.9105C51.7426 29.8075 51.729 29.704 51.6958 29.6063C51.6625 29.5085 51.6101 29.4183 51.5417 29.3409ZM42.7588 22.931L39.2868 28.5282L33.7228 22.931H42.7588ZM37.6292 29.077H26.3707L32 23.4142L37.6292 29.077ZM30.2771 22.9311L24.7131 28.5283L21.2411 22.9311H30.2771ZM19.7346 23.4667L23.2147 29.077H14.7766L19.7346 23.4667ZM14.7897 30.6395H24.0224L30.4002 48.238L14.7897 30.6395ZM33.6287 48.2053L38.0848 36.145C38.2343 35.7402 38.0275 35.2909 37.6228 35.1414C37.2178 34.9917 36.7686 35.1987 36.6192 35.6034L32.0071 48.086L25.6843 30.6395H49.2102L33.6287 48.2053ZM40.7852 29.077L44.2653 23.4667L49.2233 29.077H40.7852ZM32 12C31.5685 12 31.2187 12.3498 31.2187 12.7812V16.8057C31.2187 17.2372 31.5685 17.587 32 17.587C32.4314 17.587 32.7812 17.2372 32.7812 16.8057V12.7812C32.7812 12.3498 32.4314 12 32 12ZM39.1142 15.0878C38.8091 14.7827 38.3146 14.7827 38.0093 15.0878L35.1635 17.9335C34.8584 18.2386 34.8584 18.7333 35.1635 19.0384C35.236 19.111 35.3221 19.1686 35.4169 19.2079C35.5117 19.2472 35.6133 19.2673 35.716 19.2672C35.8186 19.2673 35.9202 19.2472 36.015 19.2079C36.1098 19.1686 36.1959 19.111 36.2684 19.0384L39.1142 16.1927C39.4193 15.8876 39.4193 15.3929 39.1142 15.0878ZM28.6842 17.9335L25.8385 15.0878C25.5335 14.7827 25.0389 14.7827 24.7335 15.0878C24.4285 15.3929 24.4285 15.8876 24.7335 16.1927L27.5793 19.0384C27.7319 19.1909 27.9318 19.2672 28.1317 19.2672C28.3317 19.2672 28.5316 19.1909 28.6842 19.0384C28.9892 18.7333 28.9892 18.2386 28.6842 17.9335Z"
                                        fill="white" />
                                    <path
                                        d="M38.3616 33.7468C38.793 33.7468 39.1428 33.397 39.1428 32.9656C39.1428 32.5341 38.793 32.1843 38.3616 32.1843C37.9301 32.1843 37.5803 32.5341 37.5803 32.9656C37.5803 33.397 37.9301 33.7468 38.3616 33.7468Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_66_915">
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(12 12)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class=" col-lg-10 col-12">
                            <h3 class="" style="font-weight: bold;">{{ __('lang.our_value') }}</h3>
                            <div class="text-dark " style="font-size: 20px">
                                {{ getSettingValue('rate_us_' . app()->getLocale()) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 ">

                <div class=" card  mission-item p-4 "
                    style="border: 1px solid #B58050!important; border-radius: 12px!important; height: 100%;">
                    <div class="row ">
                        <div class="col-lg-2 col-4 mb-3">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" fill="#B58050"
                                    stroke="#B58050" />
                                <g clip-path="url(#clip0_66_819)">
                                    <path
                                        d="M34.9813 31.0688C34.8306 30.5869 34.5654 30.1487 34.2084 29.7916C33.8513 29.4346 33.4131 29.1694 32.9313 29.0187H32.8875C32.6005 28.9268 32.3014 28.8783 32 28.875C31.3819 28.875 30.7777 29.0583 30.2638 29.4017C29.7499 29.745 29.3494 30.2331 29.1129 30.8041C28.8764 31.3751 28.8145 32.0035 28.935 32.6097C29.0556 33.2158 29.3533 33.7727 29.7903 34.2097C30.2273 34.6467 30.7842 34.9444 31.3903 35.065C31.9965 35.1855 32.6249 35.1236 33.1959 34.8871C33.7669 34.6506 34.255 34.2501 34.5983 33.7362C34.9417 33.2223 35.125 32.6181 35.125 32C35.1243 31.7019 35.0822 31.4053 35 31.1188L34.9813 31.0688ZM32.8063 30.3187L32.925 30.375L33.025 30.4375C33.1311 30.5036 33.2296 30.5811 33.3188 30.6688C33.4099 30.7587 33.4896 30.8594 33.5563 30.9688C33.5807 30.9997 33.6016 31.0332 33.6188 31.0688L33.675 31.1937C33.5617 31.3062 33.4096 31.3711 33.25 31.375C33.0842 31.375 32.9253 31.3092 32.8081 31.1919C32.6908 31.0747 32.625 30.9158 32.625 30.75C32.6273 30.5882 32.6923 30.4336 32.8063 30.3187ZM32 33.875C31.5576 33.8655 31.1328 33.6997 30.8007 33.4072C30.4687 33.1146 30.2509 32.714 30.1858 32.2762C30.1207 31.8385 30.2125 31.3919 30.445 31.0153C30.6775 30.6388 31.0357 30.3566 31.4563 30.2187C31.401 30.3904 31.3735 30.5697 31.375 30.75C31.375 31.2473 31.5725 31.7242 31.9242 32.0758C32.2758 32.4275 32.7527 32.625 33.25 32.625C33.4303 32.6265 33.6096 32.599 33.7813 32.5437C33.6652 32.9267 33.4298 33.2624 33.1093 33.5019C32.7888 33.7415 32.4001 33.8722 32 33.875Z"
                                        fill="white" />
                                    <path
                                        d="M32 27C26.875 27 24.0812 31.4812 23.9687 31.675C23.9139 31.77 23.885 31.8778 23.885 31.9875C23.885 32.0972 23.9139 32.205 23.9687 32.3C24.0812 32.5187 26.875 37 32 37C37.125 37 39.9187 32.5188 40.0312 32.325C40.0861 32.23 40.115 32.1222 40.115 32.0125C40.115 31.9028 40.0861 31.795 40.0312 31.7C39.9187 31.4813 37.125 27 32 27ZM32 35.75C28.3375 35.75 25.9687 32.9688 25.2562 32C25.9687 31.0312 28.3375 28.25 32 28.25C35.6625 28.25 38.0312 31.0312 38.7437 32C38.0312 32.9688 35.6625 35.75 32 35.75Z"
                                        fill="white" />
                                    <path
                                        d="M43.1624 31.6812C42.9874 31.375 38.8374 24.5 31.9999 24.5C25.1624 24.5 21.0124 31.375 20.8374 31.6812L21.9124 32.3063C21.9499 32.25 25.8812 25.75 31.9999 25.75C38.1187 25.75 42.0499 32.25 42.0874 32.3187L43.1624 31.6812Z"
                                        fill="white" />
                                    <path
                                        d="M49.2375 14.7625C46.8188 12.3438 42.7313 11.9313 37.7375 13.5938C35.7386 14.2817 33.8159 15.1739 32 16.2563C27.9688 13.875 23.975 12.625 20.75 12.625C18.25 12.625 16.2125 13.375 14.7937 14.7938C13.375 16.2125 12.625 18.25 12.625 20.75C12.625 23.4875 13.525 26.7188 15.225 30.125L16.3062 29.5C14.6937 26.3 13.875 23.25 13.875 20.75C13.875 18.5813 14.5 16.875 15.6812 15.6813C16.8625 14.4875 18.55 13.875 20.75 13.875C23.6 13.875 27.1438 14.9688 30.75 17C27.996 18.7713 25.4434 20.8377 23.1375 23.1625C13.6562 32.6625 9.8875 44.3625 14.7625 49.2375C16.2062 50.6813 18.25 51.375 20.75 51.375C23.4563 51.375 26.6562 50.5063 30.0812 48.7813L29.5 47.6938C23.4563 50.7375 18.2812 50.9813 15.65 48.3188C13.5813 46.2875 13.25 42.6563 14.7812 38.1375C16.3375 33.4688 19.625 28.4625 24.0438 24.0438C26.4425 21.6314 29.1123 19.5048 32 17.7063C34.8903 19.501 37.5606 21.628 39.9562 24.0438C42.3687 26.4523 44.4933 29.1328 46.2875 32.0313C44.4849 34.9048 42.3608 37.5636 39.9562 39.9563C39.0716 40.8362 38.1543 41.6827 37.2063 42.4938L37.625 39.5875L36.375 39.4125L35.75 43.7875C35.7366 43.8763 35.7426 43.9669 35.7674 44.0532C35.7922 44.1395 35.8353 44.2194 35.8937 44.2875C35.9537 44.3558 36.0278 44.4102 36.1109 44.4469C36.194 44.4836 36.2842 44.5017 36.375 44.5H40.75V43.25H38.25C39.1375 42.4813 40.0125 41.6813 40.85 40.8375C43.1739 38.5432 45.2365 35.9985 47 33.25C49.0187 36.8438 50.175 40.375 50.175 43.3125C50.175 45.4813 49.55 47.1875 48.3687 48.3813C47.1875 49.575 45.4688 50.1875 43.3 50.1875C37.8125 50.1875 30.2625 46.1813 24.0625 39.9875C23.1809 39.1045 22.3344 38.1872 21.525 37.2375L24.4312 37.65L24.6062 36.4L20.2312 35.775C20.1425 35.7617 20.0519 35.7676 19.9656 35.7924C19.8793 35.8172 19.7994 35.8603 19.7312 35.9188C19.6627 35.9742 19.6067 36.0435 19.5668 36.1222C19.527 36.2008 19.5042 36.287 19.5 36.375V40.75H20.75V38.25C21.5188 39.1375 22.3188 40.0125 23.1625 40.85C29.6813 47.3563 37.3875 51.4063 43.2812 51.4063C45.7812 51.4063 47.8188 50.6563 49.2375 49.2375C50.6562 47.8188 51.4062 45.7563 51.4062 43.2813C51.4062 39.9188 50.0812 35.9625 47.7375 31.975C51.8187 24.9563 52.6562 18.1813 49.2375 14.7625ZM40.8375 23.1625C38.5284 20.8362 35.9715 18.7697 33.2125 17C34.7812 16.1099 36.4301 15.3691 38.1375 14.7875C42.6562 13.2813 46.2625 13.5875 48.35 15.6563C51.3 18.6 50.5563 24.5 47 30.7875C45.2271 28.0309 43.1609 25.4743 40.8375 23.1625Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_66_819">
                                        <rect width="40" height="40" fill="white" transform="translate(12 12)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                        <div class=" col-lg-10 col-12">
                            <h3 class="" style="font-weight: bold;">{{ __('lang.goals') }}</h3>
                            <div class="text-dark " style="font-size: 20px">
                                {{ getSettingValue('goals_' . app()->getLocale()) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 ">
                <div class=" card  mission-item p-4 "
                    style="border: 1px solid #B58050!important; border-radius: 12px!important; height: 100%;">
                    <div class="row ">
                        <div class="col-lg-2 col-4 mb-3">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="63" height="63" rx="7.5" fill="#B58050"
                                    stroke="#B58050" />
                                <path
                                    d="M33.1517 13.3019L34.8934 16.831C34.9856 17.0178 35.1218 17.1793 35.2902 17.3017C35.4587 17.4241 35.6544 17.5037 35.8605 17.5336L39.7552 18.0996C40.8086 18.2526 41.2292 19.5472 40.467 20.2903L37.6488 23.0374C37.4996 23.1827 37.3881 23.3621 37.3237 23.5602C37.2594 23.7582 37.2442 23.9689 37.2794 24.1742L37.9447 28.0531C38.1246 29.1023 37.0234 29.9024 36.0812 29.407L32.5977 27.5756C32.4133 27.4787 32.2082 27.428 32 27.428C31.7918 27.428 31.5867 27.4787 31.4023 27.5756L27.9188 29.407C26.9766 29.9024 25.8754 29.1022 26.0553 28.0531L26.7206 24.1742C26.7558 23.9689 26.7406 23.7582 26.6763 23.5602C26.6119 23.3621 26.5004 23.1827 26.3513 23.0374L23.5331 20.2903C22.7708 19.5472 23.1914 18.2527 24.2448 18.0996L28.1395 17.5336C28.3456 17.5037 28.5413 17.4241 28.7098 17.3017C28.8782 17.1793 29.0144 17.0178 29.1066 16.831L30.8483 13.3019C31.3195 12.3473 32.6806 12.3473 33.1517 13.3019Z"
                                    stroke="white" stroke-width="1.17188" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M43.9395 18.6364H45.1535M43.1263 21.6713L44.1776 22.2784M43.1263 15.6014L44.1776 14.9944M20.0604 18.6364H18.8464M20.8736 15.6014L19.8223 14.9944M20.8736 21.6713L19.8223 22.2784M45.2896 35.1579V25.3184C45.2892 25.0795 45.3361 24.8429 45.4276 24.6222C45.519 24.4016 45.6533 24.2012 45.8227 24.0327C45.9912 23.8633 46.1916 23.729 46.4123 23.6375C46.6329 23.546 46.8696 23.4991 47.1085 23.4995C48.1121 23.4995 48.9266 24.314 48.9266 25.3184V29.5042M48.9267 32.0586V36.5023C48.9267 37.3003 48.6421 38.0726 48.1239 38.6799L44.7277 42.2372C44.2976 42.6879 44.0578 43.287 44.0578 43.9099V46.5581M33.7362 25.4102C33.2028 25.1297 32.6025 24.9816 32 24.9816C31.3975 24.9816 30.7971 25.1297 30.2639 25.4101L28.8648 26.1456L29.1321 24.5877C29.2343 23.9916 29.1901 23.3795 29.0032 22.8043C28.8163 22.229 28.4924 21.7078 28.0592 21.2856L26.9271 20.1821L28.4914 19.9548C29.09 19.8679 29.6586 19.6366 30.148 19.281C30.6374 18.9254 31.033 18.4561 31.3006 17.9135L32 16.4965L32.6996 17.9139C32.9672 18.4564 33.3628 18.9257 33.8522 19.2813C34.3416 19.6368 34.9101 19.868 35.5088 19.9549L37.0728 20.1822L35.941 21.2855C35.5078 21.7077 35.1838 22.2289 34.9969 22.8042C34.8099 23.3795 34.7657 23.9916 34.8679 24.5877L35.1352 26.1457L33.7362 25.4102Z"
                                    stroke="white" stroke-width="1.17188" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M36.4755 46.5581V40.2022C36.4755 39.7348 36.5731 39.2726 36.762 38.8452C36.9509 38.4177 37.227 38.0344 37.5726 37.7198L41.9886 33.6991C43.2558 32.5454 45.2901 33.4444 45.2901 35.158C45.2901 35.7151 45.0546 36.2462 44.6417 36.6202L40.9258 39.9868M41.5847 51.4138H45.7705V46.5582H34.8446V51.4138H39.0296M42.4234 48.9934H41.2094M19.9427 46.5581V43.9103C19.9427 43.287 19.7026 42.6877 19.2722 42.2369L15.8761 38.6802C15.3581 38.0727 15.0735 37.3004 15.0735 36.5019V25.3179C15.0735 24.3137 15.8876 23.4995 16.8919 23.4995C17.8962 23.4995 18.7104 24.3137 18.7104 25.3179V35.1579"
                                    stroke="white" stroke-width="1.17188" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M23.0744 39.9868L19.3584 36.6202C19.1545 36.4349 18.9913 36.2092 18.8793 35.9574C18.7678 35.7056 18.7103 35.4332 18.7104 35.1578C18.7104 33.4444 20.7443 32.5455 22.0114 33.6992L23.273 34.8475M25.1621 36.5679L26.4276 37.7201C26.7731 38.0346 27.0491 38.4178 27.2379 38.8451C27.4268 39.2725 27.5243 39.7346 27.5242 40.2018V46.5582"
                                    stroke="white" stroke-width="1.17188" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21.5767 48.9934H22.7907M18.2297 46.5581H29.1557V51.414H18.2297V46.5581Z"
                                    stroke="white" stroke-width="1.17188" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>


                        </div>
                        <div class=" col-lg-10 col-12">
                            <h3 class="" style="font-weight: bold;">{{ __('lang.our_ambition') }}</h3>
                            <div class="text-dark " style="font-size: 20px">
                                {{ getSettingValue('our_message_' . app()->getLocale()) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="row mt-5">
        <div class="col-md-4" style="padding: 0px!important;">
            <img src="{{ asset($aboutsec->image) }}" alt="" style="width: 100%; height: 100%;">
        </div>
        <div class="col-md-8"
            style="background-image: url({{ asset('front/images/aboutbg.png') }}); background-size:cover; {{ isMobile() ? 'background-image: none' : '' }}">
            <div style="{{ isMobile() ? 'margin-top: 10%' : 'height: 70%; margin-top:16%' }}" >
                <div class="pra  {{ app()->getLocale() == 'ar' ? 'pe-5' : '' }}"
                    style="{{ app()->getLocale() == 'en' ? 'padding-left: 10%' : '' }}">
                    {!! $aboutsec->description !!}
                    <h3 style="color: #B58050;font-size: xx-large;font-weight: 600;">
                        {{ $aboutsec->short_description }}</h3>
                    <h3 style="color: #000;font-weight: 600;">{{ $aboutsec->title }}</h3>
                </div>
            </div>
            <p></p>
        </div>

    </div>
    <br><br>
    @include('front.home.features', ['features' => $features])
    <br><br>
    <section class="container">
        <div class="row">
            <div class="d-flex m-auto justify-content-center align-items-end wow zoomIn" style="">
                <div class="d-flex m-auto justify-content-center align-items-center gap-4 wow zoomIn" style="">
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050"
                            stroke-width="2" />
                    </svg>

                    <div class=" text-center d-flex  gap-2">

                        @php
                            $words = explode(' ', __('lang.our_partners'));

                        @endphp
                        <b class="text-center fs-3 ">
                            @foreach ($words as $word)
                                <span class="{{ $loop->last ? 'main-color' : '' }}">{{ $word }}</span>
                            @endforeach
                        </b><br><br>

                    </div>
                    <svg width="281" height="3" viewBox="0 0 281 3" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="280.5" y1="1.5" x2="0.5" y2="1.49998" stroke="#B58050"
                            stroke-width="2" />
                    </svg>

                </div>
            </div>

        </div>

        <div class="pt-3">
            <div class="row">
                <div class="owl-carousel " id="parteners--owl">

                    @foreach ($parteners as $item)
                        <div class="item m-2">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="max-height: 150px">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <br><br>
    @include('front.home.contact-us')


    <!-- About End -->
@endsection
@section('js')
    <script>
        function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11) ?
                match[2] :
                null;
        }
        var videolink = '{{ getSettingValue('features_video_url') }}';
        const videoId = getId(videolink);
        // alert(videoId);
        const iframeMarkup =
            '<iframe width="80%" height="320px" style="border-radius: 20px;" src="//www.youtube.com/embed/' + videoId +
            '" frameborder="0" allowfullscreen></iframe>';
        $('#youtube_link').html(iframeMarkup);
        // alert(videoId);
        $('.owl-carousel').owlCarousel({
            nav: true,
            loop: true,
            margin: 10,
            autoWidth: true,
            rtl: {{ isRtl() ? 'true' : 'false' }},
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            nav: false,
            dots:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }

        })
    </script>
@endsection
