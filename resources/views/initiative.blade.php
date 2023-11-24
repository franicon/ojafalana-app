@extends('layout')

@section('content')
    <main>
        <!-- slider Area Start-->
        <section class="hero-wrap js-fullheight">
            <div class="home-slider js-fullheight owl-carousel">
                <div class="slider-item js-fullheight" style="background-image:url({{ asset('assets/img/gallery/bg_4.jpg') }});">
                    <div class="overlay-1"></div>
                    <div class="overlay-2"></div>
                    <div class="overlay-3"></div>
                    <div class="overlay-4"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center">
                            <div class="col-md-10 col-lg-7 ftco-animate">
                                <div class="text w-100">
                                    <h2>Help the poor in need</h2>
                                    <h1 class="mb-3">Lend the helping hand get involved</h1>
                                    <div class="d-flex meta">
                                        <a href="#" class="d-flex align-items-center button-link">
                                            <div class="button-video d-flex align-items-center justify-content-center">
                                                <span class="fa fa-play"></span>
                                            </div>
                                            <span>Watch our video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url('assets/img/gallery/bg_2.jpg');">
                    <div class="overlay-1"></div>
                    <div class="overlay-2"></div>
                    <div class="overlay-3"></div>
                    <div class="overlay-4"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center">
                            <div class="col-md-10 col-lg-7 ftco-animate">
                                <div class="text w-100">
                                    <h2>Raising Hope</h2>
                                    <h1 class="mb-3">Discover Non-Profit Charity Platform</h1>
                                    <div class="d-flex meta">
                                        <a href="#" class="d-flex align-items-center button-link">
                                            <div class="button-video d-flex align-items-center justify-content-center">
                                                <span class="fa fa-play"></span>
                                            </div>
                                            <span>Watch our video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url(assets/img/gallery/bg_3.jpg);">
                    <div class="overlay-1"></div>
                    <div class="overlay-2"></div>
                    <div class="overlay-3"></div>
                    <div class="overlay-4"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center">
                            <div class="col-md-10 col-lg-7 ftco-animate">
                                <div class="text w-100">
                                    <h2>Raising Hope</h2>
                                    <h1 class="mb-3">Giving Hope to the Homeless People</h1>
                                    <div class="d-flex meta">
                                        <a href="#" class="d-flex align-items-center button-link">
                                            <div class="button-video d-flex align-items-center justify-content-center">
                                                <span class="fa fa-play"></span>
                                            </div>
                                            <span>Watch our video</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Count Down Start -->
        <div class="count-down-area pt-25 section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper" >
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">6,200</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">20</span>
                                        <span class="plus">M+</span>
                                        <p class="color-green">Fund Raised</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">10000</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Help</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our SDGs</span>
                            <h2>We Are In A Mission To Help The Helpless</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 h-auto">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-think"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">No poverty </a></h5>
                                <p>Poverty in all it's forms everywhere.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-null-1"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Zero Hunger</a></h5>
                                <p>Hunger, achieve food security and improved nutrition and promote sustainable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat  text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-think"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Ouality Education</a></h5>
                                <p>Eliminate gender disparity in education and substantially increase the number
                                    of youth and adults wo have relevant skills. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-gear"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html"> Economic Growth</a></h5>
                                <p>Promote development-oriented policies that support productive activities decent job
                                    creation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Law Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About our foundation</span>
                                <h2>We Are In A Mission To Help Helpless</h2>
                            </div>
                            <p>We are Nigeria’s foremost development initiative borne out of a passion to
                                build aspiring and emerging Nigerian leaders, entrepreneurs, innovators,
                                and educationist who will be global change makers.
                            </p>
                            <p>
                                We were founded in 2022 by Falana, Owolabi Jamiu, to harness the potential of young Nigerians through capacity building and collaborative effort.
                                The initiative will gear the culture of Nigerians to spur job creation, economic development, and social impact.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-blog-area">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row align-items-stretch">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-cap">
                                    <h3>Mission</h3>
                                    <p>
                                            To foster sustainable development by promoting quality leadership and economic intervention programs among Nigerians.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-cap">
                                    <h3>Vision</h3>
                                    <p>
                                            To be the leading community builder in the sub-sahara Africa,
                                            providing transformational leadership, personal development skills, and economic empowerment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->
        <!-- Our Cases Start -->
{{--        <div class="our-cases-area section-padding30">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">--}}
{{--                        <!-- Section Tittle -->--}}
{{--                        <div class="section-tittle text-center mb-80">--}}
{{--                            <span>Our Cases you can see</span>--}}
{{--                            <h2>Explore our latest causes that we works </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                        <div class="single-cases mb-40">--}}
{{--                            <div class="cases-img">--}}
{{--                                <img src="assets/img/gallery/case1.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="cases-caption">--}}
{{--                                <h3><a href="#">Ensure Education For Every Poor Children</a></h3>--}}
{{--                                <!-- Progress Bar -->--}}
{{--                                <div class="single-skill mb-15">--}}
{{--                                    <div class="bar-progress">--}}
{{--                                        <div id="bar1" class="barfiller">--}}
{{--                                            <div class="tipWrap">--}}
{{--                                                <span class="tip"></span>--}}
{{--                                            </div>--}}
{{--                                            <span class="fill" data-percentage="70"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / progress -->--}}
{{--                                <div class="prices d-flex justify-content-between">--}}
{{--                                    <p>Raised:<span> $20,000</span></p>--}}
{{--                                    <p>Goal:<span> $35,000</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                        <div class="single-cases mb-40">--}}
{{--                            <div class="cases-img">--}}
{{--                                <img src="assets/img/gallery/case2.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="cases-caption">--}}
{{--                                <h3><a href="#">Providing Healthy Food For The Children</a></h3>--}}
{{--                                <!-- Progress Bar -->--}}
{{--                                <div class="single-skill mb-15">--}}
{{--                                    <div class="bar-progress">--}}
{{--                                        <div id="bar2" class="barfiller">--}}
{{--                                            <div class="tipWrap">--}}
{{--                                                <span class="tip"></span>--}}
{{--                                            </div>--}}
{{--                                            <span class="fill" data-percentage="25"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / progress -->--}}
{{--                                <div class="prices d-flex justify-content-between">--}}
{{--                                    <p>Raised:<span> $20,000</span></p>--}}
{{--                                    <p>Goal:<span> $35,000</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                        <div class="single-cases mb-40">--}}
{{--                            <div class="cases-img">--}}
{{--                                <img src="assets/img/gallery/case3.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="cases-caption">--}}
{{--                                <h3><a href="#">Supply Drinking Water For The People</a></h3>--}}
{{--                                <!-- Progress Bar -->--}}
{{--                                <div class="single-skill mb-15">--}}
{{--                                    <div class="bar-progress">--}}
{{--                                        <div id="bar3" class="barfiller">--}}
{{--                                            <div class="tipWrap">--}}
{{--                                                <span class="tip"></span>--}}
{{--                                            </div>--}}
{{--                                            <span class="fill" data-percentage="50"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- / progress -->--}}
{{--                                <div class="prices d-flex justify-content-between">--}}
{{--                                    <p>Raised:<span> $20,000</span></p>--}}
{{--                                    <p>Goal:<span> $35,000</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Our Cases End -->
        <!--? About Founder Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About The Founder</span>
                                <h2>Owolabi J. Falana</h2>
                            </div>
                            <p>Owolabi Falana is a Board member at the Lagos State Universal Basic Education Board (SUBEB).
                                The youthful politician is an economist, and a public policy strategist. A chieftain of the ruling
                                All Progressives Congress (APC) in Lagos State, Falana is an active player in the presidential
                                campaign of Asiwaju Bola Ahmed Tinubu as well as the re-election efforts of Governor Babajide Sanwo-Olu. </p>
                            <p>At SUBEB, we have a policy of leaving no child behind and we are working assiduously through our various
                                departments to advance this objective and also add value to the aspirations of Mr. Governor for the education sector.</p>
                        </div>
                        <a href="/" class="btn px-3 py-2">Portfolio</a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
{{--                            <div class="about-font-img d-none d-lg-block">--}}
{{--                                <img src="assets/img/gallery/about2.png" alt="">--}}
{{--                            </div>--}}
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/oj-profile-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Founder End-->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Our recent blog</span>
                            <h2>Latest Post</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($posts->shuffle()->take(2) as $post)
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <img class="img-fluid" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                                        <!-- Blog date -->
                                        <div class="blog-date text-center">
                                            <span>{{$post->created_at->format('d')}}</span>
                                            <p>{{$post->created_at->format('F')}}</p>
                                        </div>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="/blog/{{$post->slug}}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{$post->title}} </h2>
                                        </a>
                                        <p>{{Str::limit($post->body_one, 150)}}</p>
                                        @if($post->external_url !== '' || null)
                                            <ul class="blog-info-link">
                                                <li>
                                                    <a href="{{ $post->external_url }}" target="_blank"><i
                                                            class="fa fa-link"> </i> <i>As seen on:
                                                            <strong>{{$post->publish_on}}</strong></i></a></li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

@endsection
