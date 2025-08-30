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
                    <h1 class="h3 mb-4 text-gray-800">{{$h}} Messages</h1>
                    <div class="container" style="overflow-x: scroll;">
                      <table class="table border">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>isRead</th>
                            <th>Date</th>
                            <th>View</th>
                            <th>Mark</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($msg as $m)
                          <tr>
                            <td>{{$m->name}}</td>
                            <td>{{$m->mobile}}</td>
                            <td>{{$m->email}}</td>
                            <td>{{$m->msg_body}}</td>
                            @if ($m->is_read)
                            <td>Yes</td>
                            @else
                            <td>No</td>
                            @endif
                            <td>{{$m->created_at}}</td>
                            <td><a class="btn btn-primary" href="{{url('admin/viewMsg')}}/{{$m->msg_id}}">View</a></td>
                            @if ($m->is_read)
                                <td><button disabled class="btn btn-warning">Mark As Read</button></td>
                            @else
                                <td><a class="btn btn-warning" href="{{url('admin/markMsg')}}/{{$m->msg_id}}">Mark As Read</a></td>
                            @endif
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure ?');" href="{{url('admin/delMsg')}}/{{$m->msg_id}}">Delete</a></td>
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