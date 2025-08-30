@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Donation</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Donation History</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">
            <div style="padding:20px" class="col">
                <h2>Fetch Your Donation History & Acknowledgment Letter</h2> <br>
                <div id="genOtp">
                    <span id="lblError" class="error" style="color: red"></span>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Mobile No </label><span>:</span></div>
                        <div class="col-sm-8"><input type="number" placeholder="Enter Mobile No." name="mobile"
                                class="form-control input-sm" id="mo"></div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" id="gOtp">Generate Otp</button>
                        </div>
                    </div>
                </div>

                <div id="putOtp">
                    <form action="{{url('/allDonation')}}" method="post">
                        @csrf
                        <input type="number" name="mobile" id="verMo" hidden>
                        <span id="OtpError" class="error" style="color: red"></span>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter OTP </label><span id="lb"></span>:</div>
                            <div class="col-sm-8"><input type="number" placeholder="Enter OTP" name="otp"
                                    class="form-control input-sm" id="ot"></div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-primary btn-sm" id="pOtp" >Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $('#details').hide();
        $('#putOtp').hide();
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
            let url='https://www.fast2sms.com/dev/bulkV2?authorization=TKRr6EelSb073yXjvUNwzIaxshdm5Vq9MH8oBiAkFtfpDcJL21wWNzUpqGxH4ErXOIKQJYePida9ysMm&route=otp&variables_values='+otp+'&flash=0&numbers='+mobile;
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
                                                
</script>
@include('front/inc/footer');