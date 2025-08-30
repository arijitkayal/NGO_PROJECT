@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Donation</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{{url('/allCamp')}}"><i class="fas fa-angle-double-right"></i> Services</a></li>
                <li><i class="fas fa-angle-double-right"></i>Payment</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">


            <div style="padding:20px" class="col-sm-7">
                <h2>Donate Funds</h2> <br>
                <div id="details">
                    <form action="insDonation" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="text" name="camp_id" value="{{$camp_id}}" hidden>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Donation Amount: </label></div>
                        <div class="col-sm-8"><input type="number" placeholder="Enter Amount" name="amount"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Upload Payment Confirmation:</label></div>
                        <div class="col-sm-8"><input type="file" name="pimg" class="form-control input-sm"  required></div>
                    </div>
                    @isset($donor)
                    <input type="text" name="donor_id" value="{{$donor->donor_id}}" hidden>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Mobile</label>:</div>
                        <div class="col-sm-8"><input type="number" name="mobile" placeholder="Enter Mobile Number"
                                class="form-control input-sm" value="{{$donor->mobile}}"  readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Name</label>:</div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Name"
                                class="form-control input-sm" value="{{$donor->name}}"  readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Address</label>:</div>
                        <div class="col-sm-8"><textarea name="address" class="form-control input-sm"  readonly>{{$donor->address}}</textarea></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Postal code</label>:</div>
                        <div class="col-sm-8"><input type="number" name="pin" placeholder="Enter Postal Code"
                                class="form-control input-sm" value="{{$donor->pin}}"  readonly pattern="[0-9]{6}"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>District</label>:</div>
                        <div class="col-sm-8"><input type="text" name="district" placeholder="Enter District"
                                class="form-control input-sm" value="{{$donor->district}}"  readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>State</label>:</div>
                        <div class="col-sm-8"><input type="text" name="state" placeholder="Enter State"
                                class="form-control input-sm" value="{{$donor->state}}"  readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Country</label>:</div>
                        <div class="col-sm-8"><input type="text" name="country" placeholder="Enter Country"
                                class="form-control input-sm" value="{{$donor->country}}"  readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Id Proof name & Number (Adhar,PAN etc.)</label>:</div>
                        <div class="col-sm-8">
                            <textarea placeholder="Enter Your Id Proof Details"
                                class="form-control input-sm" name="idNumber"  readonly>{{$donor->idNumber}}</textarea>
                        </div>
                    </div>
                    @endisset
                    @isset($mobile)
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Mobile</label>:</div>
                        <div class="col-sm-8"><input type="number" name="mobile" placeholder="Enter Mobile Number"
                                class="form-control input-sm" value="{{$mobile}}" readonly></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Name</label>:</div>
                        <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Name"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Address</label>:</div>
                        <div class="col-sm-8"><textarea name="address" class="form-control input-sm" required></textarea></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Postal code</label>:</div>
                        <div class="col-sm-8"><input type="number" name="pin" placeholder="Enter Postal Code"
                                class="form-control input-sm" required pattern="[0-9]{6}"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>District</label>:</div>
                        <div class="col-sm-8"><input type="text" name="district" placeholder="Enter District"
                                class="form-control input-sm" required ></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>State</label>:</div>
                        <div class="col-sm-8"><input type="text" name="state" placeholder="Enter State"
                                class="form-control input-sm" required ></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Country</label>:</div>
                        <div class="col-sm-8"><input type="text" name="country" placeholder="Enter Country"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Id Proof Name & Number (Adhar,PAN etc.):</label></div>
                        <div class="col-sm-8">
                            <textarea placeholder="Enter Your Id Proof Details"
                                class="form-control input-sm" name="idNumber" required></textarea>
                        </div>
                    </div>
                    @endisset
        
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" type="submit">Donate</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>


            <div class="col-sm-5">
                
                <section class="events">
                    <div class="container">
                        <h2>Transfer Money To This Account</h2> <br>
                        <div class="event-box">
                            <h4>UCO BANK</h4>
                            <h4>PAYEE NAME: MOHIARY KALPATARU SEBA SAMITI</h4>
                            <h4>ACCOUNT NO : 03890110126431</h4>
                            <H4>IFSC: UCBA0000389</H4>
                            <h4>BRANCH: MAHIARY</h4>
                            <h4>UPI : 9836015185@ucobank</h4>
                        </div>
                        <div class="event-box">
                            <p style="text-align: center">Also You Can Scan The QR To Make The Payment</p>
                            <img src="{{asset('front\assets\images\qr.jpg')}}" style="aspect-ratio: 1/1;">
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        let mobile;
        let otp;
        $('#mo').on('input', function (evt) {
            var mobileNumber = document.getElementById("mo").value;
            const button = document.getElementById("gOtp");
            var lblError = document.getElementById("lblError");
            lblError.innerHTML = "";
            button.disabled = false;
            var expr = /^[6-9][0-9]{9}$/;
            if (!expr.test(mobileNumber)) {
                lblError.innerHTML = "Invalid Mobile Number.";
                button.disabled = true;
            }
        })
        $('#gOtp').click(function() {
            mobile=($('#mo').val());
            otp=Math.floor(Math.random() * 899999 + 100000);
            let url='https://www.fast2sms.com/dev/bulkV2?authorization=kKWMSqVOH1sEciANUGwxJoZRYBFIumly8Dd450jbf63QtCareLFAd85VBlm12oYO3j9UCwx4f7Enpygc&route=otp&variables_values='+otp+'&flash=0&numbers='+mobile;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                        alert("OTP Sent to Mobile No : "+mobile);
                        document.getElementById("verMo").value=mobile;
                        $('#genOtp').hide();
                        $('#putOtp').show();
                },
                error: function() {
                        alert("Couldn't send OTP ! Please try after sometime !");
                    },
            });
        });
        $('#ot').on('input', function (evt) {
            var inputOtp = document.getElementById("ot").value;
            console.log(otp);
            const buttonn = document.getElementById("pOtp");
            var OtpError = document.getElementById("OtpError");
            OtpError.innerHTML = "";
            buttonn.disabled = false;

            if (otp != inputOtp) {
                OtpError.innerHTML = "Invalid OTP ";
                buttonn.disabled = true;
            }
        })
        function sendMobile(){

        }
  });


    // $('#some-number').on('input', function (evt) {
    //                                                         var mobileNumber = document.getElementById("some-number").value;
    //                                                         const button = document.getElementById("regBt");
    //                                                         var lblError = document.getElementById("lblError");
    //                                                         lblError.innerHTML = "";
    //                                                         button.disabled = false;
    //                                                         var expr = /^[6-9][0-9]{9}$/;
    //                                                         if (!expr.test(mobileNumber)) {
    //                                                             lblError.innerHTML = "Invalid Mobile Number.";
    //                                                                 button.disabled = true;
    //                                                         }
    //                                                         })
    //                                                         $('#district').on('input', function (evt) {
    //                                                         var district = document.getElementById("district").value;
    //                                                         if (district == 'Out Of Bengal') {
    //                                                             alert('As You are not from West Bengal state of India.So you can not sell your handmade goods through our website,Though you can browse & buy products from our website !');
    //                                                         }
                                                            
    //                                                         })
                                                
</script> --}}
@include('front/inc/footer');