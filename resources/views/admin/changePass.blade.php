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
                    <h1 class="h3 mb-4 text-gray-800">Change Password</h1>
                    <form action="{{url('/admin/updPass')}}" method="post">
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
                                <label for="inputEmail4">Enter Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Admin Name"
                                    name="name" value="{{Auth::user()->name}}" required readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Enter Mobile</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Mobile Number"
                                    name="mobile" value="{{Auth::user()->email}}" required readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">New Password</label>
                                <input type="password" class="form-control" id="inputEmail4" placeholder="Enter Password"
                                    name="password" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Confirm Password</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Password"
                                name="password_confirmation">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Change Password</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')

