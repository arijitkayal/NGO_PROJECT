@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Blog</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Blog</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Our Blog Starts Here#######################--->

<section class="our-blog">
         <div class="container">
             
            <div class="blog-row row">
                @foreach ($news as $n)
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
         </div>
     </section>
     @include('front/inc/footer');