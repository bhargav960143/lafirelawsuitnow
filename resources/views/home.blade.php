@extends('layout.app')

@section('content')
<div class="container">
    <div id="form_container">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div id="left_form">
                    <figure><img src="{{ asset('img/justice.jpg') }}" alt="" width="100" height="100">
                    </figure>
                    <h2>LOS ANGELES FIRE LAWSUIT <span>Secure Your Compensation</span></h2>
                    <p>If you or a loved one have suffered property damage, injuries, or financial losses due to
                        wildfires in Los Angeles, you may be eligible for compensation. Check if you qualify today.</p>
                    <a href="tel:8665140714" class="btn_1 rounded yellow purchase" target="_parent"><i
                            class="icon-call"></i>866-514-0714</a>
                    <a href="#wizard_container" class="btn_1 rounded mobile_btn yellow">Start Your Claim!</a>
                    <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i
                            class="pe-7s-info"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                        <span id="location"></span>
                    </div>
                    <form method="post" action="{{ route('store-inquiry') }}" id="inquiry-form"
                        data-tf-element-role="offer">
                        @csrf
                        @if($errors->any())
                        <div class="row alert-danger alert">
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        </div>
                        @endif
                        <div class="row">
                            <h4>Were you or a loved one affected by
                                the fires in California during or after
                                January 2025? You may be entitled to
                                compensation.*
                            </h4>
                        </div>
                        <div class="row radio-btn-group">
                            <div class="col-md-6 col-sm-6" style="text-align: center">
                                <label for="check-1">
                                    <input type="radio" name="rideshare_victim" value="Yes" id="check-1"
                                        required="required" data-gtm-form-interact-field-id="0">
                                    <span class="yes">Yes</span>
                                </label>
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: center">
                                <label for="check-11">
                                    <input type="radio" name="rideshare_victim" value="No" id="check-11"
                                        data-gtm-form-interact-field-id="1">
                                    <span class="no">No</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control required" placeholder="First Name *"
                                        id="first_name" oninput="checkValidInput(this)" required name="first_name"
                                        data-tf-element-role="consent-grantor-first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name *" id="last_name"
                                        oninput="checkValidInput(this)" required name="last_name"
                                        data-tf-element-role="consent-grantor-last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input type="text" id="phone" placeholder="Phone number *" maxlength="10" required
                                        onkeypress="return isNumber(this)" name="phone" class="form-control"
                                        data-tf-element-role="consent-grantor-phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email *" required name="email"
                                        oninput="checkValidInput(this)" class="form-control"
                                        data-tf-element-role="consent-grantor-email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <select name="state" id="state" class="form-control" required>
                                        <option value="">Select State *</option>
                                        <option value="AL">AL</option>
                                        <option value="AK">AK</option>
                                        <option value="AZ">AZ</option>
                                        <option value="AR">AR</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DC">DC</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IA">IA</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="ME">ME</option>
                                        <option value="MD">MD</option>
                                        <option value="MA">MA</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MS">MS</option>
                                        <option value="MO">MO</option>
                                        <option value="MT">MT</option>
                                        <option value="NE">NE</option>
                                        <option value="NV">NV</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NY">NY</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VT">VT</option>
                                        <option value="VA">VA</option>
                                        <option value="WA">WA</option>
                                        <option value="WV">WV</option>
                                        <option value="WI">WI</option>
                                        <option value="WY">WY</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="container_check" data-tf-element-role="contact-method">
                                        By clicking the 'Free Review Now' button, I hereby grant consent to be contacted at the phone number above for marketing purposes by Injury Review. I understand this may include an automated calling system, artificial voice or an SMS text message. I consent even if my phone number provided is registered on the Federal or State 'Do Not Call Registry'. I acknowledge that standard message and data rates apply. Message frequency varies. Text HELP for help. Text STOP to cancel. Clicking 'Free Review Now' constitutes my electronic signature for my authorization to being contacted and my agreement to the <a
                                            href="{{route('terms-condition')}}">Terms and Conditions</a> thereof. This authorization is not required to qualify, purchase goods or services. <a
                                            href="{{route('privacy-policy')}}">Privacy Policy</a>
                                        <input type="checkbox" name="accept_terms" value="Yes"
                                               data-tf-element-role="consent-opt-in" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}" required></div>
                            <div><input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha" required></div>

                        </div>
                        <div id="captchaMessage" style="color: red; display: none; margin-bottom: 20px;">
                            Security Verification Pending...!
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p><input type="submit" value="SUBMIT CLAIM REVIEW" data-tf-element-role="submit"
                                        class="btn_1 add_bottom_15" id="submit-contact"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
        </div><!-- /Row -->
    </div><!-- /Form_container -->

    <main id="general_page">
        <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 id="get_started">GET STARTED</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" id="left_form" style="background-color: #424242;text-align: left">
                    <p>Have you suffered losses due to destructive wildfires in Los Angeles? You're not alone, and we
                        are here to help. At <strong>LA Fire Lawsuit Now</strong>, we understand how devastating
                        wildfires can be—destroying homes, businesses, and entire communities. If you've lost property,
                        suffered injuries, or experienced financial setbacks, you may be entitled to compensation.</p>

                    <p>Our experienced legal team is dedicated to helping wildfire victims secure the justice they
                        deserve. We specialize in holding negligent utility companies and responsible parties
                        accountable. From evaluating your claim to handling all legal processes, we are here to support
                        you every step of the way. Don’t face this challenge alone—take the first step toward financial
                        recovery today.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('img/get_started.png') }}">
                </div>
            </div>
        </div>
        <!-- /container -->

        <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 id="background_info">BACKGROUND INFO</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('img/background_info.png') }}">
                </div>
                <div class="col-lg-6 col-md-6" id="left_form" style="background-color: #6c757d;text-align: left">
                    <p>Los Angeles wildfires have left countless families and businesses devastated, causing extensive
                        property damage, injuries, and financial hardship. Many of these fires have been linked to
                        negligence, including utility company failures, outdated infrastructure, and poor fire
                        prevention measures.</p>

                    <p>If you or a loved one has suffered losses due to a wildfire in Los Angeles, you may be entitled
                        to compensation. Our dedicated legal team is here to help you navigate the claims process and
                        hold responsible parties accountable. Don’t wait—take action today and find out if you qualify
                        for financial recovery.</p>
                </div>

            </div>
        </div>

        <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 id="who_is_eligible">WHO IS ELIGIBLE?</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" id="left_form" style="background-color: #1c7430;text-align: left">
                    <p>Not sure if you qualify for an LA Fire Lawsuit? You may be eligible if:</p>
                    <ul class="list">
                        <li>1. You lost your home, property, or business due to a wildfire in Los Angeles.</li>
                        <li>2. You suffered injuries or health complications caused by fire, smoke, or toxic exposure.
                        </li>
                        <li>3. Your insurance claim was denied, delayed, or underpaid.</li>
                        <li>4. A loved one was injured or lost their life as a result of a wildfire.</li>
                        <li>5. You experienced financial losses due to evacuation, relocation, or business interruption.
                        </li>
                    </ul>

                    <p>Our dedicated legal team is ready to evaluate your case for free and help you fight for the
                        compensation you deserve. Don’t wait—deadlines may apply to file your claim.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('img/who_is_eligible.png') }}">
                </div>
            </div>
        </div>

        <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 id="free_case_evaluation">FREE CASE EVALUATION</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('img/Farmer-Family-2-e1697654633765.png') }}">
                </div>
                <div class="col-lg-6 col-md-6" id="left_form" style="text-align: left">
                    <p>Getting started is quick, easy, and completely risk-free. At Los Angeles Fire Lawsuit, we believe
                        wildfire victims deserve justice, which is why we offer a free case evaluation with no upfront
                        costs. Simply provide us with basic details about your losses, and our legal experts will assess
                        your claim.</p>

                    <p>If you qualify, we’ll connect you with an experienced wildfire attorney who will fight for your
                        rights and work tirelessly to secure the compensation you deserve. Holding negligent utility
                        companies and responsible parties accountable starts with your claim.</p>

                    <p><strong>Your losses matter—contact us today for a free consultation!</strong></p>
                </div>

            </div>
        </div>


    </main>
</div>
<!-- /container -->

<!-- Modal info -->
<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="more-infoLabel">LA Fire Lawsuit – Frequently Asked Questions (FAQs)
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <strong>1. What is the LA Fire Lawsuit about?</strong>
                <p>The LA Fire Lawsuit involves legal claims against utility companies, property owners, and other
                    responsible parties for damages caused by wildfires in Los Angeles. Victims may seek compensation
                    for property loss, injuries, and financial hardships.</p>

                <strong>2. Who is eligible to file a claim?</strong>
                <p>You may qualify if:</p>
                <ul>
                    <li>Your home, business, or property was damaged or destroyed by a wildfire in Los Angeles.</li>
                    <li>You suffered physical injuries or lost a loved one due to a fire.</li>
                    <li>You experienced financial losses from evacuation, displacement, or business interruption.</li>
                </ul>

                <strong>3. What compensation can I receive?</strong>
                <p>Compensation may cover:</p>
                <ul>
                    <li>Property damage and repair costs.</li>
                    <li>Medical expenses for injuries and trauma.</li>
                    <li>Lost wages and business income.</li>
                    <li>Emotional distress and pain and suffering.</li>
                    <li>Wrongful death claims for lost loved ones.</li>
                </ul>

                <strong>4. How do I file a claim?</strong>
                <p>Filing a claim is easy. Contact our legal team for a free case evaluation. We’ll review your
                    situation, determine if you qualify, and guide you through the process—at no upfront cost to you.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection


@section('script')
<style>
    .radio-btn-group {
        display: flex;
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: center;
        position: relative;
    }

    .radio-btn-group input {
        display: block !important;
        position: absolute;
        opacity: 0;
        visibility: hidden;
    }

    .radio-btn-group label {
        width: 130px;
        margin-right: 15px !important;
        cursor: pointer;
    }

    .radio-btn-group label {
        font-size: 1.1em;
        font-weight: 600;
        color: #4c4c4c;
        font-family: "Roboto", sans-serif;
        line-height: 1.4;
        margin: 0;
    }

    .radio-btn-group label span.yes {
        color: #1b9b00;
        border: 2px solid;
    }

    .radio-btn-group label span.no {
        color: #ff0000;
        border: 2px solid;
    }

    .radio-btn-group label input:checked~span.yes {
        color: #1b9b00;
        border-color: #1b9b00;
        box-shadow: inset 0 0 15px #1b9b00;
    }

    .radio-btn-group label input:checked~span.no {
        color: #ff0000;
        border-color: #ff0000;
        box-shadow: inset 0 0 15px #ff0000;
    }

    .radio-btn-group label span {
        text-align: center;
        display: inline-block;
        padding: 25px 10px;
        width: 100%;
        max-width: 150px;
        border: 1px solid #444;
        color: #444;
        border-radius: 4px;
        font-size: 18px !important;
        text-transform: uppercase;
    }
</style>
<script type="text/javascript">
    (function () {
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
                '://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=' +
                new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        })();
</script>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var recaptchaResponse = grecaptcha.getResponse();
        var captchaMessage = document.getElementById('captchaMessage');

        if (recaptchaResponse.length === 0) {
            event.preventDefault();
            captchaMessage.style.display = 'block'; // Show the error message
        } else {
            captchaMessage.style.display = 'none'; // Hide the message if CAPTCHA is complete
            document.getElementById('hiddenRecaptcha').value = recaptchaResponse;
        }
    });
</script>
<noscript>
    <img src='https://api.trustedform.com/ns.gif' />
</noscript>
@endsection
