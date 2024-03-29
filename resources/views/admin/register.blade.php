<!DOCTYPE html>
<html lang="en">

<head>
    <title>OJ-Falana</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Favicon icon -->
    <link rel="icon" href="../../assets-admin/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets-admin/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('assets-admin/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-admin/css/style.css')}}">
</head>

<body themebg-pattern="theme1">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" action="/register">
                    @csrf
                    <div class="text-center">
                        <img src="assets/images/logo.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="username" for="username" class="form-control">
                                @error('username')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                <span class="form-bar"></span>
                                <label class="float-label">Choose Username</label>

                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                <span class="form-bar"></span>
                                <label class="float-label">Your Name</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control">
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                <span class="form-bar"></span>
                                <label class="float-label">Your Email Address</label>
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                                <span class="form-bar"></span>
                                <label class="float-label">Choose Password</label>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="/"><b>Back to website</b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('assets-admin/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-admin/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-admin/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-admin/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- waves js -->
<script src="{{asset('assets-admin/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets-admin/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- slimscroll js -->
<script src="{{asset('assets-admin/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

<!-- menu js -->
<script src="{{asset('assets-admin/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets-admin/js/vertical/vertical-layout.min.js')}}"></script>

<script type="text/javascript" src="{{asset('assets-admin/js/script.js')}}"></script>
</body>

</html>
