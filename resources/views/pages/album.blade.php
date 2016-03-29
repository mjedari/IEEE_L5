@extends('layouts.ieee')

    @section('title')
        Album
    @endsection

    @section('header')
        {!! Html::style('/css/album.style.css') !!}
        {!! Html::style('/css/colorbox.css') !!}
    @endsection

    @section('navbar-type', 'transparent navbar-inverse')
@section('content')

<!-- Album -->
<div class="container-fluid album">
    <h1>IACT Album</h1>

{{--{{ var_dump($posts) }}--}}
{{--    {{ var_dump(url('a')) }}--}}
{{--{{ var_dump($currentPost) }}--}}
{{--    {!! dd($currentPost) !!}--}}
@if(empty($currentPost))

    @foreach($posts as $key => $item)

        <?php
        // this condition set a "row" div for per 4 item.
        // it can make only 14 rows.
        if($key==0){echo '<div class="row">';};
        ?>
        <div class="col-md-3">
            <a href="{{ route('album').'/'.$item[2] }}" class="image-card">
                <div class="thumbnail">
                    <img src="{{ url($item[4][1])  }}" class="sample-image">
                    <h5 class="image-back">See more</h5>
                    <div class="caption">
                        <h4>
                            <a href="{{ route(strtolower($item[3])).'/'.$item[2] }}" class="link-sign">
                                <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
                            </a>
                            {{ $item[0] }}
                        </h4>
                    </div>

                </div>
            </a>
        </div>
            <?php
            if(end($posts)){ $flag = true; };
            if(in_array($key,[3,7,11,15,19,23,27,31,35,39,43,47,51,55 ])){echo '</div><div class="row">';}
            ?>
    @endforeach
            <?php
            if($flag){echo '</div>';};
            ?>
@else
        <a href="{{ route('album') }}"><img src="{{ url('images/Back-icon-2.png') }}" alt="" class="back-icon"></a>
        <h2><a href="{{ route(strtolower($currentPost[2])).'/'.$currentPost[1] }}">{{ $currentPost[0] }}</a></h2>
    @foreach($currentPost[3] as $key => $item)
        <?php
        // this condition set a "row" div for per 4 item.
        // it can make only 14 rows.
        if($key==1){echo '<div class="row">';};
        ?>
        <!-- Filter first image that avoid banner show-->
        @if($key>=1)
        <div class="col-md-3">
            <a href="{{ url($item) }}" class="thumbnail group1">
                <img src="{{ url($item) }}" alt="...">
            </a>
        </div>
            <?php
            if(end($posts)){ $flag = true; };
            if(in_array($key,[4,8,12,16,20,24,28,32,36,40,44,48,52,56 ])){echo '</div><div class="row">';}
            ?>
        @endif
    @endforeach
        <?php
        if($flag){echo '</div>';};
        ?>
@endif
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
            <div class="col-md-8 subscribe-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore reprehenderit unde, rem at vitae fugiat repellat aliquam repellendus temporibus animi, voluptatem reiciendis odio architecto error quos nostrum et iure aliquid?</p>
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
    {!! Html::script('js/board.page.js') !!}
    {!! Html::script('js/jquery.colorbox.js') !!}
    <script>
        $('.tooltip-side-nav').tooltip();

    </script>
@endsection