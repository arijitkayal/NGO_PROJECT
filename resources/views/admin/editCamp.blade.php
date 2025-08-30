@include('admin/inc/side')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin/inc/top')
        <!-- End of Topbar -->

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Campaign</h1>
            <form action="{{url('/admin/updCamp')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" value="{{$c->camp_id}}" hidden>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Enter Campaign Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Campeign Name" name="name"
                            value="{{$c->name}}" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Description</label>
                        <textarea name="campDesc" class="form-control" required>{{$c->campDesc}}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Upload Image</label>
                        <img src="{{asset('images/'.$c->campImg)}}" width="100px">
                        <input type="file" name="campImg" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
            </form>

        </div>

    </div>
    <!-- End of Main Content -->

    @include('admin/inc/footer')