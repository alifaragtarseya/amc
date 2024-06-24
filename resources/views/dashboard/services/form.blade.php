@php
    $title = $resource->id ? __('lang.edit') . ' ' . __('lang.service') : __('lang.add') . ' ' . __('lang.service');
@endphp

@extends('dashboard.layouts.master')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/css/fileinput.css" media="all"
rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/css/fileinput-rtl.css" media="all"
rel="stylesheet" type="text/css" />
@endsection
@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form" action="{{ $resource->id ? route('admin.service.update', $resource->id) : route('admin.service.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6  ">

                        {!! Form::label('image', __('lang.image') , ['class' => 'form-label'] ) !!} <br>
                        <img class=" image-preview-image  " width="100%" height="200"   src="{{ asset($resource->image ?? 'assets/img/default.jpg' ) }}">
                        <br>
                        <label for="image"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z"/><path fill="currentColor" d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z"/></svg>
                        </label>

                        <input type="file"  onchange="changeImage(this, 'image')" id="image" class="d-none form-control mt-3" name="image" >
                    </div>
                    <div class="col-6  ">

                        {!! Form::label('icon', __('lang.icon') , ['class' => 'form-label'] ) !!} <small class="text-danger">({{ __('lang.best_size') }} w:72 * h:72 ) </small> <br>
                        <img class=" image-preview-icon  " width="100%" height="200"   src="{{ asset($resource->icon ?? 'assets/img/default.jpg' ) }}">
                        <br>
                        <label for="icon"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z"/><path fill="currentColor" d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z"/></svg>
                        </label>

                        <input type="file"  onchange="changeImage(this, 'icon')" id="icon" class="d-none form-control mt-3" name="icon" >
                    </div>
                    {{-- <div class="col-md-6">
                        {!! Form::label('service_category_id', __('lang.services_cats') , ['class' => 'form-label'] ) !!} <br>
                        {!! Form::select('service_category_id', $categories, old('service_category_id',$resource->service_category_id), ['class' => 'form-control select-2 select2 p-2' ,'requried' , 'placeholder' => __('lang.select') . ' ' . __('lang.service')]) !!}
                    </div>--}}
                    <div class="clearfix"></div>
                    <div class="col-md-12 pt-3">
                        <div class="form-group">
                            <label for="video_url">{{ __('lang.video_url') }}</label>
                            <input type="url" name="video_url" id="video_url" class="form-control"  value="{{ old('video_url',$resource->video_url) }}">
                        </div>
                    </div>
                    @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                {{ __('lang.'.$locale.'.title') }}
                            </label>
                            {!! Form::text("{$locale}[title]", old("{$locale}[title]", optional($resource->translate($locale))->title), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endforeach

                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                {{ __('lang.'.$locale.'.short_description') }}
                            </label>
                            {!! Form::textarea("{$locale}[short_description]", old("{$locale}[short_description]", optional($resource->translate($locale))->short_description), ['class' => 'form-control ']) !!}
                        </div>
                    </div>
                @endforeach

                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="col-md-12 pt-2">
                        <div class="form-group">
                            <label for="name">
                                {{ __('lang.'.$locale.'.description') }}
                            </label>
                            {!! Form::textarea("{$locale}[description]", old("{$locale}[description]", optional($resource->translate($locale))->description), ['class' => 'form-control tinymce_ar']) !!}
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

<!-- File Input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/js/fileinput.js" type="text/javascript">
</script>
<script>
    $(".filesUploads").fileinput({
        theme: 'fa',
        language: 'ar',
        uploadAsync: false,
        rtl: true,
        showUpload: false,
        dropZoneTitle: '{{ __('lang.drop_images') }} <br/>',
        dropZoneClickTitle: '{{ __('lang.or_click_to_select') }} <br/>',
        showRemove: true,
        showCancel: true,
        autoReplace: false,
        allowedFileExtensions: ['jpg', 'png', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 4000,
        maxFileCount: "@isset($data) {{ 10 - $data->images_count }}) @else 10 @endisset",
        msgFilesTooMany: '{{ __('lang.num_selected_img') }} <b>({n})</b> {{ __('lang.max_num') }} <b>{m}</b>!',
        msgPlaceholder: '{{ __('lang.choose') }} {{ __('lang.image') }}',
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        browseLabel: '{{ __('lang.browse') }}',
        browseClass: 'btn btn-primary',
        removeLabel: '{{ __('lang.delete') }}',
        minFileCount: 0,
        validateInitialCount: true,

    });

    $(".file").fileinput({
        theme: 'fa',
        language: 'ar',
        rtl: true,
        showUpload: false,
        fileActionSettings: {
            showUpload: false,
        },
        dropZoneTitle: '{{ __('lang.drop_images') }} <br/>',
        dropZoneClickTitle: '{{ __('lang.or_click_to_select') }} <br/>',
        showRemove: true,
        allowedFileExtensions: ['jpg', 'png', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 4000,
        maxFileCount: "@isset($data) {{ 10 - $data->images_count }}) @else 10 @endisset",
        msgFilesTooMany: '{{ __('lang.num_selected_img') }} <b>({n})</b> {{ __('lang.max_num') }} <b>{m}</b>!',
        msgPlaceholder: '{{ __('lang.choose') }} {{ __('lang.image') }}',
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        browseLabel: '{{ __('lang.browse') }}',
        browseClass: 'btn blue',
        removeLabel: '{{ __('lang.delete') }}',
    });
</script>
<!-- Meta & SM Desc Length -->
<script>
    $('.max_length').keyup(function() {
        var length = $(this).attr('maxlength') - $(this).val().length;
        $(this).parent().find('.remChars').text(length);
    });
</script>
@endsection
