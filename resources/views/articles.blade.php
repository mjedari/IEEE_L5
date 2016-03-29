<ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
    {{--<li><a data-toggle="tab" href="#best">Best</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>--}}
</ul>

<div class="tab-content">
    <div id="recent" class="tab-pane fade in active">
        @foreach($articles as $item)
        <div class="article-item">
            @if(!empty($item['images']))
            <img src="{{ $item['images'][0] }}" class="article-image" alt="">
            @endif
            <a href="">
                <h5>{{ $item['title'] }}</h5>
                <p>{{ $item['summary'] }}</p>
            </a>
            <div class="article-detail">
                Published in {{ $item['created_at'] }} | Owner: Mahdi Jedari
            </div>
        </div>
        <hr>
        @endforeach
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
