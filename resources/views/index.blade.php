@extends('layouts.ieee')
@section('title', 'IAUCTB')
        @section('header')
            {!! Html::style('/css/style.css') !!}
        @endsection

@section('content')
<section>
<!-- <<<<<Slider>>>>>   -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
        @foreach($slider as $key => $item)
            @if($key == 0 )
            <div class="item active">
            @else
            <div class="item">
            @endif
                {{--*slider icons start here*--}}
                <div class="slider-info">
                    @if(strtolower($item['category']['title']) == 'news')
                        <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @elseif(strtolower($item['category']['title']) == 'workshops')
                        <span class="glyphicon glyphicon-education slider-icon" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @elseif(strtolower($item['category']['title']) == 'videos')
                        <span class="glyphicon glyphicon-film slider-icon" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @elseif(strtolower($item['category']['title']) == 'album')
                        <span class="glyphicon glyphicon-film slider-icon" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @elseif(strtolower($item['category']['title']) == 'articles')
                        <span class="glyphicon glyphicon-ok slider-icon" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @elseif(strtolower($item['category']['title']) == 'articles')
                        <span class="glyphicon glyphicon-ok slider-icon" aria-hidden="true"></span>
                        {{ str_singular($item['category']['title']) }}
                    @endif
                </div>
                <img src="{{$item['images'][0]}}" alt="..." class="slider-image">
                <div class="carousel-caption">
                    <h1>
                        <a href="{{ route(strtolower($item['category']['title'])).'/'.$item['slug'] }}">
                            {{$item['title']}}</a>
                    </h1>
                    <p>{!! $item['summary'] !!}</p>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- <<<<<Slider>>>>>   -->
</section>
<!-- ================END Navbar And Slider================= -->

<div class="page-title-one">
    <div class="container text-center">
        <div class="col-md-10 col-sm-12 col-xs-12 page-title-place">
            <h2 class="page-title-one-text "><span>“</span>Our greatest weakness lied in giving up.
                The most certain way to succeed is always to try just one more time. <span>”</span><br><span>Thomas A. Edison</span></h2>
        </div>
    </div>
</div>
<!-- ======================Main Cards======================= -->
<section class="main-cards clearfix">
    <div class="container-fulied">
        <a href="" class="disabled-link">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-user card-glyph" aria-hidden="true"></span>
                <h3>Join IEEE</h3>
                <p>As a member of IEEE, you'll receive access to select content, product discounts, and more.</p>
            </div>
        </a>
        <a href="" class="disabled-link">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-ok-sign card-glyph" aria-hidden="true"></span>
                <h3>Sign Up IAUCTB IEEE</h3>
                <p>You can sign up IAUCTB IEEE site as an IAUCTB (Faculty of Engineering) student.</p>
            </div>
        </a>
        <a href="" class="disabled-link">
            <div class="col-md-4 col-sm-4 col-xs-12 card text-center">
                <span class="glyphicon glyphicon-calendar card-glyph" aria-hidden="true"></span>
                <h3>See Calendar & Share It!</h3>
                <p>To see and our educational workshops and courses plan and see IAUCTB IEEE last events in general calendar.  </p>
            </div>
        </a>
    </div>
</section>

<!-- =================== News & Articles ==================== -->
<div class="container-fluid">
    <!-- strat news column -->
    <div class="col-md-8 news-column">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="news-top-nav text-center">
                    <a href="{{route('news')}}">IACT NEWS</a>
                </div>
                <!-- strat news -->
                <div class="row news-row news-ajax">
                    @include('news-ajax')
                </div>
                <div class="paginate">
{{--                {!! $news->links() !!}--}}
                    <ul class="pager">
                        <li><a href="{{json_decode($news)->prev_page_url}}" class="prev"><i class="glyphicon glyphicon-chevron-left"></i>Prev</a></li>
                        <li><a href="{{json_decode($news)->next_page_url}}" class="next">Next<i class="glyphicon glyphicon-chevron-right"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- start article & workshops column -->
    <div class="col-md-4">
        <div class="container-fluid articles-tab">
            <div class="articles-top-nav text-center">
                <a href="{{route('articles')}}">ARTICLES</a>
            </div>
            <!-- strat panel -->
            {{--<div class="panel panel-default article-panel">--}}
                {{--<div class="panel-heading"></div>--}}
                {{--<div class="panel-body">--}}
                    {{--<!-- start article -->--}}
                    {{--@foreach($articles as $item)--}}
                        {{--<div class="media article">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#">--}}
                                    {{--<img class="media-object" src="/images/articles.jpg" alt="..." style="width: 60px;">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="media-body article-body">--}}
                                {{--<h5 class="media-heading">{{$item['title']}}</h5>--}}
                                {{--{!! $item['body'] !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            @include('articles')
        </div>
        <div class="container-fluid">
            <div class="workshops-top-nav text-center">
            <a href="{{route('workshops')}}">WORKSHOPS</a>
        </div>
            <div class="panel panel-default workshops-panel">
                <!-- Default panel contents -->
                <div class="panel-body">
                    Here you see some information about last workshops:
                </div>
                <!-- Table -->
                <table class="table table-hover table-condensed table-responsive">
                    <tr class="table-first-row">
                        <td>Name</td>
                        <td><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Start Date</td>
                        <td>Class No</td>
                        <td><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Time</td>
                    </tr>
                    <tr>
                        <td>electronic</td>
                        <td>95/2/12</td>
                        <td>527</td>
                        <td>13:00, 17:00</td>
                    </tr>
                    <tr>
                        <td>machine vision</td>
                        <td>95/2/12</td>
                        <td>527</td>
                        <td>13:00, 17:00</td>
                    </tr>
                    <tr>
                        <td>Avr</td>
                        <td>95/2/12</td>
                        <td>527</td>
                        <td>13:00, 17:00</td>
                    </tr>
                    <tr>
                        <td>Android</td>
                        <td>95/2/12</td>
                        <td>527</td>
                        <td>13:00, 17:00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ===================== Subscription ===================== -->
<section>
    <div class="Subscription">
        <div class="container">
            <div class="subscribe-body clearfix text-center">
                <div class="envelope-circle">
                    <a href="{{route('subscription')}}"><span class="glyphicon glyphicon-envelope big-envelope"></span></a>
                </div>
            </div>
            <!-- subscribe text -->
            <div class="col-md-8 subscribe-content text-center">
                <p>Subscribe to the IAUCTB IEEE Newsletters. <br>Stay current, competitive, and informed!</p>
            </div>
            <!-- subscribe form -->
            <div class="container subscribe-form">
                {!! Form::open(array('url'=>'/subscribe', 'method' => 'post','class' => 'text-center form-horizontal')) !!}
                <div class="form-group form-subscribe form-group-lg subscribe-form-body">
                    <div class="col-md-7 form-inline subscribe-form-column">
                        {!! Form::label('email-subscribe', 'Stay up to date!') !!}
                        {!! Form::email($name = 'email', $value = null, $attributes = array('class'=>'form-control lg email-input', 'placeholder'=>'input your email here', 'id'=>'email-subscribe')) !!}
                        {!! Form::submit('subscribe' ,array('class' => 'btn btn-primary btn-lg subscribe-button')) !!}
                        <div class="status-div">
                            <span class="glyphicon status-mark" aria-hidden="true" style="display: none"></span>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>
@stop

@section('script')
    <script type="text/javascript" src="js/ieee.js"></script>
    <script type="text/javascript" src="js/jquery.equalize.js"></script>
@endsection