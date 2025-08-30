@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Contact Us Starts Here ************************** -->


<div style="margin-top:0px;" class="row no-margin">

    <iframe style="width:100%"
        src="https://maps.google.com/maps?q=mohiary%20high&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
        height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>
<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">


            <div style="padding:20px" class="col-sm-7">
                <h2>Contact Form</h2> <br>
                <form action="sendMsg" method="post">
                    @csrf
                    @if(Session::has("msg"))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{Session::get("msg")}}
                    </div>
                    @endif
                    <div class="row cont-row" id="putOtp" style="  border: 2px solid green;
                    border-radius: 3px;">
                        <div class="col-sm-3"><label>Enter OTP </label><span id="lb"></span>:</div>
                        <div class="col-sm-8"> <span id="OtpError" class="error" style="color: red"></span><input
                                type="number" placeholder="Enter OTP" name="otp" class="form-control input-sm" id="ot">
                        </div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"
                                class="form-control input-sm" id="name" required></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="email" name="email" placeholder="Enter Email Address"
                                class="form-control input-sm" id="email" required></div>
                    </div>
                    <div class="row cont-row">

                        <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"> <span id="lblError" class="error" style="color: red"></span><input
                                id="mo" type="number" name="mobile" placeholder="Enter Mobile Number"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="msg"
                                id="msg" required pattern=".{20,}" title="20 characters minimum"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" id="sub" type="submit">Send Message</button>

                            <button id="gOtp" class="btn btn-primary btn-sm">Get Otp</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-sm-5">
                <section class="events">
                    <div class="container-fluid">
                        <div class="event-box">
                            <h2 style="margin-top:10px;">Address</h2>

                            Mohiary Rash Math, <br>
                            Andul, Mouri<br>
                            Howrah-711302,West Bengal<br>
                            Phone:+91 9874078512<br>
                            Email:mahiarikalpatarusebasamiti@gmail.com<br>
                            Regs. No: S0029679<br>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#putOtp').hide();
        $('#gOtp').show();
        $('#sub').hide();
        const button = document.getElementById("gOtp");
        button.disabled = true;

        const buttonn = document.getElementById("sub");
        buttonn.disabled = true;
        let mobile;
        let otp;
        $('#mo').on('input', function (evt) {
            var mobileNumber = document.getElementById("mo").value;
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
                        $('#putOtp').show();
                        $('#sub').show();
                        $('#gOtp').hide();
                        $("#mo").attr("readonly",true);
                },
                error: function() {
                        alert("Couldn't send OTP ! Please try after sometime !");
                    },
            });
        });
        $('#ot').on('input', function (evt) {
            var inputOtp = document.getElementById("ot").value;
            console.log(otp);
            var OtpError = document.getElementById("OtpError");
            OtpError.innerHTML = "";
            buttonn.disabled = false;

            if (otp != inputOtp) {
                OtpError.innerHTML = "Invalid OTP ";
                buttonn.disabled = true;
            }
        })
  });
                                               
</script>
@include('front/inc/footer');