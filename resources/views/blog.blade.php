@extends('layout')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($posts as $post)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                                        <div class="blog_item_date">
                                            <h3>{{$post->created_at->format('d')}}</h3>
                                            <p>{{$post->created_at->format('F')}}</p>
                                        </div>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="/blog/{{$post->slug}}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{$post->title}}</h2>
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
                                </article>
                            @endforeach
{{--                            <nav class="blog-pagination justify-content-center d-flex">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a href="#" class="page-link" aria-label="Previous">--}}
{{--                                            <i class="ti-angle-left"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a href="#" class="page-link">1</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item active">--}}
{{--                                        <a href="#" class="page-link">2</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a href="#" class="page-link" aria-label="Next">--}}
{{--                                            <i class="ti-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-black w-100 btn_1 boxed-btn"
                                            type="submit">Search
                                    </button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection
