@extends('front.layouts.master')
@section('css')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); "
        data-wow-delay="0.1s">
        <div class="meta--banner ">
            <b
                class="text-center p-2 w3-round-xxlarge border text-white animated slideInDown mb-4">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</b>
            <div class="text-center" style="width: {{ isMobile() ? '' : '50%;' }}">
                {{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
        

        <div class="row pt-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-5 ">
                        <div class="row">
                            <div class="col-2">
                                <svg width="120" height="120" viewBox="0 0 72 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 12C0 5.37258 5.37258 0 12 0H72V128H12C5.37258 128 0 122.627 0 116V12Z" fill="#10312B"/>
                                    <rect width="48" height="48" transform="translate(12 40)" fill="#10312B"/>
                                    <g clip-path="url(#clip0_74_10745)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.9998 48.8686C44.2603 48.8617 51.1472 55.7623 51.1472 64.0069C51.1472 72.2583 44.2603 79.1383 35.9998 79.1337C33.829 79.1349 31.6832 78.6703 29.7072 77.7715L22.2101 79.1269C22.011 79.1633 21.8059 79.1463 21.6157 79.0775C21.4254 79.0087 21.2568 78.8907 21.1271 78.7354C20.9974 78.5801 20.9112 78.3932 20.8774 78.1937C20.8436 77.9942 20.8633 77.7894 20.9346 77.6L23.0832 71.8903C21.6357 69.5145 20.8687 66.7866 20.8661 64.0046C20.8683 55.76 27.7483 48.8732 35.9998 48.8686ZM43.5998 70.4366C41.9152 71.7989 39.3072 73.1749 36.8135 71.5749C33.5449 69.4743 30.6512 66.7155 28.5529 63.4446C27.3209 61.5292 28.4798 58.4617 30.2123 56.592C30.9026 55.8446 32.0409 55.9635 32.7929 56.6492L34.3746 58.0937C34.8546 58.5326 34.8729 59.296 34.5735 59.8766C34.1003 60.7863 33.8215 62.0092 34.4066 62.9212C35.1426 64.064 36.0478 65.1909 38.2101 65.8469C38.8638 66.048 39.7026 65.9612 40.4158 65.6732C41.0123 65.4309 41.7689 65.4332 42.2101 65.904L43.6821 67.4697C44.4935 68.3337 44.5209 69.6915 43.5998 70.4366Z" fill="white"/>
                                    <circle cx="36.5" cy="64.5" r="10.5" fill="white"/>
                                    <g clip-path="url(#clip1_74_10745)">
                                    <path d="M29.9297 57.4609L31.1054 56.6206C31.4934 56.3435 31.9691 56.217 32.4435 56.2648C32.918 56.3125 33.3589 56.5312 33.684 56.8801L35.2967 58.6102C35.5766 58.9103 35.7554 59.2906 35.8081 59.6975C35.8608 60.1045 35.7848 60.5177 35.5906 60.8792L34.6356 62.657C34.5087 62.8985 34.8864 63.5434 35.9741 64.4969C37.0627 65.4509 37.7518 65.7402 37.9711 65.5841L39.612 64.4015C39.9446 64.1618 40.3439 64.0321 40.7539 64.0307C41.1639 64.0293 41.5641 64.1563 41.8983 64.3937L43.8186 65.759C44.2064 66.0347 44.481 66.4417 44.5913 66.9046C44.7016 67.3674 44.6402 67.8546 44.4184 68.2756L43.7343 69.5742C43.5135 69.9934 43.1854 70.3465 42.7835 70.5975C42.3816 70.8485 41.9204 70.9884 41.4468 71.003C39.1127 71.0746 36.502 69.8196 33.5973 67.2741C30.6869 64.7253 29.0855 62.2852 28.8246 59.9355C28.7721 59.462 28.8468 58.9831 29.0411 58.5481C29.2353 58.1132 29.5421 57.7379 29.9297 57.4609Z" fill="#B58050"/>
                                    </g>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_74_10745">
                                    <rect width="32" height="32" fill="white" transform="translate(20 48)"/>
                                    </clipPath>
                                    <clipPath id="clip1_74_10745">
                                    <rect width="20" height="20" fill="white" transform="translate(24 57.4379) rotate(-18.7774)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div> 
                            <div class="col-10 pt-3" style="background-color: #F8F2EE">
                                <h3 class="fd-bold" style="color: #B58050">whatsapp</h3>
                                <a href="tel:{{ getSettingValue('phone') }}">
                                    <b class="text-dark fs-6">{{ getSettingValue('phone') }}</b>
                                </a>
                            </div>                           
                        </div>
                            
                        
                    </div>
                    
                    <div class="col-12 pt-3 mb-5 ">
                        <div class="row">
                            <div class="col-2">
                                <svg width="120" height="120" viewBox="0 0 72 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 12C0 5.37258 5.37258 0 12 0H72V128H12C5.37258 128 0 122.627 0 116V12Z" fill="#10312B"/>
                                    <rect width="48" height="48" transform="translate(12 40)" fill="#10312B"/>
                                    <path d="M52 71.0055C52 75.9649 48.416 79.9822 43.952 80H43.936H28.08C23.632 80 20 76.0005 20 71.0411V71.0233C20 71.0233 20.0096 63.1558 20.0224 59.1989C20.024 58.4559 20.792 58.0399 21.3152 58.5021C25.1168 61.8528 31.9152 67.9623 32 68.0423C33.136 69.0537 34.576 69.6243 36.048 69.6243C37.52 69.6243 38.96 69.0537 40.096 68.0227C40.1808 67.9605 46.8272 62.0341 50.6864 58.6283C51.2112 58.1644 51.9824 58.5803 51.984 59.3216C52 63.2482 52 71.0055 52 71.0055Z" fill="#B58050"/>
                                    <path d="M51.1604 52.7532C49.7748 49.8522 47.0484 48 44.0468 48H28.0788C25.0772 48 22.3508 49.8522 20.9652 52.7532C20.6548 53.402 20.802 54.2108 21.3188 54.6694L33.1988 65.2264C34.0308 65.973 35.0388 66.3445 36.0468 66.3445C36.0532 66.3445 36.058 66.3445 36.0628 66.3445C36.0676 66.3445 36.074 66.3445 36.0788 66.3445C37.0868 66.3445 38.0948 65.973 38.9268 65.2264L50.8068 54.6694C51.3236 54.2108 51.4708 53.402 51.1604 52.7532Z" fill="white"/>
                                </svg>
                                    
                            </div>
                            <div class="col-10 pt-3" style="background-color: #F8F2EE">
                                <h3 class="fd-bold" style="color: #B58050">email</h3>
                                <a href="mailto:{{ getSettingValue('email_2') }}">
                                    <b class="text-dark fs-6">{{ getSettingValue('email_2') }}</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3 mb-5">
                        <div class="row">
                            <div class="col-2" >
                                <svg width="120" height="120" viewBox="0 0 72 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 12C0 5.37258 5.37258 0 12 0H72V128H12C5.37258 128 0 122.627 0 116V12Z" fill="#10312B"/>
                                    <rect width="48" height="48" transform="translate(12 40)" fill="#10312B"/>
                                    <path d="M28.0723 45.8951C33.0662 43.3269 39.2046 43.3718 44.1517 46.0127C49.0502 48.7074 52.0273 53.5166 51.9998 58.69C51.8856 63.8294 48.6932 68.6605 44.7028 72.3952C42.3996 74.5604 39.8231 76.475 37.0259 78.0999C36.7378 78.2474 36.4223 78.3461 36.0948 78.3912C35.7797 78.3793 35.4727 78.2969 35.2017 78.1513C30.9313 75.7098 27.1848 72.5933 24.1425 68.9517C21.5968 65.912 20.1505 62.2395 20 58.433L20.0114 57.8793C20.2193 52.9106 23.2567 48.3716 28.0723 45.8951ZM38.0737 54.1854C36.0436 53.4216 33.703 53.8366 32.1447 55.2365C30.5865 56.6364 30.118 58.7452 30.9581 60.5781C31.7981 62.4111 33.781 63.6067 35.9808 63.6067C37.422 63.6159 38.8073 63.105 39.8281 62.1878C40.849 61.2707 41.4205 60.0235 41.4155 58.7242C41.4231 56.741 40.1039 54.9492 38.0737 54.1854Z" fill="white"/>
                                    <path d="M35.9999 84C42.3117 84 47.4284 83.0943 47.4284 81.977C47.4284 80.8597 42.3117 79.954 35.9999 79.954C29.688 79.954 24.5713 80.8597 24.5713 81.977C24.5713 83.0943 29.688 84 35.9999 84Z" fill="#B58050"/>
                                </svg>
                            </div>
                            <div class="col-10" style="background-color: #F8F2EE">
                                <h3 class="fd-bold" style="color: #B58050">Our Location</h3>
                                <b class="text-dark fs-6">{{ getSettingValue('address_' . App::getLocale()) }}</b>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="p-5 w3-round-xlarge" style="background-color: #F8F2EE">
                    <form  >
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" placeholder="Ahmed Ramadan ...">
                                    <label class="text-muted" for="name">{{ __('lang.name') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" placeholder="ex@gmail.com">
                                    <label class="text-muted" for="email">{{ __('lang.email') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="phone" placeholder="{{ __('lang.phone') }}">
                                    <label class="text-muted" for="phone">{{ __('lang.phone') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="{{ __('lang.enter_your_message') }}" id="message" style="height: 100px"></textarea>
                                    <label class="text-muted" for="message">{{ __('lang.message') }}</label>
                                </div>
                            </div>
                            <div class="col-12  text-center">
                                <button class="btn btn--custom py-3 px-5 mt-3" style="width: 100%!important" type="button" onclick="sendMessage()">
                                    {{ __('lang.send_message') }}
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_74_10936)">
                                        <path d="M23.9461 1.02889C24.0007 0.892596 24.0141 0.743286 23.9846 0.599471C23.9551 0.455657 23.884 0.323663 23.7802 0.219853C23.6764 0.116044 23.5444 0.0449833 23.4006 0.0154821C23.2568 -0.014019 23.1074 -0.000663785 22.9711 0.0538922L1.15065 8.78239H1.14915L0.471148 9.05239C0.342733 9.10361 0.230976 9.18934 0.148222 9.30009C0.0654668 9.41084 0.0149351 9.54231 0.00220827 9.67998C-0.0105185 9.81764 0.0150548 9.95615 0.0761036 10.0802C0.137152 10.2042 0.2313 10.309 0.348148 10.3829L0.963148 10.7729L0.964648 10.7759L8.45715 15.5429L13.2241 23.0354L13.2271 23.0384L13.6171 23.6534C13.6913 23.7698 13.7961 23.8635 13.92 23.9241C14.044 23.9848 14.1823 24.0101 14.3197 23.9972C14.4571 23.9843 14.5883 23.9338 14.6988 23.8512C14.8093 23.7686 14.8949 23.657 14.9461 23.5289L23.9461 1.02889ZM21.1966 3.86389L9.95565 15.1049L9.63315 14.5979C9.57406 14.5049 9.49519 14.426 9.40215 14.3669L8.89515 14.0444L20.1361 2.80339L21.9031 2.09689L21.1966 3.86389Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_74_10936">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                        
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Contact Start -->
@endsection
@section('js')
<script>



    var whatsapp_base_url= 'https://wa.me/{phone}/?text={text}';

    function validate(data) {
        var valid = true;
        Object.keys(data).forEach(key => {
            if (!data[key]) {
                valid = false;
            }
        });
        return valid;
    }
    function sendMessage() {
        var text = '';

        var data = {
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            message: $('#message').val(),
        };

        if (!validate(data)) {
            alert('Please fill all the fields');
            return false;
        }

        Object.keys(data).forEach(key => {
            text += key + ' :' + data[key] + " \n" ;

        });

            var link = whatsapp_base_url
            .replace('{phone}', "{{ getSettingValue('whatsapp_phone') }}")
            .replace('{text}', encodeURIComponent(text));

            console.log(link + text)
            window.open(link , "_blank");
    }

</script>
@endsection
