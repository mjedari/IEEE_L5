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
    <!-- main content -->
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
                <!-- contact form -->

                <div class="col-md-6">
                    <div class="contact-form">
                        {!! Form::open(array('url'=>'/contact/store', 'method' => 'post','class' => '')) !!}
                        <div class="form-group">
                            {!! Form::label('contact-name', 'Name:') !!}
                            {!! Form::text($name = 'name', $value = null, $attributes = array('class'=>'form-control name-input', 'placeholder'=>'input your name here', 'id'=>'contact-name')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contact-email', "Email: *") !!}
                            {!! Form::email($name = 'email', $value = null, $attributes = array('class'=>'form-control email-input', 'placeholder'=>'input your email here', 'id'=>'contact-email')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contact-phone', 'Phone:') !!}
                            {!! Form::text($name = 'phone', $value = null, $attributes = array('class'=>'form-control phone-input', 'placeholder'=>'Ex: +98 21 44444444', 'id'=>'contact-phone')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contact-subject', 'Subject: *') !!}
                            {!! Form::text($name = 'subject', $value = null, $attributes = array('class'=>'form-control subject-input', 'placeholder'=>'', 'id'=>'contact-subject')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contact-message', 'Message: *') !!}
                            {!! Form::textarea($name = 'message', $value = null, $attributes = array('class'=>'form-control message-input', 'placeholder'=>'', 'id'=>'contact-message')) !!}
                        </div>
                        {!! Form::submit('Send',array('class' => 'btn btn-primary send-button')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container-fluid" style="background: forestgreen;margin: 10px;padding: 10px;">
                        <p style="color: white;font-size: 20px; font-weight: bold;font-style: italic"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> We are here:</p>
                        @include('pages.map')
                    </div>

                    <div class="container-fluid" style="background: blueviolet;padding: 10px;margin:10px">
                        <div class="col-md-6">
                            <p style="color: white; font-size: 35px; font-weight: bold;font-style: italic"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> On your phone:</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/ieee-qr.png" alt="" style="width: 160px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar -->
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
    {!! Html::script('js/contact.page.js') !!}
@endsection