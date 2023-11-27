@extends('admin.layout-admin')

@section('content')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Press Releases</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Edit Post: {{ $post->title}}</h5>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" action="/admin/posts/{{$post->id}}/edit" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" for="title" name="title" value="{{$post->title}}" required placeholder="post title">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">External Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" for="external_url" name="external_url" value="{{$post->external_url}}"  placeholder="eg. https://ajasainfo.com/2023/08/13/hon-owolabi-falana-receives">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Publish on</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" for="publish_on" name="publish_on" value="{{$post->publish_on}}"  placeholder="e.g The Punch">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Upload Thumbnail</label>
                                                <div class="col-sm-10">
                                                    @if ($post->thumbnail)
                                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Current Thumbnail" style="max-width: 100px; max-height: 100px;">
                                                    @else
                                                        <p>No thumbnail available</p>
                                                    @endif
                                                    <input type="file" class="form-control" for="thumbnail" name="thumbnail"   value="{{$post->thumbnail}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">First Paragraph</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" class="form-control" for="body_one" name="body_one" placeholder="post body">{{$post->body_one}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Other Body</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" id="editor" class="form-control" for="body_two" name="body_two"  placeholder="post body">{{$post->body_two}}</textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary " type="submit"> Update</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection
