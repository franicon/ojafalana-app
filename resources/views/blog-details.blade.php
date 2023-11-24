@extends('layout')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Blog Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start -->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">{{$post->title}}
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li class="like-info"><a href="{{$post->external_url}}}" target="_blank"><span class="align-middle"><i
                                                    class="fa fa-link"></i></span> seen on:
                                            <strong>{{$post->publish_on}}</strong></a></li>
                                    <li><i class="fa fa-clock"></i> {{$post->created_at->format('d F Y')}}</li>
                                </ul>
                                <p class="excert">
                                    {{$post->body_one}}
                                </p>
                                <p>
                                    {{$post->body_two}}
                                </p>
                                <p>
                                    {{$post->body_three}}
                                </p>
                                <p>
                                    {{$post->body_four}}
                                </p>
                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">

                                <a class="like-info" href="/blog"><span class="align-middle text-primary"><i
                                            class="fa fa-arrow-alt-circle-left"></i>Back</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                @foreach($posts->shuffle()->take(4) as $post)
                                    <div class="media post_item">
                                        <img width="auto" height="70" src="{{ asset('storage/' . $post->thumbnail) }}"
                                             alt="post">
                                        <div class="media-body">
                                            <a href="/blog/{{$post->slug}}">
                                                <h3 style="color: #2d2d2d;">{{$post->title}}</h3>
                                            </a>
                                            <p>{{$post->created_at->format('d F Y')}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>
                            <aside class="single_sidebar_widget instagram_feeds d-none">
                                <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection
