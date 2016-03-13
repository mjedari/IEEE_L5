<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
@foreach(json_decode($news)->data as $item)
    <div class="col-xs-6 col-sm-4 col-md-4 news-thumb">
        <div class="thumbnail">
            <img  class="news-images" src="
            @if(!isset($item->images[0]))
                /images/no_image_available.jpg
            @else
                {{ $item->images[0] }}
            @endif
            " alt="...">
        <div class="caption">
            <h5>{{ $item->title }}</h5>
            <p class="news-summary">{!! $item->summary !!}</p>
        </div>
        <a href="{{ '/news/'.$item->slug }}" class="btn btn-primary news-button btn-block btn-sm" role="button">Read more</a>
        </div>
    </div>
@endforeach
<div>
    <ul class="pager">
        <li><a href="{{ json_decode($news)->prev_page_url }}">prev</a></li>
        <li><a href="{{ json_decode($news)->next_page_url }}">next</a></li>
    </ul>
</div>

<script>
    $(".pager > li > a").click(function($e) {
        $e.preventDefault();
        $.ajax({
            url: '/news/url/t',
            type: "GET",
            dataType: 'JSON',
            data: {'page': 2},
            success: function (data) {
                $('.news-row').load('http://localhost:8000/news/url/');
            }
        });
    });
</script>
</body>
</html>