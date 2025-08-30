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
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{url('admin/donDonation')}}" style="text-decoration: none">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL DONOR</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                                            echo count($don)
                                            @endphp </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{url('admin/allAdmin')}}" style="text-decoration: none">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL ADMIN</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                                            echo count($user)
                                            @endphp </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-user-tie fa-2x"></i>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{url('admin/listCamp')}}" style="text-decoration: none">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL CAMPAIGN</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                                            echo count($cam)
                                            @endphp </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-house-flag fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{url('admin/verDonation')}}" style="text-decoration: none">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL DONATION</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            @php
                                            $total=0;
                                            foreach ($his as $h) {
                                            $total=$total + $h->amount;
                                            }
                                            echo count($his)."( Rs.".$total." )";
                                            @endphp
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-regular fa-money-bill-1-wave fa-2x"></i>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{url('admin/penDonation')}}" style="text-decoration: none">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            PENDING DONATION</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                                            echo count($pen)
                                            @endphp</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-brands fa-dropbox fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6 mb-4" style="cursor: pointer" href="">
                    <a href="{{url('admin/unreadMsg')}}" style="text-decoration: none">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            UNREAD MESSAGE</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">@php
                                            echo count($um)
                                            @endphp</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-solid fa-message fa-2x"></i>
                                        <i class=""></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    @include('admin/inc/footer')