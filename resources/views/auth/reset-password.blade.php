
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
             <div class="col-md-6" style="margin-top:30px;">

                <div class="mb-4">
                    <a href="#" class="mb-40 max-w-290-px" style="margin-top: 15px;">
                        <img src="{{asset('flare_main.png')}}" alt="" style="width:350px;">
                    </a>
                    <h4 class="mb-12">Reset Your Password</h4>
                    <p class="mb-32 text-secondary-light text-lg">Please enter your detail</p>
                </div>
                <form action="{{ route('reset.password') }}" method="post">
                     @csrf

                    <div class="row mt-3">
                        <div class="col-md-12">
                                <div class="position-relative ">

                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" id="your-password" placeholder="Password">
                                <span style="margin-top: 17px;" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                                
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                        </div>
                        <div class="col-md-12 mt-4">
                                <div class="position-relative ">

                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="your-passwordd" placeholder="Password">
                                <span style="margin-top: 17px;" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-passwordd"></span>
                                
                                </div>
                                @error('password_confirmation')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                        </div>
                    </div>
                    
                    
                   

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-12">Update Password</button>

                    
                   
                    
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

<script>
      // ================== Password Show Hide Js Start ==========
      function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
  // ========================= Password Show Hide Js End ===========================
</script>

</body>
</html>
