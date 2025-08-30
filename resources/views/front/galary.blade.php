@include('front/inc/top')
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Gallery</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Gallery</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Gallery Starts Here ************************** -->
<div id="portfolio" class="gallery">
    <div class="container">

        <div class="row">


            <div class="gallery-filter d-none d-sm-block">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="video">Video</button>
                <button class="btn btn-default filter-button" data-filter="picture">Picture</button>
            </div>
            <br />
            @foreach ($pics as $p)
            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter picture">
                <img  src="{{asset('images/'.$p->name)}}" class="img-responsive" id="myImg" style="aspect-ratio: 1/1;width:100%;max-width:300px" onclick="openModal('{{asset('images/'.$p->name)}}')">
            </div>
            @endforeach

            @foreach ($vids as $v)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 filter video">
                <video controls src="{{asset('videos/'.$v->name)}}" width="100%"></video>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ######## Gallery End ####### -->
{{-- <div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div> --}}
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close" onclick="closeModal()">&times;</span>
  
    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="modalImage">
  
    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>


<script>
    function openModal(s) {
        console.log(s);
    document.getElementById('myModal').style.display = 'block';
    document.getElementById('modalImage').src = s;
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}
</script>
@include('front/inc/footer');