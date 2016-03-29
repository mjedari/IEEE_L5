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
    {!! Html::style('/css/bootstrap.css') !!}
    {!! Html::style('/css/fm.scrollator.jquery.css') !!}
    @yield('header')
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">--}}
</head>
<body>
<!-- ================Navbar And Slider================= -->
<section>
    <nav class="navbar navbar-default @yield('navbar-type')">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000">IAUCTB IEEE <sub class="litle-font">Beta</sub> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{route('news')}}">News<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('courses')}}">Courses</a></li>
                            <li><a href="{{route('workshops')}}">Workshops</a></li>
                            <li><a href="{{route('tutorials')}}">Guides & Tutorials</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('ieeeDays')}}">IEEE Days</a></li>
                            <li><a href="{{route('elections')}}">Elections</a></li>
                            <li><a href="{{route('occasions')}}">Special Occasions</a></li>
                            <li><a href="{{route('competitions')}}">Competitions</a></li>
                            <li><a href="{{route('calendar')}}">Calendar</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="menu-discription litle-font">Discription</li>
                        </ul>
                    </li>
                    <!--Publications menu-->
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publications <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{route('articles')}}">Articles</a></li>--}}
                            {{--<li><a href="{{route('newsletter')}}">Newsletter</a></li>--}}
                            {{--<li><a href="{{route('subscription')}}">Subscription</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li>--}}
                                {{--<div class="menu-caption">--}}
                                    {{--<img src="{{url('/images/subscribe_f).jpg')}}" alt="">--}}
                                    {{--<p>IEEE Xplore® digital library subscriptions deliver the journals, conference proceedings, standards, eBooks, and tutorials that define technology today.</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <!--chapters menu-->
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chapters <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{route('chapterOne')}}">Chapter 1</a></li>--}}
                            {{--<li><a href="{{route('chapterTwo')}}">Chapter 2</a></li>--}}
                            {{--<li><a href="{{route('chapterThree')}}">Chapter 3</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li class="menu-discription litle-font">Discription</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('album')}}">Album</a></li>
                            <li><a href="{{route('videos')}}" class="disabled-link">Videos</a></li>
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
                            <li><a href="{{ route('about').'/'.str_slug('Our Mission & Vision','_') }}">Our Mission & Vision</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('History of IEEE & Region 8','_') }}">History of IEEE & Region 8</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('History of Iran Section','_') }}">History of Iran Section</a></li>
                            <li role="separator" class="divider"></li>
                            <img class="about-img" src="{{url('/images/about_f.jpg')}}" alt="">
                            <li><a href="{{ route('about').'/'.str_slug('Introduction to IAUCTB','_') }}">Introduction to IAUCTB</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('IAUCTB Student Branch','_') }}">IAUCTB Student Branch</a></li>
                            <li><a href="{{ route('board') }}">Our Board</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('WebSite Team','_') }}" class="disabled-link">WebSite Team</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('Vital Documents','_') }}">Vital Documents</a></li>
                            <li><a href="{{ route('about').'/'.str_slug('Awards & Honors','_') }}">Awards & Honors</a></li>
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
                            <p>Neyayesh University Complex.<br>Faculty of Engineering and technology</p>
                            <hr>
                            <i class="glyphicon glyphicon-home"></i> Oreg St. Hamila Blvd, Poonk Sq</i>
                            <hr>
                            <i class="glyphicon glyphicon-earphone"> +98-02144600070</i>
                            <hr>
                            <i class="glyphicon glyphicon-envelope"></i><span>  info@ieee-iauctb.ir</span>
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
                            <h4>Members Last Year</h4>
                        </div>
                        <div class="footer-content members">
                            <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 338</h1>
                            <a class="btn btn-default disabled-link" href="#" role="button">Join Us Now!</a>
                            <a class="btn btn-default disabled-link" href="#" role="button">More</a>
                            <div id="date-part" style="width: 100px;"></div>
                        </div>
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
                    <p>Copyright © IAUCTB IEEE -
                        <a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i> Home</a> |
                        <a href="" class="disabled-link">FAQ</a> |
                        <a href="{{ route('contact') }}">Contact Us</a>
                        <a href="https://telegram.me/ieeesbiauctb" target="_blank" class="pull-right">Join Our Telegram Channel
                            <img src="{{ url('/images/Telegram_logo_30.png') }}" alt="">
                        </a>
                    </p>

                </div>

            </div>

        </div>
    </footer>
    <!-- ======================= SCRIPTS ======================= -->

    {!! Html::script('js/jquery-1.12.0.min.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/fm.scrollator.jquery.js') !!}

    @yield('script')
    <!-- ====================== END SCRIPTS ==================== -->
</body>
</html>