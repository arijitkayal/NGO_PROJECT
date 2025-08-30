@include('front/inc/top')

<!-- ******************** Slider Starts Here ******************* -->
<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <div class="slider-img">
            <div class="item">
                <div class="slider-img"><img src="{{asset('front/assets/images/slider/slider-3.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="animated bounceInDown slider-captions">
                                <h1 class="slider-title">Working On Right for Child Education & Nutrition</h1>
                                <p class="slider-text hidden-xs">Child education is a critical aspect of human
                                    development that lays the foundation for a child's future intellectual, social, and
                                    emotional well-being</p>
                                    <button>
                                        <a href="{{url('allCamp')}}" class="btn2">Donate Now</a>
                                      </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="{{asset('front/assets/images/slider/slider-4.jpg')}}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions ">
                            <h1 class="slider-title">Well-being & Needs of Elderly Persons</h1>
                            <p class="slider-text hidden-xs">Charities that operate nursing homes, assisted living
                                facilities, or retirement communities provide essential care, companionship, and medical
                                assistance to the elderly.</p>
                                <button>
                                    <a href="{{url('allCamp')}}" class="btn2">Donate Now</a>
                                  </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="{{asset('front/assets/images/slider/slider-7.jpg')}}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider-captions ">
                            <h1 class="slider-title">Women Safety & Empowerment</h1>
                            <p class="slider-text hidden-xs">Promoting women's safety and empowerment is crucial for
                                building a just and inclusive society. </p>
                                <button>
                                    <a href="{{url('allCamp')}}" class="btn2">Donate Now</a>
                                  </button>

                        </div>
                    </div>
                </div>
            </div>
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



<!-- ################# Mission Vision Start Here #######################--->

<section class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
                <p>
                    A cooperative ecosystem of leaders, reformers, thinkers and conscientious individuals taking
                    sustained efforts to bring social transformation on the ground.</p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{asset('front/assets/images/3.jpg')}}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mv-img">
                <img src="{{asset('front/assets/images/2.jpg')}}" alt="">
            </div>
            <div class="col-md-6 mv-det">
                <h1>Our Vision</h1>
                <p>A nation which stands in solidarity for upholding the virtues of equality, helping change-makers
                    become self-reliant, using the power of many to empower one.</p>
            </div>
        </div>
    </div>
</section>



<!-- ################# Events Start Here#######################--->
@php
$res=Illuminate\Support\Facades\DB::table('camp')
        ->orderby('camp.created_at', 'desc')
        ->get();
@endphp
<section class="events">
    <div class="container">
        <div class="session-title row">
            <h2>Popular Causes</h2>
            <p>We are a non-profital & Charity raising money for Welfare of the Society</p>
        </div>
        <div class="event-ro row">
            @foreach ($res as $c)
            @if ($loop->index == 3)
            @break
            @endif
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('images/'.$c->campImg)}}" style="aspect-ratio: 1/1;">
                    <h4>{{$c->name}}</h4>
                    <p class="desic">
                        {{$c->campDesc}}</p>
                    <a class="btn btn-success btn-sm" href="{{url('donation')}}/{{$c->camp_id}}">Donate Now</a>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center">
            <button type="button" class="ari" onclick="location.href='{{url('allCamp')}}'" style="cursor: pointer">
                View More Campaign
            </button>
        </div>
    </div>
</section>




<!-- ################# Charity Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
            <div class="row session-title">
                <h2>Our Achievemtns in Numbers</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 numb">
                    <h3>12+</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-4 numb">
                    <h3>1812+</h3>
                    <span>HAPPY BENEFICERIES</span>
                </div>
                <div class="col-sm-4 numb">
                    <h3>52+</h3>
                    <span>EVENTS</span>
                </div>
            </div>
        </div>

    </div>

</div>

<!--################### Our Team Starts Here #######################--->
<section class="our-team team-11">
    <div class="container">
        <div class="session-title row">
            <h2>Meet our Team</h2>
            <p>Their creativity, resilience, and collaborative spirit have been instrumental in our collective success.
            </p>
        </div>
        <div class="row team-row">
            <div class="col-md-4 col-sm-12">
                <div class="single-usr">
                    {{-- <img src="{{asset('front/assets/images/team/team-memb1.jpg')}}" alt=""> --}}
                    <div class="det-o">
                        <h4>Amal Khan</h4>
                        <i>PRESIDENT </i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single-usr">
                    {{-- <img src="{{asset('front/assets/images/team/team-memb2.jpg')}}" alt=""> --}}
                    <div class="det-o">
                        <h4>Sipra Khan</h4>
                        <i>SECRETORY</i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single-usr">
                    {{-- <img src="{{asset('front/assets/images/team/team-memb3.jpg')}}" alt=""> --}}
                    <div class="det-o">
                        <h4>Surajit Saha</h4>
                        <i>TREASURER</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ################# Our Blog Starts Here#######################--->
@php
$res=Illuminate\Support\Facades\DB::table('news')
        ->orderby('news.date', 'desc')
        ->get();
@endphp
<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2> Our Recognition and Achievement</h2>
        </div>
        <div class="blog-row row">
            @foreach ($res as $n)
            @if ($loop->index == 3)
            @break
            @endif
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure style="text-align: center">
                        <img src="{{asset('images/'.$n->newsImg)}}" height="200px">
                    </figure>
                    <div class="blog-detail">
                        <h4>By {{$n->name}} | {{$n->date}}</h4>
                        <div class="link">
                            <a href="{{url('blogDetails')}}/{{$n->news_id}}">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center">
            <button type="button" class="ari" onclick="location.href='{{url('blog')}}'" style="cursor: pointer">
                View More
            </button>
        </div>
    </div>
</section>

@include('front/inc/footer');
