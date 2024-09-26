 <!-- Bootstrap core CSS -->
 <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    @if (isRtl())

    <link rel="stylesheet" href="{{ asset('front/css/templatemo-rtl-dev.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('front/css/templatemo-dev.css') }}">

    @endif


    <link rel="stylesheet" href="{{ asset('front/css/animated.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front/css/owl.css') }}"> --}}
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}?v=1.4" rel="stylesheet">

    @if (isRtl())

    {{-- <link rel="stylesheet" href="{{ asset('front/css/my-style-rtl.css') }}"> --}}
    @else

    @endif
    <link rel="stylesheet" href="{{ asset('front/css/my-style.css') }}?v=1.4">

 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Icon Font Stylesheet -->


@yield('css')
<style>
    body > section.section--product.pt-5 > div > div > div.row.pt-5.mb-5.facts-counter > div > div
    {
        height: 100% !important;
    }
    .title--n p {
        color: #fff !important;
    }
    .decription--about * {
        line-height: 36px;
        font-size: 20px;
        font-weight: 400;
        color: #212121;
    }
</style>

