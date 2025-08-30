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
                    <h1 class="h3 mb-4 text-gray-800">Campaign Lists</h1>
                    <div class="container" style="overflow-x: scroll;">
                      <table class="table border">
                        <thead>
                          <tr>
                            <th>News Id</th>
                            <th>Name</th>
                            <th>Published date</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($news as $c)
                          <tr>
                            <td>{{$c->news_id}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->date}}</td>
                            <td><img src="{{asset('images')}}/{{$c->newsImg}}" width="50px"> </td>
                            <td><a class="btn btn-primary" onClick="return confirm('Are you sure ?');" href="{{url('/admin/editNews')}}/{{$c->news_id}}">EDIT</a></td>
                            <td><a class="btn btn-danger" onClick="return confirm('Are you sure ?');" href="{{url('/admin/delNews')}}/{{$c->news_id}}">DELETE</a></td>
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