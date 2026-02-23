
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
  

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FlareTechMusic | Sign Up</title>
    
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

    <div class="container">
         <div class="row">

             <div class="col-md-5">
                <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                    <img src="assets/images/auth/auth-img.png" alt="" >
                </div>
             </div>
             <div class="col-md-7">
                <div class="mb-4">
                    <a href="#" class="mb-40 max-w-290-px align-items-center" style="margin-top: 15px;">
                        <img src="{{asset('flare_main.png')}}" alt="" style="width: 350px;">
                    </a>
                    <h4 class="mb-12" style="font-size: 25px !important;">Register for An Account</h4>
                    <!-- <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p> -->
                </div>
                <form action="{{route('save_reg')}}" method="post">
                     @csrf
                    <div class="row mb-3">
                            <div class="col-md-6">

                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="FirstName" value="{{ old('first_name') }}">
                                @error('first_name')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror  
                            </div> 
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" placeholder="LastName" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror  
                            </div>
                    </div>  
                    <div class="row mb-3">
                            <div class="col-md-6">
                            <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                                
                            </div> 
                            <div class="col-md-6">

                                <label class="form-label" style="display: block;">Language</label>
                                <select name="language" class="js-example-basic-singleet" style="width: 100% !important">
                                         <option>Language</option>  
                                          @foreach($languages as $vall) 
                                            <option value="{{$vall->iso}}">{{$vall->name}}</option>
                                          @endforeach
                                </select>
                                @error('language')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                                
                            </div>
                    </div> 
                    
                    <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="position-relative ">

                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control generated-password" id="your-password" placeholder="Password">
                                <span style="margin-top: 17px;" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                                
                                </div>
                                <button style="margin-top:12px;" type="button" class="btn btn-sm btn-primary" id="generate-password-btn">Generate Password</button>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
                            </div> 
                            <div class="col-md-6">
                                <div class="position-relative ">
                                <label class="form-label">Password Confirm</label>
                                <input type="password" name="password_confirmation" class="form-control" id="your-passwordd" placeholder="Password">
                                <span style="margin-top:18px;margin-right: 13px !important;" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-passwordd"></span>
                                </div>
                               
                                @error('password_confirmation')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col-md-6">

                               <label class="form-label" style="display: block;">Country</label>
                                <select id="country-dropdown" data-width="100%" class="js-example-basic-single" name="country">
                                     <option>Country</option>  
                                        @foreach($all_countries as $val) 
                                        <option value="{{$val->iso2}}">{{$val->name}}</option>
                                        @endforeach
                                </select>
                                @error('country')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror 
    
                            </div> 
                            <div class="col-md-6">

                                   <label class="form-label" style="display: block;">State</label>
                                    <select id="state-dropdown"  class="js-example-basic-single" name="state" style="width: 100% !important">
                                       <option>State</option>
                                    </select>
                                    
                                    @error('state')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror  
                            </div>
                    </div>

                    <!-- <div class="row mb-3">
                            <div class="col-md-6">

                               <label class="form-label" style="display: block;">Referral code</label>
                               <input type="text" name="referral_code" class="form-control" placeholder="Referral Code (optional)" value="{{ $referralCode }}" readonly>
                                
                            </div> 
                            
                    </div> -->

                    <input type="hidden" name="referral_code" class="form-control" placeholder="Referral Code (optional)" value="{{ $referralCode }}">
                    
                    <div class="d-flex justify-content-between gap-2">
                        <div class="form-check style-check d-flex align-items-start">
                            <input type="checkbox" class="form-check-input border border-neutral-300 mt-4" name="terms"  value="1" id="condition">
                            <label class="form-check-label text-sm" for="condition">
                                By creating an account means you agree to the 
                                <a href="javascript:void(0)" class="text-primary-600 fw-semibold">Terms & Conditions</a> and our 
                                <a href="javascript:void(0)" class="text-primary-600 fw-semibold">Privacy Policy</a>
                            </label>
                            @error('terms')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror 
                        </div>
                        
                    </div>
                    
                    <div class="d-flex align-items-center flex-wrap gap-28 mt-2">
                           <div class="form-check checked-primary d-flex align-items-center" style="margin-top: 20px;">
                            <p>Are you paying Tax</p>
                            </div>
                            <div class="form-check checked-primary d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="pay_tax" id="radio11" value="1">
                                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="radio11">Yes</label>
                            </div>
                            <div class="form-check checked-primary d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="pay_tax" id="radio12" value="0">
                                <label class="form-check-label line-height-1 fw-medium text-secondary-light" for="radio11">No</label>

                                <strong style="color:red">{{ $errors->first('pay_tax') }}</strong>
                            </div>
                           
                           
                    </div>

                    <div id="cf-turnstile-container" style="margin-top:14px">
                            <div class="cf-turnstile" data-sitekey="{{ config('services.cloudflare_turnstile.site_key') }}"></div>
                            <input type="hidden" id="turnstile-response" name="cf-turnstile-response" required>
                    </div>
                        @if ($errors->has('cf-turnstile-response'))
                            <div class="text-danger">{{ $errors->first('cf-turnstile-response') }}</div>
                        @endif

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-2"> Sign Up</button>
                    <div class="mt-32 text-center text-sm">
                        <p class="mb-3" style="margin-top: -20px;">Already have an account? <a href="{{route('showlogin')}}" class="text-primary-600 fw-semibold">Sign In</a></p>
                    </div>
                    
                </form>
             </div>

         </div>
    </div>
</section>

  <!-- jQuery library js -->
  <script src="{{asset('assets/js/lib/jquery-3.7.1.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('assets/js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('assets/js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('assets/js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('assets/js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('assets/js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('assets/js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('assets/js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('assets/js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('assets/js/lib/audioplayer.js')}}"></script>
  
  <!-- main js -->
  <script src="{{asset('assets/js/app.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 

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

<script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
</script>

<script>
        $(document).ready(function() {
            $('.js-example-basic-singleet').select2({
                width: 'resolve'
            });
        });
</script>

<script>
         $(document).ready(function() {
            $('#country-dropdown').change(function() {
                var country_id = $(this).val();
                var stateDropdown = $('#state-dropdown');
                stateDropdown.empty().append('');

                $.ajax({
                    url: "{{ route('all_states') }}",
                    data: {country_id: country_id},
                    type: "GET",
                    success: function (response) {
                        const all_states = response.data;
                        
                        all_states.forEach(function(state) {
                        stateDropdown.append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                        console.log(all_states);

                        
                        
                    },
                    error: function (error) {
                        console.error('AJAX Error:', error);
                    }
                });  
            });
         });
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

    <script>
        $(document).ready(function() {
            $('#generate-password-btn').on('click', function() {
                var length = 12; // Desired password length
                var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=";
                var password = "";
                for (var i = 0; i < length; i++) {
                    password += charset.charAt(Math.floor(Math.random() * charset.length));
                }
                $('.generated-password').val(password);
            });
        });
    </script>

</body>
</html>
