
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
    <style>
        .service-agreement h3{
            font-size:18px !important;
            margin-top:18px;
        }
        .service-agreement h4{
            font-size:16px !important;
            margin-top:18px;
        }
        .service-agreement{
            margin-left:10px;
        }

        .privacy-policy h3{
            font-size:18px !important;
            margin-top:18px;
        }
        .privacy-policy h4{
            font-size:16px !important;
            margin-top:18px;
        }
        .privacy-policy{
            margin-left:10px;
        }

        
    </style>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="text-primary-600 fw-semibold">End User Agreement</a>
                                 and our 
                               
                                <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal" class="text-primary-600 fw-semibold">Privacy Policy</a>
                                
                            </label>
                            
                        </div>
                         
                    </div>
                    @error('terms')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    
                    <div class="d-flex align-items-center flex-wrap gap-28 mt-2">
                           <div class="form-check checked-primary d-flex align-items-center" style="margin-top: 20px;">
                            <p>Are you paying Tax</p>
                            </div>
                            <div class="form-check checked-primary d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="pay_tax" id="radio11" value="1" checked>
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

<!-- Terms & Conditions Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

      <!-- Header -->
      <div class="modal-header bg-white border-bottom px-4 py-3">
        <div class="w-100 text-center">
          <h5 class="modal-title fw-bold mb-0">End User Agreement</h5>
        </div>
        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body bg-light px-4 py-4">
             
        <div class="service-agreement">

        <p style="text-align:center;" class="mt-3"><strong>FlareTechMusic End-User Agreement</strong></p>

         
            <!-- <p>Effective Date: January 1, 2026</p>
            <p>Last Updated: March 31, 2026</p> -->

            <p>Welcome to FlareTechMusic, a platform operated by Flare Tech Nigeria Ltd (“FlareTech,” “we,” “our,” or “us”).</p>

            <p>By creating an account or using our platform (www.flaretechmusic.com), you agree to this End-User Agreement (“Agreement”), along with our Terms of Service and Privacy Policy. If you do not agree, please do not use the platform.</p>

            <h3>1. Eligibility and Your Account</h3>
            <ul>
            <li>- You must be at least 18 years old to use FlareTechMusic.</li>
            <li>- You agree to provide accurate and up-to-date information.</li>
            <li>- You are responsible for your account and all activities under it.</li>
            <li>- Keep your login details secure and notify us if your account is compromised.</li>
            </ul>

            <h3>2. Use of the Platform</h3>
            <p>You agree to use FlareTechMusic responsibly and legally. You must not:</p>
            <ul>
            <li>- Upload illegal, harmful, or misleading content</li>
            <li>- Attempt to hack, disrupt, or misuse the platform</li>
            <li>- Misrepresent ownership of content</li>
            </ul>
            <p>FlareTechMusic may suspend or remove accounts that violate these rules.</p>

            <h3>3. Your Content and Rights</h3>
            <ul>
            <li>- You own your content (music, artwork, metadata, etc.).</li>
            <li>- By uploading content, you give FlareTechMusic permission to host, distribute, promote, and monetize it on your behalf.</li>
            <li>- In some cases, this license may be exclusive for distribution purposes.</li>
            <li>- If FlareTechMusic offers to acquire your content, you will be required to approve a separate agreement before any ownership transfer.</li>
            </ul>
            <p>You confirm that:</p>
            <ul>
            <li>- You own the rights to your content</li>
            <li>- Your content does not infringe on anyone else’s rights</li>
            </ul>

            <h3>4. Distribution and Promotion</h3>
            <ul>
            <li>- FlareTechMusic distributes your content to streaming platforms and digital stores.</li>
            <li>- We may use your name, artwork, and content for promotion.</li>
            <li>- Distribution depends on third-party platforms, and their rules may affect availability.</li>
            </ul>

            <h3>5. Royalties, Payments, and Withdrawals</h3>
            <ul>
            <li>- You earn royalties based on how your content performs on partner platforms.</li>
            <li>- You must withdraw your earnings directly from your dashboard.</li>
            <li>- Payments are made based on verified reports and actual revenue received by FlareTechMusic.</li>
            </ul>

            <p>Important Notes:</p>
            <ul>
            <li>- Payments follow a payout schedule</li>
            <li>- Earnings are calculated on a Net Revenue basis (after deductions)</li>
            <li>- FlareTechMusic may correct errors or adjust balances when necessary</li>
            </ul>

            <p>Deductions</p>
            <p>Your earnings may be reduced by:</p>
            <ul>
            <li>- Platform service fees or commissions</li>
            <li>- DSP charges and processing fees</li>
            <li>- Taxes and regulatory deductions</li>
            </ul>

            <p>Disputes</p>
            <p>If there is a copyright or royalty dispute, FlareTechMusic may:</p>
            <ul>
            <li>- Withhold payments</li>
            <li>- Pause distribution</li>
            </ul>
            <p>until the issue is resolved.</p>

            <p>No Guarantees</p>
            <p>FlareTechMusic does not guarantee any level of income or payment timing.</p>

            <h3>6. Wallet and Payments System</h3>
            <ul>
            <li>- Your FlareTechMusic wallet allows you to store funds and make transactions.</li>
            <li>- A minimum balance of ₦3,000 (or $2.20) must remain in your wallet.</li>
            <li>- This balance can be used for subscriptions or services, but cannot be withdrawn.</li>
            </ul>

            <p>FlareTechMusic may update this minimum due to:</p>
            <ul>
            <li>- Exchange rates</li>
            <li>- Inflation</li>
            <li>- Platform updates</li>
            </ul>

            <h3>7. Subscription Plans and Auto-Renewal</h3>
            <ul>
            <li>- Some features require a subscription plan.</li>
            <li>- Royalty sharing may depend on your selected plan.</li>
            </ul>

            <p>Auto-Renewal</p>
            <ul>
            <li>- Subscriptions may renew automatically</li>
            <li>- You can cancel before the renewal date to avoid charges</li>
            </ul>

            <p>FlareTechMusic may adjust pricing or plans due to economic or operational changes.</p>

            <h3>8. Artificial Streaming and Fraud</h3>
            <p>You must not:</p>
            <ul>
            <li>- Use bots, fake streams, or click farms</li>
            <li>- Manipulate streaming numbers or engagement</li>
            </ul>

            <p>If detected:</p>
            <ul>
            <li>- Your content may be removed</li>
            <li>- Your account may be suspended</li>
            <li>- Your royalties may be withheld</li>
            </ul>

            <p>FlareTechMusic is not responsible for penalties imposed by DSPs.</p>

            <h3>9. Reward Coins (MVP Stage)</h3>
            <ul>
            <li>- Reward coins are for platform engagement only</li>
            <li>- They are not money, crypto, or investments</li>
            <li>- They have no monetary value unless officially announced</li>
            </ul>

            <p>FlareTechMusic is not responsible for any misunderstanding about their value.</p>

            <h3>10. Content Review and Approval</h3>
            <ul>
            <li>- All uploads are subject to review</li>
            <li>- Content may be approved, delayed, or rejected</li>
            </ul>

            <p>Timeline</p>
            <ul>
            <li>- Approval may take at least 2 weeks or more</li>
            </ul>

            <p>FlareTechMusic does not guarantee release dates and is not liable for delays.</p>

            <h3>11. Copyright and Responsibility</h3>
            <p>You are responsible for ensuring your content is legal and properly licensed.</p>

            <p>If you upload infringing content, FlareTechMusic may:</p>
            <ul>
            <li>- Remove the content</li>
            <li>- Suspend your account</li>
            <li>- Withhold royalties</li>
            <li>- Take legal action</li>
            </ul>

            <p>FlareTechMusic is not liable for user-uploaded content.</p>

            <h3>12. System Limitations</h3>
            <ul>
            <li>- Digital platforms are not perfect</li>
            <li>- Errors, delays, or data differences may occur</li>
            </ul>

            <p>FlareTechMusic is not liable for:</p>
            <ul>
            <li>- Reporting discrepancies</li>
            <li>- Technical issues</li>
            <li>- Third-party system failures</li>
            </ul>

            <h3>13. Account Suspension or Termination</h3>
            <p>FlareTechMusic may suspend or terminate your account if you:</p>
            <ul>
            <li>- Break these rules</li>
            <li>- Engage in fraud</li>
            <li>- Misuse the platform</li>
            </ul>

            <p>You may also close your account at any time.</p>

            <h3>14. Limitation of Liability</h3>
            <p>FlareTechMusic is not liable for:</p>
            <ul>
            <li>- Loss of income, data, or opportunities</li>
            <li>- Third-party platform actions</li>
            <li>- Delays or system issues</li>
            </ul>

            <p>Our total liability is limited to the amount paid to you in the last 12 months.</p>

            <h3>15. Indemnity</h3>
            <p>You agree to protect FlareTechMusic from any claims, losses, or damages caused by:</p>
            <ul>
            <li>- Your content</li>
            <li>- Your actions on the platform</li>
            <li>- Your violation of this Agreement</li>
            </ul>

            <h3>16. Changes to This Agreement</h3>
            <p>We may update this Agreement from time to time. Continued use of the platform means you accept any updates.</p>

            <h3>17. Governing Law</h3>
            <p>This Agreement is governed by the laws of the Federal Republic of Nigeria. Disputes will first be resolved amicably, then through arbitration in Lagos, Nigeria if necessary.</p>

            <h3>18. Contact Us</h3>
            <p>Email: support@flaretechmusic.com</p>
            <p>Website: www.flaretechmusic.com</p>

        </div>
       
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-white border-top px-4 py-3 d-flex justify-content-between">
        <p>Please read all end user aggreement carefully</p>
        <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">
          I Understand
        </button>
      </div>

    </div>
  </div>
</div>


<!-- Privacy Modal -->
  <div class="modal fade" id="privacyModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

      <!-- Header -->
      <div class="modal-header bg-white border-bottom px-4 py-3">
        <div class="w-100 text-center">
          <h5 class="modal-title fw-bold mb-0">PRIVACY POLICY</h5>
        </div>
        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body bg-light px-4 py-4">
             
        <div class="privacy-policy">

            <p style="text-align:center;" class="mt-3"><strong>PRIVACY POLICY</strong></p>

            <p style="text-align:center;" class="mt-3"><strong>FlareTechMusic – Music Distribution and Licensing Platform</strong></p>

            <!-- <p><strong>Effective Date:</strong> __________________</p>
            <p><strong>Last Updated:</strong> __________________</p> -->

            <hr />

            <h3>1. Introduction</h3>

            <p>Welcome to FlareTechMusic.</p>

            <p>
                FlareTechMusic (“FlareTechMusic,” “the Platform,” “we,” “our,” or “us”) operates a digital music technology platform that enables creators, rights holders, labels, publishers, and other stakeholders in the music industry to distribute, manage, and license music and other creative content.
            </p>

            <p>
                We respect your privacy and are committed to protecting the personal information of our users, partners, and visitors. This Privacy Policy explains how we collect, use, store, and protect personal information when you access or use the FlareTechMusic platform and services.
            </p>

            <p>
                By using FlareTechMusic, you agree to the collection and use of information in accordance with this Privacy Policy.
            </p>

            <h3>2. Information We Collect</h3>

            <p>FlareTechMusic may collect the following categories of information:</p>

            <h4>2.1 Personal Information</h4>
            <ul>
                <li>Full name</li>
                <li>Email address</li>
                <li>Phone number</li>
                <li>Company or business name</li>
                <li>Billing address</li>
                <li>Payment information</li>
                <li>Identification documents for verification where necessary</li>
            </ul>

            <h4>2.2 Content and Rights Information</h4>
            <ul>
                <li>Artist or creator name</li>
                <li>Song titles and catalogue information</li>
                <li>Metadata including ISRC, ISWC, UPC, album titles, and release dates</li>
                <li>Ownership and rights information</li>
                <li>Licensing documentation</li>
                <li>Copyright ownership details</li>
            </ul>

            <h4>2.3 Technical and Usage Data</h4>
            <ul>
                <li>IP address</li>
                <li>Device type and operating system</li>
                <li>Browser type</li>
                <li>Approximate location information</li>
                <li>Pages visited on the platform</li>
                <li>Platform usage statistics</li>
                <li>Login activity and timestamps</li>
            </ul>

            <h4>2.4 Payment and Transaction Information</h4>
            <ul>
                <li>Payment details</li>
                <li>Bank account details for royalty payments or revenue distributions</li>
                <li>Transaction and licensing records</li>
                <li>Revenue and royalty reporting information</li>
            </ul>

            <p>
                Payments may be processed through third-party payment service providers.
            </p>

            <h3>3. How We Use Your Information</h3>

            <p>FlareTechMusic uses the information collected for the following purposes:</p>

            <h4>Platform Operations</h4>
            <ul>
                <li>Creating and managing user accounts</li>
                <li>Enabling music distribution services</li>
                <li>Managing catalogue metadata and content uploads</li>
                <li>Facilitating licensing transactions</li>
            </ul>

            <h4>Rights Management and Licensing</h4>
            <ul>
                <li>Verifying ownership or control of rights</li>
                <li>Facilitating licensing agreements</li>
                <li>Administering royalties and payments</li>
            </ul>

            <h4>Platform Improvement</h4>
            <ul>
                <li>Improving platform functionality</li>
                <li>Monitoring system performance</li>
                <li>Conducting analytics and research</li>
            </ul>

            <h4>Legal and Compliance</h4>
            <ul>
                <li>Preventing fraud or misuse of the platform</li>
                <li>Complying with legal obligations</li>
                <li>Enforcing our terms, agreements, and platform policies</li>
            </ul>

            <h3>4. Sharing of Information</h3>

            <h4>Licensing and Distribution Partners</h4>
            <p>Where necessary to facilitate the exploitation of content, information may be shared with:</p>
            <ul>
                <li>Digital streaming platforms</li>
                <li>Music distribution partners</li>
                <li>Synchronization and licensing partners</li>
                <li>Collective management organisations</li>
                <li>Media and entertainment partners</li>
            </ul>

            <p>
                Only relevant metadata and licensing information required for exploitation of the content will be shared.
            </p>

            <h4>Service Providers</h4>
            <p>We may share data with trusted third-party service providers that support the operation of the platform, including:</p>
            <ul>
                <li>Payment processors</li>
                <li>Cloud hosting providers</li>
                <li>Data analytics providers</li>
                <li>Identity verification services</li>
            </ul>

            <h4>Legal Requirements</h4>
            <p>We may disclose personal information where required to:</p>
            <ul>
                <li>Comply with applicable laws and regulations</li>
                <li>Respond to legal requests or government authorities</li>
                <li>Protect the rights, safety, or integrity of FlareTechMusic or its users</li>
            </ul>

            <h3>5. Data Storage and Security</h3>

            <p>FlareTechMusic takes reasonable technical and organizational measures to protect personal data from unauthorized access, disclosure, loss, or misuse.</p>

            <p>Security measures may include:</p>
            <ul>
                <li>Secure hosting infrastructure</li>
                <li>Data encryption</li>
                <li>Access control and authentication procedures</li>
                <li>Regular security monitoring and updates</li>
            </ul>

            <p>However, no system can guarantee absolute security.</p>

            <h3>6. Data Retention</h3>

            <p>FlareTechMusic retains personal information only for as long as necessary to:</p>
            <ul>
                <li>Provide the services of the platform</li>
                <li>Fulfil contractual obligations</li>
                <li>Comply with legal and regulatory requirements</li>
                <li>Resolve disputes and enforce agreements</li>
            </ul>

            <p>When data is no longer required, it may be securely deleted or anonymized.</p>

            <h3>7. Your Privacy Rights</h3>

            <p>Depending on applicable laws in your jurisdiction, you may have the right to:</p>
            <ul>
                <li>Access the personal information we hold about you</li>
                <li>Request correction of inaccurate or incomplete data</li>
                <li>Request deletion of personal data</li>
                <li>Restrict processing of personal information</li>
                <li>Withdraw consent where processing is based on consent</li>
            </ul>

            <p>Requests may be submitted using the contact information provided below.</p>

            <h3>8. Cookies and Tracking Technologies</h3>

            <p>FlareTechMusic may use cookies and similar technologies to:</p>
            <ul>
                <li>Improve user experience</li>
                <li>Maintain login sessions</li>
                <li>Analyse platform traffic</li>
                <li>Store user preferences</li>
            </ul>

            <p>
                Users may adjust their browser settings to refuse cookies, although some platform features may not function properly as a result.
            </p>

            <h3>9. Third-Party Links</h3>

            <p>
                The FlareTechMusic platform may contain links to third-party websites or services. We are not responsible for the privacy practices or policies of such external platforms.
            </p>

            <p>
                Users are encouraged to review the privacy policies of any third-party services they access.
            </p>

            <h3>10. Children's Privacy</h3>

            <p>
                FlareTechMusic is not intended for individuals under the age of 18. We do not knowingly collect personal information from minors without appropriate consent.
            </p>

            <h3>11. Updates to This Privacy Policy</h3>

            <p>FlareTechMusic may update this Privacy Policy periodically to reflect:</p>
            <ul>
                <li>Changes in services</li>
                <li>Regulatory requirements</li>
                <li>Industry best practices</li>
            </ul>

            <p>
                Updates will be posted on the platform with the revised effective date.
            </p>

            <h3>12. Contact Information</h3>

            <p>For questions regarding this Privacy Policy or the handling of personal information, please contact:</p>

            <p><strong>FlareTechMusic</strong></p>

            <ul>
                <li>Email: __________________________</li>
                <li>Address: ________________________</li>
                <li>Phone: __________________________</li>
            </ul>

            </div>
       
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-white border-top px-4 py-3 d-flex justify-content-between">
        <p >Please read the privacy policy carefully</p>
        <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">
          I Understand
        </button>
      </div>

    </div>
  </div>
</div>

<!-- End Privacy Modal -->

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
