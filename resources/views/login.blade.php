
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
                    <h4 class="mb-12">Login to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
                </div>
                <form action="{{route('loginn')}}" method="post">
                     @csrf

                    <div class="row">
                        <div class="col-md-12">
                               <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                        

                    </div> 
                    <div class="row mt-3">
                        <div class="col-md-12">
                                <div class="position-relative ">

                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="your-password" placeholder="Password">
                                <span style="margin-top: 17px;" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                                
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <div class="form-check m-0 d-flex align-items-center">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <a href="{{route('forgot.password')}}" class="text-primary-600">
                            Forgot Password?
                        </a>

                    </div>
                    <div id="cf-turnstile-container" style="margin-top:14px">
                            <div class="cf-turnstile" data-sitekey="{{ config('services.cloudflare_turnstile.site_key') }}"></div>
                            <input type="hidden" id="turnstile-response" name="cf-turnstile-response" required>
                    </div>
                        @if ($errors->has('cf-turnstile-response'))
                            <div class="text-danger">{{ $errors->first('cf-turnstile-response') }}</div>
                        @endif

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-12"> Sign In</button>

                    
                    <div class="mt-32 text-center text-sm" style="position: relative;
    top: -18px;">
                        <p class="mb-0">Don't have an account?  <a href="{{route('register')}}" class="text-primary-600 fw-semibold">Register</a></p>
                    </div>
                    
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

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit"></script>

<script>
    turnstile.ready(function () {
        turnstile.render('#cf-turnstile-container', {
            'sitekey': '{{ config('services.cloudflare_turnstile.site_key') }}',
            'theme': 'light',
            'callback': function(token) {
                document.getElementById('turnstile-response').value = token;
            }
        });
    });
</script>

</body>
</html>
