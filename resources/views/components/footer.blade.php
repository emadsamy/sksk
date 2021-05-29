</body>
<!-- Scripts -->
  <!-- Jquery V 3.3.1 -->
  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <!-- Popper Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <!-- Bootstrap V 4.3.1 -->
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Main Functions -->
  <!-- <script src="assets/js/canvas.js"></script> -->
  <script src="{{ url('assets/js/functions.js') }}"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  @stack('js')
</body>

</html>