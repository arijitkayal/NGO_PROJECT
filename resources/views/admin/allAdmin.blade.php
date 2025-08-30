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
                    <h1 class="h3 mb-4 text-gray-800">Admin List</h1>
                    <div class="container" style="overflow-x: scroll;">
                      <table class="table border">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Date</th>
                            <th>Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($adm as $c)
                          <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->created_at}}</td>   
                            @if ($c->id == 1)
                                <td><button class="btn btn-primary" disabled>Remove</button></td>
                            @else
                            <td><a class="btn btn-primary" onClick="return confirm('Are you sure ?');" href="{{url('/admin/delAdmin')}}/{{$c->id}}">Remove</a></td>
                            @endif                         
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