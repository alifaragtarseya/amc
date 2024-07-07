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
        <div class="text-center">

            <b class="text-center slider--span main-color"> {{ __('lang.get_in_touch') }}</b>
            <h2 class="text-center text-dark"> <b>{{ __('lang.how_to_find_us') }}</b></h2>

        </div>

        <div class="row pt-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="12" fill="#385125" />
                            <path
                                d="M50.875 18.9062H29.125C27.4703 18.9062 26.125 20.2516 26.125 21.9062V57.9062C26.125 59.5609 27.4703 60.9062 29.125 60.9062H50.875C52.5297 60.9062 53.875 59.5609 53.875 57.9062V21.9062C53.875 20.2516 52.5297 18.9062 50.875 18.9062ZM40 54.625C38.9641 54.625 38.125 53.7859 38.125 52.75C38.125 51.7141 38.9641 50.875 40 50.875C41.0359 50.875 41.875 51.7141 41.875 52.75C41.875 53.7859 41.0359 54.625 40 54.625Z"
                                fill="white" />

                        </svg><br> <br>
                        <a href="tel:{{ getSettingValue('phone') }}">
                            <b class="text-dark fs-6">{{ getSettingValue('phone') }}</b>
                        </a>
                    </div>
                    <div class="col-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="12" fill="#385125" />
                            <path
                                d="M56 24H24C21.8 24 20.02 25.8 20.02 28L20 52C20 54.2 21.8 56 24 56H56C58.2 56 60 54.2 60 52V28C60 25.8 58.2 24 56 24ZM56 32L40 42L24 32V28L40 38L56 28V32Z"
                                fill="white" />
                        </svg>


                        <br> <br> <a href="mailto:{{ getSettingValue('email_1') }}">
                            <b class="text-dark fs-6">{{ getSettingValue('email_1') }}</b>
                        </a>
                    </div>
                    <div class="col-6 pt-3">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="12" fill="#385125" />
                            <path
                                d="M40 19C35.6255 19.0052 31.4317 20.7452 28.3385 23.8384C25.2452 26.9317 23.5052 31.1255 23.5 35.5C23.4948 39.0748 24.6625 42.5527 26.824 45.4C26.824 45.4 27.274 45.9925 27.3475 46.078L40 61L52.6585 46.0705C52.7245 45.991 53.176 45.4 53.176 45.4L53.1775 45.3955C55.338 42.5494 56.5051 39.0732 56.5 35.5C56.4949 31.1255 54.7548 26.9317 51.6616 23.8384C48.5683 20.7452 44.3745 19.0052 40 19ZM40 41.5C38.8133 41.5 37.6533 41.1481 36.6666 40.4888C35.6799 39.8295 34.9109 38.8925 34.4567 37.7961C34.0026 36.6997 33.8838 35.4933 34.1153 34.3295C34.3468 33.1656 34.9183 32.0965 35.7574 31.2574C36.5965 30.4182 37.6656 29.8468 38.8295 29.6153C39.9934 29.3838 41.1998 29.5026 42.2961 29.9567C43.3925 30.4108 44.3295 31.1799 44.9888 32.1666C45.6481 33.1533 46 34.3133 46 35.5C45.998 37.0907 45.3653 38.6157 44.2405 39.7404C43.1157 40.8652 41.5907 41.498 40 41.5Z"
                                fill="white" />
                        </svg>



                        <br> <br> <b class="text-dark fs-6">{{ getSettingValue('address_' . App::getLocale()) }}</b>
                    </div>
                    <div class="col-6 pt-3">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="12" fill="#385125" />
                            <path
                                d="M56 24H24C21.8 24 20.02 25.8 20.02 28L20 52C20 54.2 21.8 56 24 56H56C58.2 56 60 54.2 60 52V28C60 25.8 58.2 24 56 24ZM56 32L40 42L24 32V28L40 38L56 28V32Z"
                                fill="white" />
                        </svg>
                            <br> <br> <a href="mailto:{{ getSettingValue('email_2') }}">
                                <b class="text-dark fs-6">{{ getSettingValue('email_2') }}</b>
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="w3-light-gray p-5 w3-round-xlarge">
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
                                <button class="btn btn--custom py-3 px-5" type="button" onclick="sendMessage()">{{ __('lang.send_message') }}</button>
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
