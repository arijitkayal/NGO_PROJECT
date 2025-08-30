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
            <h1 class="h3 mb-4 text-gray-800">Images Lists</h1>
            <div class="row">
                @foreach ($vids as $v)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6  shadow-lg p-3 mb-5 bg-white rounded" style="margin: 1%">
                    <div class="card">
                        <video controls src="{{asset('videos/'.$v->name)}}" width="100%"></video>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-danger" onClick="return confirm('Are you sure ?');" href="{{url('/admin/delVideo')}}/{{$v->vid_id}}">DELETE</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    @include('admin/inc/footer')