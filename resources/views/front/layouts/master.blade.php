<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! stripslashes(JsonLd::generate()) !!}
    <meta name="author" content="Tawazun Digital Marting">

    {{-- <title>@yield('title')</title> --}}

    <!-- Favicon -->
    <link href="{{ asset(getSettingValue('favicon')) }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary: #B58050;
            --secondary: #10312B;
            --light: #F6F7FC;
            --dark: #15233C;
        }
    </style>
    @if (app()->getLocale() == 'ar')
        <style>
            html,
            body,
            div,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            b,
            li,
            a,
            li.a,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6,
            * {
                /* font-family: 'Source Sans 3', sans-serif; */
                
                font-family: "GE SS Two Medium" !important;
                font-weight: 500;
            }
        </style>
    @else
        <style>
            html,
            body,
            div,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            b,
            li,
            a,
            li.a,
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6,
            * {
                /* font-family: 'Source Sans 3', sans-serif; */
                font-family: 'Myriad Pro', sans-serif!important;                
                font-weight: 500;
            }
        </style>
    @endif
    @include('front.layouts.css')
</head>

<body class="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
    <!-- ***** Preloader End ***** -->

    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    {{-- <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-main text-white btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}

    @include('front.layouts.script')
</body>

</html>
