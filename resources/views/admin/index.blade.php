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
                                <a href="/main/posts"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="/main/posts">Dashboard</a>
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

{{--                                    <div class="col-md-3">--}}
{{--                                        <div class="card text-center order-visitor-card">--}}
{{--                                            <div class="card-block">--}}
{{--                                                <h6 class="m-b-0">Total Subscription</h6>--}}
{{--                                                <h4 class="m-t-15 m-b-15"><i--}}
{{--                                                        class="fa fa-arrow-down m-r-15 text-c-red"></i>7652--}}
{{--                                                </h4>--}}
{{--                                                <p class="m-b-0">48% From Last 24 Hours</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <div class="card text-center order-visitor-card">--}}
{{--                                            <div class="card-block">--}}
{{--                                                <h6 class="m-b-0">Order Status</h6>--}}
{{--                                                <h4 class="m-t-15 m-b-15"><i--}}
{{--                                                        class="fa fa-arrow-up m-r-15 text-c-green"></i>6325--}}
{{--                                                </h4>--}}
{{--                                                <p class="m-b-0">36% From Last 6 Months</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <div class="card text-center order-visitor-card">--}}
{{--                                            <div class="card-block">--}}
{{--                                                <h6 class="m-b-0">Unique Visitors</h6>--}}
{{--                                                <h4 class="m-t-15 m-b-15"><i--}}
{{--                                                        class="fa fa-arrow-down m-r-15 text-c-red"></i>652--}}
{{--                                                </h4>--}}
{{--                                                <p class="m-b-0">36% From Last 6 Months</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <div class="card text-center order-visitor-card">--}}
{{--                                            <div class="card-block">--}}
{{--                                                <h6 class="m-b-0">Monthly Earnings</h6>--}}
{{--                                                <h4 class="m-t-15 m-b-15"><i--}}
{{--                                                        class="fa fa-arrow-up m-r-15 text-c-green"></i>5963--}}
{{--                                                </h4>--}}
{{--                                                <p class="m-b-0">36% From Last 6 Months</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- sale card end -->
                                </div>
                            </div>

                            <!--  sale analytics end -->

                            <!-- Project statustic start -->
                            <div class="page-body col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Press Releases</h5>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Post</th>
                                                <th>Status</th>
                                                <th>Update</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($posts as $post)
                                               <tr>
                                                   <th scope="row">{{$post->id}}</th>
                                                   <td><a href="/press-releases/{{$post->slug}}">{{$post->title}}</a></td>
                                                   <td class="text-success">Published</td>
                                                   <td><a class="text-primary font-weight-bold" href="/main/posts/{{$post->id}}/edit">Edit</a></td>
                                                   <td>
                                                       <!-- Button trigger modal -->
                                                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                          Delete
                                                       </button>

                                                       <!-- Modal -->
                                                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                           <div class="modal-dialog" role="document">
                                                               <div class="modal-content">
                                                                   <div class="modal-header">
                                                                       <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                           <span aria-hidden="true">&times;</span>
                                                                       </button>
                                                                   </div>
                                                                   <div class="modal-body">
                                                                      Are you sure you want to delete the Post?
                                                                   </div>
                                                                   <div class="modal-footer">
                                                                       <form action="/admin/posts/{{$post->id}}" method="POST">
                                                                           @csrf
                                                                           @method('DELETE')
                                                                           <button class="btn  btn-danger gj-font-size-16">Delete</button>
                                                                       </form>
                                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                           @endforeach
                                            </tbody>
                                        </table>
                                        <nav class="blog-pagination justify-content-center d-flex">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    {{$posts->links()}}
                                                </li>
                                            </ul>
                                        </nav>
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
