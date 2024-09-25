@php
    $title = __('lang.settings');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 pt-3">
                        <ul class="nav nav-pills w3-ul border" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="main-info-tab" data-bs-toggle="tab" data-bs-target="#main-info"
                                    type="button" role="tab" aria-controls="main-info"
                                    aria-selected="true">
                                    <i class="bx bx-info-circle"></i> {{ __('lang.main_info') }} </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logo-images-tab" data-bs-toggle="tab" data-bs-target="#logo-images" type="button"
                                    role="tab" aria-controls="logo-images" aria-selected="false">
                                    <i class="bx bx-images"></i>{{ __('lang.logo_images') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                                    role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="bx bx-mail-send"></i>{{ __('lang.contact_us') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="address_sar-tab" data-bs-toggle="tab" data-bs-target="#address_sar" type="button"
                                    role="tab" aria-controls="address_sar" aria-selected="false">
                                    <i class="bx bx-location-plus"></i>{{ __('lang.address') }}</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="goals-tab" data-bs-toggle="tab" data-bs-target="#goals" type="button"
                                    role="tab" aria-controls="goals" aria-selected="false">
                                    <i class="bx bx-diamond"></i>{{ __('lang.goals') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="our_message-tab" data-bs-toggle="tab" data-bs-target="#our_message" type="button"
                                    role="tab" aria-controls="our_message" aria-selected="false">
                                    <i class="bx bx-message-alt-detail"></i>{{ __('lang.our_message') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="our_vision-tab" data-bs-toggle="tab" data-bs-target="#our_vision" type="button"
                                    role="tab" aria-controls="our_vision" aria-selected="false">
                                    <i class="bx bx-analyse"></i>{{ __('lang.our_vision') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="rate_us-tab" data-bs-toggle="tab" data-bs-target="#rate_us" type="button"
                                    role="tab" aria-controls="rate_us" aria-selected="false">
                                    <i class="bx bx-message-rounded-check"></i>{{ __('lang.rate_us') }}</button>
                            </li>


                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content border" id="myTabContent">
                            {{-- main info site  --}}
                            <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                                <div class="row">
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.site_name_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'site_name_' . $locale,
                                                    old("site_name_{$locale}", optional($settings->where('key', 'site_name_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.copyright_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'copyright_' . $locale,
                                                    old("copyright_{$locale}", optional($settings->where('key', 'copyright_' . $locale)->first())->value) ,
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                    
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.company_name_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'company_name_' . $locale,
                                                    old("company_name_{$locale}", optional($settings->where('key', 'company_name_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('lang.link_company') }}
                                            </label>
                                            {!! Form::text(
                                                'company_website',
                                                old("company_website", optional($settings->where('key', 'company_website')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.short_description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'short_description_' . $locale,
                                                    old(
                                                        "short_description_{$locale}",
                                                        optional($settings->where('key', 'short_description_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-12 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'description_' . $locale,
                                                    old("description_{$locale}", optional($settings->where('key', 'description_' . $locale)->first())->value),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                            {{-- logo images --}}
                            <div class="tab-pane fade show " id="logo-images" role="tabpanel" aria-labelledby="logo-images-tab">
                                <div class="row">



                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo">{{ __('lang.logo') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo')" id="logo"
                                                class="d-none form-control mt-3" name="logo">


                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo_white">{{ __('lang.logo_white') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo_white" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo_white')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo_white"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo_white')" id="logo_white"
                                                class="d-none form-control mt-3" name="logo_white">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="fav_icon">{{ __('lang.fav_icon') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-favicon" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'favicon')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="favicon"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'favicon')" id="favicon"
                                                class="d-none form-control mt-3" name="favicon">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="bg_feature">{{ __('lang.bg_feature') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-bg_feature" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'bg_feature')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="bg_feature"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'bg_feature')" id="bg_feature"
                                                class="d-none form-control mt-3" name="bg_feature">
                                        </div>

                                    </div>
                                    {{-- <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="bg_footer">{{ __('lang.bg_footer') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-bg_footer" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'bg_footer')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="bg_footer"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'bg_footer')" id="bg_footer"
                                                class="d-none form-control mt-3" name="bg_footer">
                                        </div>

                                    </div> --}}
                                    {{-- <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="profile">{{ __('lang.profile') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                              <b>{{ asset(optional($settings->where('key', 'company_profile')->first())->value) }}</b>
                                            </div>
                                            <br>


                                            <input type="file" onchange="changeImage(this, 'company_profile')" id="company_profile"
                                                class=" form-control mt-3" name="company_profile">
                                        </div>

                                    </div> --}}



                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">


                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            <label for="contact_image">{{ __('lang.contant_image') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-contact_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'contact_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="contact_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'contact_image')" id="contact_image"
                                                class="d-none form-control mt-3" name="contact_image">
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>


                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('facebook_link', __('lang.facebook_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'facebook_link',
                                                old('facebook_link', optional($settings->where('key', 'facebook_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('youtube_link', __('lang.youtube_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'youtube_link',
                                                old('youtube_link', optional($settings->where('key', 'youtube_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('twitter', __('lang.twitter'), ['class' => 'form-label']) !!}
                                            {!! Form::url('twitter', old('twitter', optional($settings->where('key', 'twitter')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('instagram', __('lang.instagram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('instagram', old('instagram', optional($settings->where('key', 'instagram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('snapchat', __('lang.snapchat'), ['class' => 'form-label']) !!}
                                            {!! Form::url('snapchat', old('snapchat', optional($settings->where('key', 'snapchat')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('telegram', __('lang.telegram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('telegram', old('telegram', optional($settings->where('key', 'telegram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('linkedin', __('lang.linkedin'), ['class' => 'form-label']) !!}
                                            {!! Form::url('linkedin', old('linkedin', optional($settings->where('key', 'linkedin')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('tiktok', __('lang.tiktok'), ['class' => 'form-label']) !!}
                                            {!! Form::url('tiktok', old('tiktok', optional($settings->where('key', 'tiktok')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address_sar" role="tabpanel" aria-labelledby="address_sar-tab">
                                <div class="row">



                                    <div class="clearfix"></div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('phone', __('lang.phone'), ['class' => 'form-label']) !!}
                                            {!! Form::number('phone', old('phone', optional($settings->where('key', 'phone')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>

                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('whatsapp', __('lang.whatsapp'), ['class' => 'form-label']) !!} <small
                                                class="badge bg-warning">({{ __('lang.enter_country_code') }})</small>
                                            {!! Form::number('whatsapp', old('whatsapp', optional($settings->where('key', 'whatsapp')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_1', __('lang.email') . ' 1', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_1', old('email_1', optional($settings->where('key', 'email_1')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_2', __('lang.email') . ' 2', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_2', old('email_2', optional($settings->where('key', 'email_2')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    @foreach (config('translatable.locales') as $key => $locale)
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            <label for="name">
                                                {{ __('lang.address_' . $locale) }}
                                            </label>
                                            {!! Form::text(
                                                'address_' . $locale,
                                                old("address_{$locale}", optional($settings->where('key', 'address_' . $locale)->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade show " id="goals" role="tabpanel" aria-labelledby="goals-tab">
                                <div class="row">


                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.goals_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'goals_' . $locale,
                                                    old(
                                                        "goals_{$locale}",
                                                        optional($settings->where('key', 'goals_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                            <div class="tab-pane fade show " id="our_message" role="tabpanel" aria-labelledby="our_message-tab">
                                <div class="row">


                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.our_message_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'our_message_' . $locale,
                                                    old(
                                                        "our_message_{$locale}",
                                                        optional($settings->where('key', 'our_message_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                            <div class="tab-pane fade show " id="our_vision" role="tabpanel" aria-labelledby="our_vision-tab">
                                <div class="row">


                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.our_vision_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'our_vision_' . $locale,
                                                    old(
                                                        "our_vision_{$locale}",
                                                        optional($settings->where('key', 'our_vision_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                            <div class="tab-pane fade show " id="rate_us" role="tabpanel" aria-labelledby="rate_us-tab">
                                <div class="row">


                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.rate_us_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'rate_us_' . $locale,
                                                    old(
                                                        "rate_us_{$locale}",
                                                        optional($settings->where('key', 'rate_us_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal-footer pt-5 text-center">
                    <button type="submit" class="btn w3-block btn-primary">{{ __('lang.save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
