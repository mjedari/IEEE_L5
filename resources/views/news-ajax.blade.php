@foreach(json_decode($news)->data as $item)
    <div class="col-xs-6 col-sm-4 col-md-3 news-thumb group">
        <div class="thumbnail equalize scrollable_div">
            {{--<div class="news-images">--}}
            <img  class="news-images" src="
            @if(!isset($item->images[0]))
                    /images/no_image_available.jpg
                @else
            {{ $item->images[0] }}
            @endif
                    " alt="...">
            {{--</div>--}}
            <div class="caption news-caption">
                <h5>{{ $item->title }}</h5>
                <p class="news-summary ">{!! $item->summary !!}</p>
            </div>
        </div>
        <a href="{{ '/news/'.$item->slug }}" class="btn btn-primary news-button btn-block btn-sm" role="button">Read more</a>

    </div>
@endforeach
