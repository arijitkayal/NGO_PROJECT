<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MOHIARY KALPATARU SEBA SAMITI</title>
    <link rel="shortcut icon" href="{{asset('front/assets/images/logoo.jpg')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('front/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/plugins/slider/css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/style.css')}}" />
    <script src="https://kit.fontawesome.com/28bb933055.js" crossorigin="anonymous"></script>
</head>
<style>
.ari {
  color: blue;
  text-transform: uppercase;
  text-decoration: none;
  border: 2px solid blue;
  padding: 10px 20px;
  font-size: 17px;
  font-weight: bold;
  background: transparent;
  position: relative;
  transition: all 1s;
  overflow: hidden;
}

.ari:hover {
  color: white;
}

.ari::before {
  content: '';
  position: absolute;
  height: 100%;
  width: 0%;
  top: 0;
  left: -40px;
  transform: skewX(45deg);
  background-color: green;
  z-index: -1;
  transition: all 1s;
}

.ari:hover::before {
  width: 160%;
}

/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.btn2 {
  position: relative;
  display: inline-block;
  padding: 5px 30px;
  border: 2px solid #fefefe;
  color: #fefefe;
  text-decoration: none;
  font-weight: 600;
  font-size: 20px;
  transition: 0.3s;
}

.btn2 span {
  position: relative;
  z-index: 3;
}

button {
  text-decoration: none;
  border: none;
  background-color: transparent;
}
</style>

<body>

    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-5 d-none d-lg-block" style="padding: 0%">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                mahiarikalpatarusebasamiti@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +91 9836015185
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="col-lg-7 d-md-block col-md-7 btn-bhed" style="padding: 0%">
                        <a class="btn btn-sm btn-success" href="{{url('admin/dash')}}" id="adminBtn">Admin</a>
                        <a class="btn btn-sm btn-default" href="{{url('/allCamp')}}" id="donateBtn">Donate</a>
                        <a class="btn btn-sm btn-default" href="{{url('/listDonation')}}">My Donation</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-4 col-md-12 logo" style="padding: 0%">
                        <a href="{{url('/')}}">
                            <img src="{{asset('front/assets/images/logo2.jpg')}}" width="200%">
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                    class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-8 col-md-12 d-none d-lg-block nav-col">

                        <ul class="navbad">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/allCamp')}}">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact US</a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </header>