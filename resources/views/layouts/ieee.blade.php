<!-- In The Name Of God -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IEEE - @yield('title')</title>

    <!-- Fonts -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

    <!-- Styles -->
    {!! Html::style('/css/bootstrap.min.css') !!}
    @yield('header')
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}
</head>
<body>
<!-- ================Navbar And Slider================= -->
<section>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000">IACT IEEE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{route('news')}}">News<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('workshops')}}">Workshops</a></li>
                            <li><a href="{{route('tutorials')}}">Guides & Tutorials</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('conferences')}}">Conferences</a></li>
                            <li><a href="{{route('competitions')}}">Competitions</a></li>
                            <li><a href="{{route('camps')}}">Camps</a></li>
                            <li><a href="{{route('sessions')}}">Sessions</a></li>
                            <li><a href="{{route('calendar')}}">Calendar</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('articles')}}">Articles</a></li>
                            <li><a href="{{route('newsletter')}}">Newsletter</a></li>
                            <li><a href="{{route('subscription')}}">Subscription</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <div class="menu-caption">
                                    <img src="{{url('/images/subscribe_f).jpg')}}" alt="">
                                    <p>IEEE Xplore® digital library subscriptions deliver the journals, conference proceedings, standards, eBooks, and tutorials that define technology today.</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chapters <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('chapterOne')}}">Chapter 1</a></li>
                            <li><a href="{{route('chapterTwo')}}">Chapter 2</a></li>
                            <li><a href="{{route('chapterThree')}}">Chapter 3</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('images')}}">Album</a></li>
                            <li><a href="{{route('videos')}}">Videos</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="chapterone">About IEEE</a></li>
                            <li><a href="#">History of IEEE</a></li>
                            <li role="separator" class="divider"></li>
                            <img class="about-img" src="{{url('/images/about_f.jpg')}}" alt="">
                            <li><a href="#">About IAUCTB</a></li>
                            <li><a href="#">About IACT Student Branch</a></li>
                            <li><a href="">Elections</a></li>
                            <li><a href="/Documents" class="disabled-link">Governing Documents</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</section>
@yield('content')

<!-- ======================= FOOTER ======================== -->
    <footer>
        <div class="container-fulied main-footer-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>Contact</h4>
                        </div>
                        <div class="footer-content">
                            <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci.</p>
                            <hr>
                            <i class="glyphicon glyphicon-home"></i>   123, Some Area. Los Angeles, CA, 54321.</i>
                            <hr>
                            <i class="glyphicon glyphicon-earphone"> +98-0214444444</i>
                            <hr>
                            <i class="glyphicon glyphicon-envelope"></i><span>  someone@example.com</span>
                        </div>
                    </div>
                    <div class="col-md-3 test">
                        <div class="footer-title">
                            <h4>Openning Hours</h4>
                        </div>
                        <div class="footer-content">
                            <p>Mon - Fri</p>
                            <h4>9:00 - 17:00</h4>
                            <hr>
                            <p>Sat</p>
                            <h4>9:00 - 12:00</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="footer-content"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-title">
                            <h4><span class="glyphicon glyphicon-link"></span> Links</h4>
                        </div>
                        <div class="footer-content">
                            <ul class="list-unstyled ieee-links">
                                <li><a href="http://ieee.org/" target="_blank">IEEE.org</a></li>
                                <li><a href="http://ieeexplore.ieee.org/" target="_blank">IEEE Xplore Digital Library</a></li>
                                <li><a href="http://standards.ieee.org/" target="_blank">IEEE Standards Association</a></li>
                                <li><a href="http://spectrum.ieee.org/" target="_blank">IEEE Spectrum Online</a></li>
                                <li><a href="http://ieee.org.ir/" target="_blank">IEEE Iran Section</a></li>
                                <li><a href="http://www.ieee.org/sitemap.html" target="_blank">More IEEE Sites</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <div class="container">
                <div class="copyright">
                    <p>Copyright © IACT IEEE -
                        <a href=""><i class="glyphicon glyphicon-home"></i> Home</a> |
                        <a href="">FAQ</a> |
                        <a href="">Contact Us</a>
                        <a href=""></a>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ======================= SCRIPTS ======================= -->

    {!! Html::script('js/jquery-1.12.0.min.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    @yield('script')
    <!-- ====================== END SCRIPTS ==================== -->
</body>
</html>