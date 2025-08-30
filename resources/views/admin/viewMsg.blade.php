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
                        <label>Name</label>
                        <input type="text" class="form-control" name="pname" value="{{$m->name}}" disabled>

                        <label>Phone</label>
                        <input type="number" class="form-control" name="pname" value="{{$m->mobile}}" disabled>

                        <label>Email</label>
                        <input type="text" class="form-control" name="pname" value="{{$m->email}}" disabled>

                        <label>Message</label>
                        <textarea name="pdec" class="form-control" id="myeditorinstance" rows="10" cols="10"
                            required disabled>{{$m->msg_body}}</textarea>

                        <div style="text-align: center;margin-top:3%">
                            @if ($m->is_read == false)
                            <a href="{{url('admin/markMsg')}}/{{$m->msg_id}}"><button type="submit" class="btn btn-primary">
                                <span>Mark As Read</span>
                            </button></a>
                            @endif
                            <a onclick="return confirm('Are you sure ?');" href="{{url('admin/delMsg')}}/{{$m->msg_id}}"><button type="submit" class="btn btn-danger">
                                <span>Delete</span>
                            </button></a>
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@include('admin/inc/footer')

