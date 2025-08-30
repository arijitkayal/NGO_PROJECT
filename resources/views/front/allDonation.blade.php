@include('front/inc/top')

<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Donation</h2>
            <ul>
                <li> <a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{{url('/listDonation')}}"><i class="fas fa-angle-double-right"></i> Donation History</a></li>
                <li><i class="fas fa-angle-double-right"></i> All Donation List</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row contact-rooo no-margin">
    <div class="container-fluid" style="overflow-x: scroll;">
        <div class="row">
            <div class="col">
                @if (count($his)>0)
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Donation To</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acknowledgment</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($his as $h)
                        <tr>
                            <th scope="row">{{$h->d_name}}</th>
                            <td>{{$h->name}}</td>
                            <td>{{$h->amount}}</td>
                            <td>{{$h->date}}</td>
                            <td>{{$h->remarks}}</td>
                            @if ($h->isApproved)
                            <td>Payment Verified</td>                        
                            @else
                            <td>Payment Not Verified</td>  
                            @endif
                            @if ($h->isApproved)
                            <td><a href="{{url('printPDF')}}/{{$h->history_id}}" class="btn btn-success">Download</a></td> 
                            @else
                                <td><button class="btn btn-success" onclick="return alert('You can only download Acknowledgement after successful verification of your payment !')">Download</button></td>
                            @endif
 
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <h3 style="text-align: center">You Do not Have any Donation.</h3>
                    <div style="text-align: center">
                        <a href="{{url('allCamp')}}" class="btn btn-success">Donate Now</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@include('front/inc/footer');