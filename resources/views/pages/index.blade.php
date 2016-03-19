@extends('layouts.ieee')

    @section('title')
        {{ $pages[0]['title']  }}
    @endsection

    @section('header')
        {!! Html::style('/css/page.style.css') !!}
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

    <div class="container main-content">
        <div class="col-md-9 col">
            <div class="content" >


            <div class="row" style="margin: 20px 0 20px 0">
                @if(!empty($currentPost))
                @foreach($currentPost[0]['images'] as $img)
                <div class="col-xs-6 col-md-4">
                    <a href="{!! route('index')."/".$img !!}" class="thumbnail">
                        <img src="{!! route('index')."/".$img !!}" alt="...">
                    </a>
                </div>
                @endforeach
                @else
                    {!! $pages[0]['body'] !!}
                @endif
                {!! var_dump($posts) !!}
                {!! var_dump($currentPost) !!}
            </div>
            </div>
        </div>
        <!-- navbar -->
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
@endsection