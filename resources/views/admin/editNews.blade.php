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
                    <h1 class="h3 mb-4 text-gray-800">Edit News & Recognition</h1>
                    <form action="{{url('/admin/updNews')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{$c->news_id}}" hidden>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Enter Name</label>
                                <input type="text" class="form-control" id="inputEmail4" 
                                    name="name" value="{{$c->name}}" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Enter Date</label>
                                <input type="date" name="date" value="{{$c->date}}" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Upload Image</label>
                                <img src="{{asset('images')}}/{{$c->newsImg}}" width="100px">
                                <input type="file" name="newsImg" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')