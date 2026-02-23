
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FlareTechMusic | Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- <link rel="stylesheet" href="./css/all.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('flare_logo-preview.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('flare_logo-preview.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('flare_logo-preview.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('flare_logo-preview.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('flare_logo-preview.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('flare_logo-preview.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('flare_logo-preview.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('flare_logo-preview.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('flare_logo-preview.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   

</head>

<body class="content__container">
    <div class="wrapper__signup">
        <div class="container_fluid">
            <h4 style="font-size: 25px;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            color: #333;">Sign Up</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">First Name</label>
                            <input type="text" name="first_name" class="form-control mobile_login_input {{ old('first_name') }}" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="First Name">
                
                                @error('first_name')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">Last Name</label>
                            <input type="text" name="last_name" class="form-control mobile_login_input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Last Name">
                
                                @error('last_name')
                                   <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">Email</label>
                            <input type="email" name="email" class="form-control mobile_login_input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email">
                
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">Lauguage</label>
                            <select class="form-control mobile_login_input" name="language">
                                <option>Language</option>
                            </select>
                
                            @error('language')
                                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">Password</label>
                            <input type="password" name="password" class="form-control mobile_login_input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="**********">
                
                                @error('from_date')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label form_labell">Password Retype</label>
                            <input type="password" name="password_confirmation" class="form-control mobile_login_input" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="**********">
                        
                                @error('password_confirmation')
                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 signup__select_grp">
                            <label for="exampleInputEmail1" class="form-label form_labell">Country</label>
                            <!-- <select class="form-control mobile_login_input">
                                <option>Country</option>
                            </select> -->

                            <select id="country-dropdown" class="js-example-basic-single" name="country"  style="width: 100%;">
                              <option>Country</option>  
                                @foreach($all_countries as $val) 
                                 <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                            </select>
                
                            @error('country')
                                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 signup__select_grp">
                            <label for="exampleInputEmail1" class="form-label form_labell">State</label>
                            <!-- <select class="form-control mobile_login_input">
                            <option>State</option>
                            </select> -->

                            <select id="state-dropdown" class="js-example-basic-single" name="state"  style="width: 100%;">
                                 
                            </select>
                
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="terms" class="form-check-input" id="exampleCheck1" value="1">
                            <label for="terms" class="control-label signup__conditions">I agree to  </label>
                            <a href="#" target="_blank" class="terms__sign"> Terms &amp; Conditions</a>

                            @error('terms')
                                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-group text-center signup__payTax">
                                <label for="taxYes" class="control-label sign__tax"> Are you paying tax ?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" checked>
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">No</label>                            
                                </div>              
                            </div>
                
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>

                
                

                <div class="row">
                    <div class="col-md-6">
                        <a style="width: 150px;" id="btn-sign-up" class="btn login_btn2" href="{{route('login')}}">
                            Cancel
                        </a>
                    </div>
                    <div class="col-md-6">

                        
                        <button style="width: 150px;float: right;" type="submit" id="btn-sign-up" class="btn login_btn">Sign Up</button>

                    </div>
                </div>


            </form>
        </div>




    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>    

    <script>
        $(document).on('click', '.toggle-password', function () {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#pass_log_id");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    </script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

    <script>
         $(document).ready(function() {
            $('#country-dropdown').change(function() {
                var country_id = $(this).val();
                var stateDropdown = $('#state-dropdown');
                stateDropdown.empty().append('');

                // if (country_id) {

                //     stateDropdown.hide();        
                // }

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
</body>

</html>