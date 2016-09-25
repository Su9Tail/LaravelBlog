@extends("web.layout")

@section("header")
    <header class="intro-header" style="background-image: url({{asset('image/post-background.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">{{$post->content_raw}}</h2>
                        <span class="meta">Posted by <a href="#">admin</a> on {{$post->created_at}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section("content")
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {{$post->content}}
                </div>
            </div>
        </div>
    </article>
@endsection