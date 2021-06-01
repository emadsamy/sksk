@extends('index')

@section("content")
    <!-- Signature Page -->
  <div class="main-bg"></div>
  <div class="wrapper">
    <div class="homepage">
      <nav id="nav">
        <div class="container-fluid">
          <div class="navbar">
            <div></div>
            <a href="{{ url('/') }}" class="nav-logo">
              <img src="assets/img/logo.svg" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="main-title text-uppercase d-flex align-items-center"><button id="fulscreenBtn"><img src="assets/img/icons/expand.svg" /></button> Advanced and integrated mobility</div>
        <div class="full-page">
          <div class="home-center d-flex text-center">
            <div>
              <button id="openSignatureModal"
                class="home-icon-col animate__animated animate__fadeInDown animate__delay-0s">
                <span class="icon-signature icon"></span>
                <div class="home-icon-title">Signature</div>
              </button>
            </div>
            <div>
              <a href="{{ url('archives') }}" class="home-icon-col animate__animated animate__fadeInDown animate__delay-1s">
                <span class="icon-pen icon"></span>
                <div class="home-icon-title">Archives</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <footer id="footer">
        <div class="container-fluid height-fluid">
          <div class="footer-content height-fluid d-flex">
            <div class="fc-left">Saudi Aramco Mobility Center <a class="home-btn" href="{{ url('/') }}">Home</a>
              </div>
            <div class="fc-right"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Signature Page -->

  <!-- Signature Models -->
  <!-- Touchpad -->
  <div id="signatureTouchpad" class="signature-touchpad-modal stf-modal">
    <div class="signature-wrapper">
      <div class="sw-body touchpad-body">
        <div class="signature-pad-container">
          <canvas id="signature-pad" class="signature-pad"></canvas>
          <input type="hidden" name="imageData" id="imageData" />
        </div>
      </div>
      <div class="sw-footer">
        <div class="signature-actions">
          <button id="clear" class="sa-btn">Clear</button>
          {{-- <button id="openFormModal" class="sa-btn">Save</button> --}}
          <button id="saveSignature" class="sa-btn">Save</button>
          <button id="closeTouchpadModal" class="sa-btn">Home</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Form -->
  <div id="signatureForm" class="signature-form-modal stf-modal">
    <div class="signature-wrapper">
      <div class="sw-body">
        <div class="signature-form-container">
          <div class="form-title">Save your Signature</div>
          <form>
            <div class="form-group-input">
              <input id="name" type="text" placeholder="Name" required />
            </div>
            <div class="form-group-input mb-3">
              <input id="date" type="text" placeholder="Date" required />
            </div>
            <div class="form-group-input mb-0 text-center">
              <button id="inserSignature" type="button" class="sa-btn">Done</button>
            </div>
          </form>
        </div>
      </div>
      <div class="sw-footer">
        <button id="backToSignature" class="sa-btn">Back</button>
      </div>
    </div>
  </div>
  </div>
  <!-- Signature Models -->
@endsection

@push('css')
<link rel="stylesheet" href="assets/css/signature.css" />
<style type="text/css">
  .home-btn {
    color: #897a5b;
    margin-left: 15px;
    text-decoration: underline !important;
  }
  .home-btn:hover {
    color: #6c5e42
  }
  .home-btn:active {
    opacity: 0.7
  }
</style>
@endpush

@push('js')
<script src="assets/js/canvas.js"></script>
<script>


</script>
<script type="text/javascript">
  $(document).ready(function () {
      $("#openSignatureModal").on('click', function () {
        $("#signatureTouchpad").addClass('active');
        $("#signatureForm").removeClass('active');
        resizeCanvas();
        // GoOutFullscreen();
      });

      // $("#saveSignature").on('click', function () {
      //   $("#signatureTouchpad").removeClass('active');
      //   $("#signatureForm").addClass('active');
      // });

      $("#backToSignature").on('click', function () {
        $("#signatureTouchpad").addClass('active');
        $("#signatureForm").removeClass('active');
      });

      $("#closeTouchpadModal").on('click', function () {
        $("#signatureTouchpad").removeClass('active');
        resizeCanvas();
      });
      // Touchpad
      var canvas = document.getElementById('signature-pad');

      var signaturePad = new SignaturePad(canvas, {
        backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
      });
      function resizeCanvas() {
        var ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
      }

      window.onresize = resizeCanvas;
      resizeCanvas();

      document.getElementById('clear').addEventListener('click', function () {
        signaturePad.clear();
      });

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });

      var dataURL = "";
      $("#saveSignature").on('click', function () {
        var canvas = document.getElementById('signature-pad');
        dataURL = canvas.toDataURL();
        $("#signatureTouchpad").removeClass('active');
        $("#signatureForm").addClass('active');

      });

      $("#inserSignature").on('click', function () {
        $.ajax({
          url: '{{ url('signature') }}',
          type: 'POST',
          data: {
            imgBase64: dataURL,
            name: $("#name").val(),
            date: $("#date").val()
          },
          beforeSend: function (data) {
            $("#inserSignature").attr('disabled', true);
          },
          success: function (data) {
            console.log(data);
            if (data.success) {
              alert('Congratulations signature added.');
              $("#inserSignature").attr('disabled', false);
              window.location.href = '{{ url('archives') }}';
            }
          },
          error: function (error) {
            console.log(error);
          }
        });
      });

    });
</script>
@endpush

@push('csss')
<style type="text/css">
  button::disabled {
    cursor: not-allowed;
    opacity: 0.5;
  }
</style>
@endpush