
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="text-primary-600 fw-semibold">Terms & Conditions</a>
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
          <h5 class="modal-title fw-bold mb-0">Terms & Conditions</h5>
        </div>
        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body bg-light px-4 py-4">
             
        <div class="service-agreement">

        <p style="text-align:center;" class="mt-3"><strong>FLARETECHMUSIC PLATFORM SERVICE AGREEMENT</strong></p>

        <p><strong>Effective Date:</strong> January 1, 2026</p>

        <p>
            This Service Agreement (“Agreement”) governs access to and use of the FlareTechMusic platform and related services provided by Flare Tech Nigeria Limited.
        </p>

        <p>
            This Agreement is made available electronically and shall become legally binding upon electronic acceptance by the subscribing estate, client, or authorised administrator through the FlareTechMusic platform, including but not limited to selecting or ticking the “I Agree”, “Accept”, or “Accept Terms and Conditions” checkbox, or by otherwise accessing or using the platform.
        </p>

        <p>
            By accepting this Agreement electronically, the subscribing client or authorised representative confirms that they have read, understood, and agree to be bound by its terms.
        </p>

        <hr />

        <h3>1. Parties and Interpretation</h3>
        <ul>
            <li>Flare Tech Nigeria Limited (“FlareTechMusic”) is a company duly incorporated under the laws of the Federal Republic of Nigeria and the owner/operator of the FlareTechMusic platform.</li>
            <li>The Client refers to any individual, label, estate, company, or authorised representative accepting this Agreement.</li>
        </ul>

        <p>Flare Tech and the Client may be referred to individually as a “Party” and collectively as the “Parties.”</p>

        <h3>2. Roles & Responsibilities</h3>

        <h4>2.1 FlareTechMusic’s Responsibilities</h4>
        <ul>
            <li>Provide access to the FlareTechMusic platform and its features</li>
            <li>Facilitate content distribution to Digital Service Providers (DSPs)</li>
            <li>Provide royalty reporting based on third-party data</li>
            <li>Maintain reasonable system functionality and security</li>
            <li>Provide support services where applicable</li>
        </ul>

        <h4>2.2 Client Responsibilities</h4>
        <ul>
            <li>Ensure all uploaded content is lawful and rights-cleared</li>
            <li>Maintain accurate account and payment information</li>
            <li>Comply with all applicable copyright, tax, and regulatory obligations</li>
            <li>Use the platform in accordance with this Agreement</li>
        </ul>

        <h3>3. Service Availability & Uptime</h3>
        <p>Flare Tech shall use commercially reasonable efforts to ensure platform availability.</p>

        <p>However, the Client acknowledges that:</p>
        <ul>
            <li>Services may be interrupted due to maintenance, upgrades, or third-party failures</li>
            <li>Flare Tech does not guarantee uninterrupted or error-free operation</li>
        </ul>

        <h3>4. Fees, Billing & Payment Enforcement</h3>

        <h4>4.1 Fees Payable</h4>
        <p>The Client agrees to pay all applicable:</p>
        <ul>
            <li>Subscription fees</li>
            <li>Distribution or service charges</li>
            <li>Licensing or SaaS fees</li>
        </ul>
        <p>as specified on the platform or in a separate agreement.</p>

        <h4>4.2 Billing & Payment Terms</h4>
        <ul>
            <li>Payments shall be made in advance unless otherwise agreed</li>
            <li>Failure to pay may result in restricted access</li>
        </ul>

        <h4>4.3 Late Payment, Grace Period & Enforcement</h4>
        <ul>
            <li>Late Payment Charges – FlareTechMusic may apply penalties or interest where applicable.</li>
            <li>Restriction of Platform Features – Access to certain features may be limited.</li>
            <li>Suspension of Services – Continued default may result in suspension.</li>
            <li>Termination for Persistent Default – Flare Tech may terminate the Agreement.</li>
            <li>Recovery of Outstanding Amounts – Flare Tech reserves the right to recover unpaid sums.</li>
            <li>No Waiver – Failure to enforce rights does not waive them.</li>
            <li>Conditional Platform Access – Access may be restored upon settlement of outstanding obligations.</li>
        </ul>

        <h3>5. Subscription Plans, Wallet & Payments</h3>
        <ul>
            <li>Certain features require active subscriptions.</li>
            <li>Subscriptions may be subject to auto-renewal unless cancelled.</li>
        </ul>

        <p><strong>Wallet</strong></p>
        <ul>
            <li>The platform provides a wallet for transactions</li>
            <li>A minimum non-withdrawable balance of ₦3,000 (or $2.20) must be maintained</li>
            <li>Flare Tech may revise this threshold due to economic or operational factors</li>
        </ul>

        <h3>6. Royalties, Revenue & Payment Structure</h3>
        <ul>
            <li>Flare Tech may collect royalties on behalf of the Client from DSPs and partners</li>
            <li>Payments are based strictly on:
            <ul>
                <li>Verified reports</li>
                <li>Actual Net Revenue received</li>
            </ul>
            </li>
        </ul>

        <p><strong>Deductions</strong></p>
        <ul>
            <li>Platform fees and commissions</li>
            <li>Third-party deductions (DSPs, aggregators)</li>
            <li>Taxes and regulatory charges</li>
        </ul>

        <p><strong>Disputes</strong></p>
        <p>FlareTechMusic may withhold royalties in the event of disputes until resolution or a legal determination.</p>

        <p><strong>No Guarantee</strong></p>
        <p>Flare TechMusic does not guarantee revenue, performance, or payment timing.</p>

        <h3>7. Non-Refundability</h3>
        <p>All fees paid are non-refundable, except where required by law or expressly agreed in writing.</p>

        <h3>8. Intellectual Property Rights</h3>
        <ul>
            <li>The Client retains ownership of its content</li>
            <li>The Client grants Flare Tech an exclusive license for distribution and monetisation</li>
        </ul>

        <p>FlareTechMusic retains ownership of:</p>
        <ul>
            <li>Platform technology</li>
            <li>Software</li>
            <li>Branding and proprietary systems</li>
        </ul>

        <h3>9. End-User Obligations, Access Control & Platform Protection</h3>
        <ul>
            <li>End-User Status – Users operate under the Client’s authority where applicable.</li>
            <li>Payment-Linked Access – Access may depend on active payment status.</li>
            <li>No Circumvention – Users must not bypass platform controls.</li>
            <li>Platform Role – Flare Tech acts solely as a technology intermediary.</li>
            <li>User Responsibility – All activities remain the Client’s responsibility.</li>
        </ul>

        <h3>10. Platform Protection Rights</h3>
        <ul>
            <li>Monitor usage</li>
            <li>Remove content</li>
            <li>Suspend accounts</li>
            <li>Enforce compliance</li>
        </ul>

        <h3>11. Platform Exclusivity</h3>
        <p>Where applicable, content distributed via FlareTechMusic may be subject to exclusive platform distribution terms, as agreed.</p>

        <h3>12. Non-Circumvention</h3>
        <p>The Client agrees not to bypass FlareTechMusic to directly engage with its partners, DSPs, or business relationships introduced through the platform.</p>

        <h3>13. Prohibited Uses</h3>
        <ul>
            <li>Engage in artificial streaming or fraud</li>
            <li>Upload infringing content</li>
            <li>Misuse platform infrastructure</li>
        </ul>

        <p>Violations may result in termination, forfeiture of earnings, and legal action.</p>

        <h3>14. Audit & Compliance Rights</h3>
        <p>FlareTechMusic reserves the right to audit usage, transactions, and compliance with this Agreement.</p>

        <h3>15. Survival of Obligations</h3>
        <ul>
            <li>Intellectual Property</li>
            <li>Confidentiality</li>
            <li>Payment Obligations</li>
            <li>Indemnity</li>
            <li>Limitation of Liability</li>
        </ul>

        <h3>16. Indemnity</h3>
        <p>The Client agrees to indemnify and hold Flare Tech harmless from any claims arising from:</p>
        <ul>
            <li>Content uploaded</li>
            <li>Breach of this Agreement</li>
            <li>Third-party claims</li>
        </ul>

        <h3>17. Assignment & Change of Control</h3>
        <h4>17.1 Assignment by Client</h4>
        <p>The Client may not assign this Agreement without prior written consent.</p>

        <h4>17.2 Assignment by Flare Tech</h4>
        <p>FlareTechMusic may assign this Agreement without restriction.</p>

        <h3>18. Limitation of Liability</h3>
        <p>FlareTechMusic shall not be liable for indirect or consequential damages.</p>
        <p>Total liability shall not exceed fees paid in the last 12 months.</p>

        <h3>19. Independent Contractor Relationship</h3>
        <ul>
            <li>Partnership</li>
            <li>Joint venture</li>
            <li>Employment relationship</li>
        </ul>

        <h3>20. Force Majeure</h3>
        <p>FlareTechMusic shall not be liable for failure or delay due to events beyond its control, including:</p>
        <ul>
            <li>System outages</li>
            <li>Regulatory changes</li>
            <li>Third-party failures</li>
        </ul>

        <h3>21. Governing Law & Dispute Resolution</h3>
        <p>The laws of the Federal Republic of Nigeria shall govern this Agreement.</p>
        <p>Disputes shall:</p>
        <ol>
            <li>First, be resolved amicably</li>
            <li>Then referred to arbitration in Lagos, Nigeria</li>
        </ol>

        <h3>22. Severability</h3>
        <p>If any provision is invalid, the remaining provisions shall remain enforceable.</p>

        <h3>23. Electronic Acceptance & Execution</h3>
        <p>BY CLICKING “I AGREE” OR ACCEPTING THIS AGREEMENT ELECTRONICALLY:</p>
        <ul>
            <li>You confirm acceptance of all terms</li>
            <li>This constitutes a legally binding agreement</li>
            <li>It has the same effect as a handwritten signature</li>
        </ul>

        <p>Electronic records shall be admissible as evidence.</p>

        </div>
       
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-white border-top px-4 py-3 d-flex justify-content-between">
        <p>Please read all terms carefully</p>
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
          <h5 class="modal-title fw-bold mb-0">Terms & Conditions</h5>
        </div>
        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body bg-light px-4 py-4">
             
        <div class="privacy-policy">

            <p style="text-align:center;" class="mt-3"><strong>PRIVACY POLICY</strong></p>

            <p style="text-align:center;" class="mt-3"><strong>FlareTechMusic – Music Distribution and Licensing Platform</strong></p>

            <p><strong>Effective Date:</strong> __________________</p>
            <p><strong>Last Updated:</strong> __________________</p>

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
