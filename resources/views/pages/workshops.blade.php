@extends('layouts.ieee')

    @section('title')
        {{ $pages[0]['title']  }}
    @endsection

    @section('header')
        {!! Html::style('/css/page.style.css') !!}
        {!! Html::style('/css/colorbox.css') !!}
    @endsection

@section('content')

    <div class="jumbotron jumbotron-main" style="background: url('{!! route('index')."/".$pages[0]["images"] !!}') no-repeat;">
        <div class="container">
            <div class="col-md-8">
                <h1>{{ strtoupper($pages[0]['title']) }}</h1>
                <p>{{ $pages[0]['summary'] }}</p>
            </div>
        </div>
    </div>
    {{--{{var_dump($posts)}}--}}
    <div class="container main-content">
        <div class="col-md-9 col">
            <div class="content">
                <!-- Start Current Post-->
                @if(!empty($currentPost))
                    <h3>{!! $currentPost[0]['title'] !!}</h3>
                    {!! $currentPost[0]['body'] !!}
                @endif
                <!-- Thumbnail Show Place-->
                <div class="row">
                    @if(!empty($currentPost))
                    @foreach($currentPost[0]['images'] as $key => $img)
                        <!-- Filter first image that avoid banner show-->
                        @if($key>=1)
                            <div class="col-xs-6 col-md-4">
                                <a href="{{ url($img) }}" class="thumbnail group1" title="{{$currentPost[0]['title']}}">
                                    <img src="{{ url($img) }}" alt="...">
                                </a>
                            </div>
                        @endif
                    @endforeach
                    @else
                        <div class="col-md-11">
                            {!! $pages[0]['body'] !!}
                        </div>


                    @endif

                        @if(empty($currentPost))
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ url($posts[0]['images'][0]) }}" alt="...">
                                    <div class="caption">
                                        <h4>{{ $posts[0]['title'] }}</h4>
                                        <p class="small-font">{{ $posts[0]['summary'] }}</p>
                                        <p><a href="{{ route(strtolower($pages[0]['title'])).'/'.$posts[0]['slug'] }}" class="btn btn-primary btn-xs" role="button">See More</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img src="{{ url($posts[1]['images'][0]) }}" alt="...">
                                    <div class="caption">
                                        <h4>{{ $posts[1]['title'] }}</h4>
                                        <p class="small-font">{{ $posts[1]['summary'] }}</p>
                                        <p><a href="{{ route(strtolower($pages[0]['title'])).'/'.$posts[1]['slug'] }}" class="btn btn-primary btn-xs" role="button">See More</a></p>
                                    </div>
                                </div>
                            </div>

                        @endif

                {{--{!! var_dump($lastPosts) !!}--}}
                {{--{!! var_dump($posts) !!}--}}
                {{--{!! var_dump($currentPost) !!}--}}
                </div>
                @if(!empty($currentPost))
                    <hr>
                    <p class="created">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        Created at: {{ $currentPost[0]['created_at'] }}
                    </p>
                @endif
            </div>

            <!-- Content Footer -->
            <div class="main-content-footer">
                <!-- Start Last News Posts Column -->
                @if(!empty($lastPosts) and !empty($currentPost))
                    <div class="last-news">
                        <h4>Last {{ $pages[0]['title'] }}</h4>
                        @foreach($lastPosts as $col)
                            <div class="col-md-4" style="">
                                <ul>
                                    @foreach($col as $item)
                                        <li><a href="{{ route(strtolower($pages[0]['title'])).'/'.str_slug($item, '_') }}">{{ $item }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Start Sidebar -->
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Did you know?
                    <span class="glyphicon glyphicon-info-sign didyouknow-sing"></span>
                </div>
                <div class="panel-body">
                    <h4>{!! $didYouKnow['title'] !!}</h4>
                    {!! $didYouKnow['body'] !!}
                </div>
            </div>
            <div class="subscribe-mini-form">
                <div class="envelope-circle">
                    <span class="glyphicon glyphicon-envelope big-envelope"></span>
                </div>
                <div class="subscribe-content">

                </div>
                <div class="subscribe-form">
                    {!! Form::open(array('url'=>'/subscribe', 'method' => 'post','class' => 'text-center')) !!}
                    <div class="form-group form-subscribe">
                        <div class="subscribe-form-column">
                            {!! Form::label('email-subscribe', 'Stay up to date!') !!}
                            {!! Form::email($name = 'email', $value = null, $attributes = array('class'=>'form-control email-input', 'placeholder'=>'input your email here', 'id'=>'email-subscribe')) !!}
                            {!! Form::submit('subscribe' ,array('class' => 'btn btn-primary subscribe-button')) !!}
                        </div>
                        <span class="glyphicon glyphicon-ok" aria-hidden="true" style="visibility: hidden"></span>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@stop

@section('script')
    {!! Html::script('js/ieee.pages.js') !!}
    {!! Html::script('js/jquery.colorbox.js') !!}

@endsection