@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About Our Charity</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>


<!--  ************************* About Us Starts Here ************************** -->

<div class="about-us container-fluid">
    <div class="container">
        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Charity</h2>
                <p><strong>Mohiary Kalpataru Seba Samiti</strong> is a not-for-profit organisation that builds capacity
                    of communities to ensure empowerment for marginalised women and girls. Our sustainable and holistic
                    interventions in Health, Livelihood, Education and Disaster Relief & Resilience, provide innovative
                    solutions to deep-rooted development problems.

                    Along with access to the international confederation of expertise, we integrate internal knowledge
                    and strong network of partnerships to deliver outcomes at scale to varied stakeholders. </p>
                <p>
                    Our commitment extends to empowering those with visual, hearing, and speech impairments through life
                    skills training and specialized education. Additionally, we provide professional skill development
                    programs for people with disabilities. Established in 2023 with a humble start as A Fistful of
                    Flour, serving meals to the physically and economically disadvantaged, our mission has since
                    evolved.
                </p>
            </div>
            <div class="image-part col-md-6">
                <h4 style="text-align: center"><strong>Our Core Values</strong></h4>
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                            <i class="fas fa-user"></i>
                            <p>Respect</p>
                            <span>Upholding the dignity of each individual</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fa-sharp fa-solid fa-bandage"></i>
                            <p>Integrity</p>
                            <span>Adhering to an ethical code of conduct
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-hands-helping blu"></i>
                            <p>Commitment</p>
                            <span>Fulfilling our duties and social responsibilities
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                            <i class="fas fa-search-dollar red"></i>
                            <p>Excellence</p>
                            <span>Setting high performance standards
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="our-team team-11">
    <div class="container">
        <div class="session-title row">
            <h2>Our Certification & Registration</h2>
        </div>
        <div class="row team-row">
            <div class="col-md-4 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('front/assets/images/pan.jpg')}}" height="500px">
                    <div class="det-o">
                        <h4>PAN</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('front/assets/images/reg.jpg')}}" height="500px">
                    <div class="det-o">
                        <h4>Registration</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('front/assets/images/deed.jpg')}}" height="500px">
                    <div class="det-o">
                        <h4>Agreement</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div style="padding:20px" class="col-sm-7">
            <h2>Bank Account</h2> <br>
            <div class="event-box">
                <h4>UCO BANK</h4>
                <h4>PAYEE NAME: MOHIARY KALPATARU SEBA SAMITI</h4>
                <h4>ACCOUNT NO : 03890110126431</h4>
                <H4>IFSC: UCBA0000389</H4>
                <h4>BRANCH: MAHIARY</h4>
                <h4>UPI : 9836015185@ucobank</h4>
            </div>
        </div>


        <div class="col-sm-5">
            <div class="event-box">
                <p style="text-align: center">Also You Can Scan The QR To Make The Payment</p>
                <img src="{{asset('front\assets\images\qr.jpg')}}" style="aspect-ratio: 1/1;">
            </div>

        </div>

    </div>
</div>
<div class="about-us container-fluid">
    <div class="container">
        <div style="text-align: center">
            <video controls autoplay loop
                src="{{asset('front\assets\videos\1703828273WhatsApp Video 2023-12-29 at 10.55.17_31b2d7c7.mp4')}}"
                width="80%"></video>
        </div>
    </div>
</div>

@include('front/inc/footer');