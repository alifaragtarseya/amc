  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('front/js/animation.js') }}"></script>
  <script src="{{ asset('front/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('front/js/popup.js') }}"></script>
  <script src="{{ asset('front/js/custom.js') }}"></script>
  <script src="{{ asset('front/js/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>


@yield('js')
<script>

  /**
   * Hero type effect
   */
   const typed = $('.typed');
  if (typed) {
    var typed_strings = typed.data('typed-items');
    // alert(typed.data('typed-items'));
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

</script>
