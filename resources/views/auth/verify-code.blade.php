
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
  

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FlareTechMusic | Sign In</title>
    <link rel="icon" type="image/png" href="flare_logo2.png" sizes="96x96" />
    <!-- <link rel="icon" type="image/png" href="flare_tech/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="flare_tech/favicon.svg" />
    <link rel="shortcut icon" href="flare_tech/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="flare_tech/apple-touch-icon.png" />
    <link rel="manifest" href="flare_tech/site.webmanifest" /> -->
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}" />
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.min.css')}}" />
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/apexcharts.css')}}" />
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/dataTables.min.css')}}" />
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/editor-katex.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lib/editor.atom-one-dark.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lib/editor.quill.snow.css')}}" />
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/flatpickr.min.css')}}" />
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/full-calendar.css')}}" />
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery-jvectormap-2.0.5.css')}}" />
    <!-- Popup css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/magnific-popup.css')}}" />
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/slick.css')}}" />
    <!-- prism css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/prism.css')}}" />
    <!-- file upload css -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/file-upload.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/lib/audioplayer.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body></body>


</html>


<section class="auth bg-base d-flex flex-wrap">  


@if(session()->has('loginSuccess'))
  @include('sweetalert::alert')  
@endif

@if (Session::has('error'))
   @include('sweetalert::alert')
@endif
    <div class="container">
         <div class="row">
             <div class="col-md-6">
                <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                    <img src="assets/images/auth/auth-img.png" alt="" >
                </div>
             </div>
             <div class="col-md-6" style="margin-top:100px;">

                <div class="mb-4">
                    <a href="#" class="mb-40 max-w-290-px" style="margin-top: 15px;">
                        <img src="{{asset('flare_main.png')}}" alt="" style="width:350px;">
                    </a>
                    <h4 class="mb-12">Verify Code</h4>
                    <p class="mb-32 text-secondary-light text-lg">Please enter your detail</p>
                </div>
                <form action="{{ route('veri_code') }}" method="post">
                     @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Enter 4 Digit Code</label>

                            <div class="d-flex gap-2 justify-content-between otp-container">
                                <input type="text" maxlength="1" class="form-control text-center otp-input" />
                                <input type="text" maxlength="1" class="form-control text-center otp-input" />
                                <input type="text" maxlength="1" class="form-control text-center otp-input" />
                                <input type="text" maxlength="1" class="form-control text-center otp-input" />
                            </div>

                            <!-- Hidden field that will contain full 4-digit code -->
                            <input type="hidden" name="code" id="full-code">

                            @error('code')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div> 
                   
                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-12">Verify</button>

                </form>

             </div>
        </div> 
    </div>       

    
</section>

  <!-- jQuery library js -->
  <script src="assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="assets/js/lib/slick.min.js"></script>
  <!-- prism js -->
  <script src="assets/js/lib/prism.js"></script>
  <!-- file upload js -->
  <script src="assets/js/lib/file-upload.js"></script>
  <!-- audioplayer -->
  <script src="assets/js/lib/audioplayer.js"></script>
  
  <!-- main js -->
  <script src="assets/js/app.js"></script>


</body>
</html>
<script>
    const inputs = document.querySelectorAll(".otp-input");
    const hiddenInput = document.getElementById("full-code");

    inputs.forEach((input, index) => {

        // Allow only numbers & auto move
        input.addEventListener("input", function () {
            this.value = this.value.replace(/[^0-9]/g, '');

            if (this.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }

            updateHiddenInput();
        });

        // Backspace move
        input.addEventListener("keydown", function (e) {
            if (e.key === "Backspace" && !this.value && index > 0) {
                inputs[index - 1].focus();
            }
        });

        // Paste full code support
        input.addEventListener("paste", function (e) {
            e.preventDefault();

            let pastedData = (e.clipboardData || window.clipboardData)
                                .getData("text")
                                .replace(/[^0-9]/g, '');

            if (!pastedData) return;

            pastedData = pastedData.substring(0, inputs.length);

            inputs.forEach((box, i) => {
                box.value = pastedData[i] ?? '';
            });

            updateHiddenInput();

            // Focus last filled box
            const lastIndex = pastedData.length - 1;
            if (inputs[lastIndex]) {
                inputs[lastIndex].focus();
            }
        });
    });

    function updateHiddenInput() {
        let code = "";
        inputs.forEach(input => {
            code += input.value;
        });
        hiddenInput.value = code;
    }
</script>