@extends('admin/layout-admin')

@section('content')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                            <p class="m-b-0">Welcome Back</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <!--  sale analytics start -->
                            <div class="col-xl-12 col-md-12">
                                <div class="row">
                                    <!-- sale card start -->

                                    <div class="col-md-3">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">Total Subscription</h6>
                                                <h4 class="m-t-15 m-b-15"><i
                                                        class="fa fa-arrow-down m-r-15 text-c-red"></i>7652
                                                </h4>
                                                <p class="m-b-0">48% From Last 24 Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">Order Status</h6>
                                                <h4 class="m-t-15 m-b-15"><i
                                                        class="fa fa-arrow-up m-r-15 text-c-green"></i>6325
                                                </h4>
                                                <p class="m-b-0">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">Unique Visitors</h6>
                                                <h4 class="m-t-15 m-b-15"><i
                                                        class="fa fa-arrow-down m-r-15 text-c-red"></i>652
                                                </h4>
                                                <p class="m-b-0">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">Monthly Earnings</h6>
                                                <h4 class="m-t-15 m-b-15"><i
                                                        class="fa fa-arrow-up m-r-15 text-c-green"></i>5963
                                                </h4>
                                                <p class="m-b-0">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sale card end -->
                                </div>
                            </div>

                            <!--  sale analytics end -->

                            <!-- Project statustic start -->
                            <div class="col-xl-12">
                                <div class="card proj-progress-card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Published Project</h6>
                                                <h5 class="m-b-30 f-w-700">532<span
                                                        class="text-c-green m-l-10">+1.69%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-red"
                                                         style="width:25%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Completed Task</h6>
                                                <h5 class="m-b-30 f-w-700">4,569<span
                                                        class="text-c-red m-l-10">-0.5%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-blue"
                                                         style="width:65%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Successfull Task</h6>
                                                <h5 class="m-b-30 f-w-700">89%<span
                                                        class="text-c-green m-l-10">+0.99%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-green"
                                                         style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Ongoing Project</h6>
                                                <h5 class="m-b-30 f-w-700">365<span
                                                        class="text-c-green m-l-10">+0.35%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-yellow"
                                                         style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Project statustic end -->
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"></div>
            </div>
        </div>
    </div>
@endsection
