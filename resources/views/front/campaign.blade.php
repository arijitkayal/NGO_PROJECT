@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->
        
 <div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Popular Causes</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Our Campaign</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
       
        <div class="event-ro row">
            @foreach ($camps as $c)
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
</section>   
@include('front/inc/footer');