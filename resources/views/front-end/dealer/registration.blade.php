<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
    </head>
    <body>
        
        @include('front-end.section.header')
        <main>
            <div class="container-fluid">
                <div class="contactusBox">
                    <div class="delearRegistrationContact text-center"><img src="https://www.bannerbuzz.com/static/images/dealerregistration/delear-registration-contact.svg" style="filter: grayscale(1);" alt="Become A Delear"></div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="contactInfoDealerBox">
                        <div class="contactemailBox text-center"><h5><a href="mailto:support@amdaprints.com" class="text-dark"><span class="fa fa-envelope"></span> support@amdaprints.com </a></h5></div>
                        <div class="clearfix">&nbsp;</div>
                    </div>
                </div>
                <div class="form-row pl-5">
                    <div class="col-md-8">
                        <h2 class="big_title mb-0">Account Details</h2>
                    </div>
                    <div class="col-md-4 text-right">
                        <p class="text-danger">* Required Fields*</p>
                    </div>
                </div>
                <hr>
               <div class="row">
                <div class="contact_form col-md-6">
                    <form action="/dealer-store" method="POST" class="p-5 pb-0" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="">
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Email Address <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="password" name="password"  class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-8">
                                        <h2 class="big_title mb-0">Company Details</h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Company/Individual Name <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="company_name"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Company/Individual Phone Number <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="tel" name="company_phone"  class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Position <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="position" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Website</label>
                                        <div class="form-group">
                                            <input type="text" name="website" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Mobile <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="tel" name="mobile" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                    </div>
                                </div>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">First Name <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Last Namme <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label class="text-danger font-weight-bold">Sales Certificate</label>
                                        <div class="form-group">
                                            <input type="file" name="certificate" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label class="text-danger font-weight-bold">Business License</label>
                                        <div class="form-group">
                                            <input type="file" name="license" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-8">
                                        <h2 class="big_title mb-0">Billing Address</h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Addrress <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Zip Code <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="zip" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">City <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">State<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select class="w-100" required name="state" aria-label="state">
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="Armed Forces Africa">Armed Forces Africa</option>
                                                <option value="Armed Forces Americas">Armed Forces Americas</option>
                                                <option value="Armed Forces Canada">Armed Forces Canada</option>
                                                <option value="Armed Forces Europe">Armed Forces Europe</option>
                                                <option value="Armed Forces Middle East">Armed Forces Middle East</option>
                                                <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                                <option value="California">California</option>
                                                <option value="Colorado">Colorado</option>
                                                <option value="Connecticut">Connecticut</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="District of Columbia">District of Columbia</option>
                                                <option value="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Idaho">Idaho</option>
                                                <option value="Illinois">Illinois</option>
                                                <option value="Indiana">Indiana</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Kansas">Kansas</option>
                                                <option value="Kentucky">Kentucky</option>
                                                <option value="Louisiana">Louisiana</option>
                                                <option value="Maine">Maine</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Maryland">Maryland</option>
                                                <option value="Massachusetts">Massachusetts</option>
                                                <option value="Michigan">Michigan</option>
                                                <option value="Minnesota">Minnesota</option>
                                                <option value="Mississippi">Mississippi</option>
                                                <option value="Missouri">Missouri</option>
                                                <option value="Montana">Montana</option>
                                                <option value="Nebraska">Nebraska</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="New Hampshire">New Hampshire</option>
                                                <option value="New Jersey">New Jersey</option>
                                                <option value="New Mexico">New Mexico</option>
                                                <option value="New York">New York</option>
                                                <option value="North Carolina">North Carolina</option>
                                                <option value="North Dakota">North Dakota</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Ohio">Ohio</option>
                                                <option value="Oklahoma">Oklahoma</option>
                                                <option value="Oregon">Oregon</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Pennsylvania">Pennsylvania</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Rhode Island">Rhode Island</option>
                                                <option value="South Carolina">South Carolina</option>
                                                <option value="South Dakota">South Dakota</option>
                                                <option value="Tennessee">Tennessee</option>
                                                <option value="Texas">Texas</option>
                                                <option value="Utah">Utah</option>
                                                <option value="Vermont">Vermont</option>
                                                <option value="Virgin Islands">Virgin Islands</option>
                                                <option value="Virginia">Virginia</option>
                                                <option value="Washington">Washington</option>
                                                <option value="West Virginia">West Virginia</option>
                                                <option value="Wisconsin">Wisconsin</option>
                                                <option value="Wyoming">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Country<span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select class="w-100" name="country" aria-label="country" disabled>
                                                <option value="United States" selected>United States</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-8">
                                        <h2 class="big_title mb-0">Industry Details</h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">
                                            Retail or Resellers <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                           <select name="reseller" class="w-100">
                                                <option value="Retail or Resellers">Retail or Resellers</option>
                                                <option value="Retail Account">Retail Account</option>
                                                <option value="Wholesale Trade Account">Wholesale Trade Account</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">
                                            Industry Type <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                           <select name="industry_type" class="w-100">
                                                <option value="Industry Type">Industry Type</option>
                                                <option value="Advertising Agency">Advertising Agency</option>
                                                <option value="Digital Printer">Digital Printer</option>
                                                <option value="Graphic Design">Graphic Design</option>
                                                <option value="Print Management">Print Management</option>
                                                <option value="Promotional">Promotional</option>
                                                <option value="Screen printer">Screen printer</option>
                                                <option value="General printer">General printer</option>
                                                <option value="Signage">Signage</option>
                                                <option value="Franchise">Franchise</option>
                                                <option value="Other">Other</option>
                                           </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-4">
    
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">
                                            How did you find us? <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <select id="" name="find_us" class="w-100" aria-label="findUs">
                                                <option selected="" value="" disabled="" hidden="">How did you find us?</option>
                                                <option value="Referral">Referral</option>
                                                <option value="Online Search">Online Search</option>
                                                <option value="Magazine Ads">Magazine Ads</option>
                                                <option value="AMDA Prints Catalogue">AMDA Prints Catalogue</option>
                                                <option value="EDM">EDM</option>
                                                <option value="Walk In">Walk In</option>
                                                <option value="Radio">Radio</option>
                                                <option value="Newspaper">Newspaper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 " data-wow-delay=".1s">
                                        <label for="">Company Tax ID <span class="text-danger">*</span></label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tax_id" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <button class="custom_btn bg_default_orange" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 mt-3">
                            <p>By creating an account, you agree to our <a href="/terms-and-condition">Terms and Conditions</a> of Use and <a href="/privacy-policy">Privacy Policy</a>.</p>
                        </div>
                    </form>
                   </div>
                   <div class="col-md-6">
                    <h2>hjdeugf</h2>
                   </div>
               </div>
            </div>
        </main>
        @include('front-end.section.footer')
@include('front-end.section.scripts')
    </body>
</html>