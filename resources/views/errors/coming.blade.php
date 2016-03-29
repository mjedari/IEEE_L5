<!DOCTYPE html>
<html>
    <head>
        <title>Error 404</title>

        {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            .ieee_logo:hover {
                opacity: .7;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Coming Soon</div>
                <p>Your Ip Is: {{$_SERVER['REMOTE_ADDR']}}</p>
                <a href="{{ url('/') }}"><img src="{{url('/images/ieee.jpg')}}" alt=""class="ieee_logo"></a>
            </div>
        </div>
    </body>
</html>
