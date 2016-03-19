@extends('layouts.ieee')
@section('header')
    <style>
        .articles-tab {
            /*border: 1px darkgray solid;*/
            /*border-top: 0;*/
        }
        #home {

        }
        .article-item {
            /*margin-top: 10px;*/

        }
        .article-image {
            float: left;
            margin-right: 10px;

        }
        .article-item > a {
            font-weight: bold;
            font-size: 12px;
            color: black;
            text-decoration: none;

        }
        .article-detail {
            font-size: 10px;
            color: darkgray;
        }
        hr {
            margin: 6px 0 5px 0;
        }
        .tab-content {
            padding: 10px;
        }
    </style>
@endsection
@section('content')
<div class="col-md-3 articles-tab">
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
        <li><a data-toggle="tab" href="#best">Best</a></li>
        {{--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>--}}
    </ul>

    <div class="tab-content">
        <div id="recent" class="tab-pane fade in active">
            <div class="article-item">
                <img src="upload/images/0izPmy.png" class="article-image " alt="">
                <a href="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </a>
                <div class="article-detail">
                    Published in 16 Aug | Owner: Mahdi Jedari
                </div>
            </div>
            <hr>
            <div class="article-item">
                <img src="upload/images/0izPmy.png" class="article-image " alt="">
                <a href="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </a>
                <div class="article-detail">
                    Published in 16 Aug | Owner: Mahdi Jedari
                </div>
            </div>
            <hr>
            <div class="article-item">
                <img src="upload/images/0izPmy.png" class="article-image " alt="">
                <a href="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </a>
                <div class="article-detail">
                    Published in 16 Aug | Owner: Mahdi Jedari
                </div>
            </div>
        </div>
        <div id="best" class="tab-pane fade">
            <h3>Best</h3>
            <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>
    </div>
</div>


@endsection