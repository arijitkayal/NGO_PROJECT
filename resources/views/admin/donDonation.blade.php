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
                    <h1 class="h3 mb-4 text-gray-800">Donor Wise Donation History</h1>
                    <div class="container" style="overflow-x: scroll;">
                      <table class="table border">
                        <thead>
                          <tr>
                            <th>Donor Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Pin</th>
                            <th>View Donation History</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dons as $c)
                          <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->mobile}}</td>
                            <td>{{$c->address}}</td>
                            <td>{{$c->district}}</td>
                            <td>{{$c->state}}</td>
                            <td>{{$c->country}}</td>
                            <td>{{$c->pin}}</td>
                            <td><a class="btn btn-primary" onClick="return confirm('Are you sure ?');" href="{{url('/admin/viewDonHis')}}/{{$c->donor_id}}">View</a></td>
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