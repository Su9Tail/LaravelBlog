@extends("layout")

@section("css")
    <link href="{{asset('vendor/clean-blog/clean-blog.css')}}" rel="stylesheet" type="text/css">
@endsection
@section("body")

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laravel Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/post">Sample Post</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    @yield("header")

    <!-- Main Content -->
    @yield("content")

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="fa-stack fa-lg">--}}
                        {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                        {{--<i class="fa fa-wechat fa-stack-1x fa-inverse"></i>--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#">--}}
                        {{--<span class="fa-stack fa-lg">--}}
                        {{--<i class="fa fa-circle fa-stack-2x"></i>--}}
                        {{--<i class="fa fa-weibo fa-stack-1x fa-inverse"></i>--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="https://github.com/Su9Tail" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Cals</p>
                </div>
            </div>
        </div>
    </footer>

@endsection

@section("js")
    <script src="{{asset('vendor/clean-blog/clean-blog.js')}}"></script>
@endsection
