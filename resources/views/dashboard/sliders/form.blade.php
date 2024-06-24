@php
    $title = __('lang.slider') ;
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form"
                action="{{ $resource->id ? route('admin.slider.update', $resource->id) : route('admin.slider.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    {{-- <div class="col-12  ">

                        {!! Form::label('type', __('lang.type'), ['class' => 'form-label']) !!} <br>

                        <select name="type" id="type" class="form-control form-select select2">
                            <option value="">{{ __('lang.type') }}</option>
                            @foreach ($types as $item)
                                <option value="{{ $item }}" {{ $resource->type == $item ? 'selected' : '' }}>
                                    {{ __('lang.'.$item) }}</option>
                            @endforeach
                        </select>


                    </div> --}}

                    <div class="col-6 pt-3 " id="div-image">

                        {!! Form::label('image', __('lang.image'), ['class' => 'form-label']) !!} <small class="text-danger">({{ __('lang.best_size') }}w:506 * h:640)</small> <br>
                        <img class=" image-preview-image  " width="100%" height="200"
                            src="{{ asset($resource->image ?? 'assets/img/default.jpg') }}">
                        <br>
                        <label for="image"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z" />
                                <path fill="currentColor"
                                    d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z" />
                            </svg>
                        </label>
                        <input type="file" onchange="changeImage(this, 'image')" id="image" class="d-none form-control mt-3"
                            name="image">
                    </div>
                    <div class="col-6 pt-3 " id="div-image">

                        {!! Form::label('bg_image', __('lang.bg_image'), ['class' => 'form-label']) !!} <small class="text-danger">({{ __('lang.best_size') }}w:2100 * h:890)</small> <br>
                        <img class=" image-preview-bg_image  " width="100%" height="200"
                            src="{{ asset($resource->bg_image ?? 'assets/img/default.jpg') }}">
                        <br>
                        <label for="bg_image"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z" />
                                <path fill="currentColor"
                                    d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z" />
                            </svg>
                        </label>
                        <input type="file" onchange="changeImage(this, 'bg_image')" id="bg_image" class="d-none form-control mt-3"
                            name="bg_image">
                    </div>
                    {{-- <div class="col-12 pt-3 {{ $resource->type =='video'?'':'d-none' }} " id="div-video">
                        {!! Form::label('video', __('lang.video'), ['class' => 'form-label']) !!} <br>


                        <input type="file" id="video" class=" form-control mt-3"
                            name="image">
                    </div> --}}
                    <div class="clearfix"></div>

                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('lang.' . $locale . '.title') }}
                                </label>
                                {!! Form::textarea("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), [
                                    'class' => 'form-control tinymce',
                                ]) !!}
                            </div>
                        </div>
                    @endforeach

                    @foreach (config('translatable.locales') as $key => $locale)
                        <div class="col-md-6 pt-2">
                            <div class="form-group">
                                <label for="name">
                                    {{ __('lang.' . $locale . '.description') }}
                                </label>
                                {!! Form::textarea(
                                    "{$locale}[description]",
                                    old("{$locale}[description]", optional($resource->translate($locale))->description),
                                    ['class' => 'form-control'],
                                ) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
@section('js')
    <script>
        $('#type').on('change', function() {
            if ($(this).val() == 'image') {
                $('#div-image').removeClass('d-none');
                $('#div-video').addClass('d-none');
            } else if ($(this).val() == 'video') {
                $('#div-video').removeClass('d-none');
                $('#div-image').addClass('d-none');
            }
        });
    </script>
@endsection
