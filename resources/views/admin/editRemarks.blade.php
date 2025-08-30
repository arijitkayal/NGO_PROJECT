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
                    <h1 class="h3 mb-4 text-gray-800">Edit Remarks</h1>
                    <form action="{{url('/admin/updRemarks')}}" method="post" >
                        @csrf
                        <input type="text" name="id" value="{{$d->history_id}}" hidden>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Remarks</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Give Remarks"
                                    name="remarks" value="{{$d->remarks}}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')

