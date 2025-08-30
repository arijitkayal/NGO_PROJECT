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
                    <h1 class="h3 mb-4 text-gray-800">Add New Images</h1>
                    <form action="{{url('/admin/insImage')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(Session::has("msg"))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get("msg")}}
                        </div>
                        @endif
                        @if (count($errors) > 0)
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Whoops!</strong> There were some problems with your
                            input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Upload Image</label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')