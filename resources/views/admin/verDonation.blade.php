@include('admin/inc/side')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin/inc/top')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Payment Verified Donation List</h1>
                    <div class="container" style="overflow-x: scroll;">
                      <table class="table border">
                        <thead>
                          <tr>
                            <th>Donor Name</th>
                            <th>Donated To</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Remarks</th>
                            <th>is Verified</th>
                            <th>View</th>
                            <th>Verify</th>
                            <th>Edit</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dons as $c)
                          <tr>
                            <td>{{$c->d_name}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->amount}}</td>
                            <td>{{$c->date}}</td>
                            <td>{{$c->remarks}}</td>
                            @if ($c->isApproved)
                            <td>Verified</td> 
                            @else
                            <td>Not Verified</td> 
                            @endif
                            <td><a class="btn btn-warning" href="{{asset('images')}}/{{$c->pay_img}}" target="_blank" >View Receipt</a></td>
                            @if ($c->isApproved)
                            <td><button class="btn btn-primary" disabled>Verified</button></td> 
                            @else
                            <td><a class="btn btn-success" onClick="return confirm('Are you sure ?');" href="{{url('/admin/verify')}}/{{$c->history_id}}">Approve</a></td>
                            @endif
                            
                            <td><a class="btn btn-primary" onClick="return confirm('Are you sure ?');" href="{{url('/admin/editRemarks')}}/{{$c->history_id}}">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
          
                  </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')