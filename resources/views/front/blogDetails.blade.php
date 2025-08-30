@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Blog</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{{url('/blog')}}"><i class="fas fa-angle-double-right"></i> Blog</a></li>
                <li><i class="fas fa-angle-double-right"></i> {{$news->name}} | {{$news->date}}</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Our Blog Starts Here#######################--->

<section class="our-blog">
         <div class="container">
             
            <div class="blog-row row">
                <div class="col" style="text-align: center">
                    <img src="{{asset('images/'.$news->newsImg)}}" alt="">
                </div>
            </div>
         </div>
     </section>
     @include('front/inc/footer');