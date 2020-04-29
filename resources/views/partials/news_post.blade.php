<div class="post_item ">
        <div class="header">
            <header class="post-header">
            <a href="/news-detail/{{ $post->slug }}">
                    <img class="lazy loaded" data-src="{{Voyager::image($post->image)}}" alt="" src="{{Voyager::image($post->image)}}" data-was-processed="true">
                </a>
            </header>
            <div class="cate">
                <ul>
                    {{-- <li>
                        <a href="https://www.bookingcore.org/en/news/category/hosted-tour">
Hosted Tour
</a>
                    </li> --}}
                </ul>
            </div>
            <div class="post-inner">
                <h4 class="post-title">
                <a class="text-darken" href="/news-detail/{{ $post->slug }}">{{ $post->title}}</a>
</h4>
                <div class="post-info">
                    <ul>
                        <li>
                            <span class="avatar-text">S</span>
                            <span> BY </span> {{ $post->author->name}}
                        </li>
                        <li> DATE: {{ $post->created_at->format('F d, Y')}} </li>
                    </ul>
                </div>
                <div class="post-desciption">
                    {{ $post->excerpt }}
                </div>
                <a class="btn-readmore" href="/news-detail/{{ $post->slug }}">Read More</a>
            </div>
        </div>
    </div>