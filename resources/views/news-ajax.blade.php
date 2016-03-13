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
