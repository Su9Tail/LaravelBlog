@extends("web.layout")

@section("header")
    <header class="intro-header" style="background-image: url({{asset('image/index-background.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="/post/{{$post->id}}">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$post->content}}
                            </h3>
                        </a>
                        <p class="post-meta">
                            Posted by <a href="#">admin</a> on {{$post->created_at}}
                        </p>
                    </div>
                    <hr>
                @endforeach
                {!! $posts->render() !!}
            </div>
        </div>
    </div>
@endsection