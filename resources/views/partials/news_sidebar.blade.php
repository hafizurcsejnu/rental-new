<aside class="sidebar-right">
    <div class="sidebar-widget widget_search">
        <form method="get" class="search" action="/news">
            <input type="text" class="form-control" value="" name="s" placeholder="Search ...">
            <button type="submit" class="icon_search"></button>
        </form>
    </div>
    <div class="sidebar-widget">
        <div class="sidebar-title">
            <h4>About Us</h4>
        </div>
        <div class="textwidget">
            Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa
        </div>
    </div>
    <div class="sidebar-widget widget_bloglist">
        <div class="sidebar-title">
            <h4>Recent News</h4>
        </div>
        <ul class="thumb-list">
            <?php
                $news = DB::table('posts')->get();
                $i=0;
                ?>
            @foreach ($news as $post)

            <li>
                <div class="thumb">
                    <a href="/news-detail/{{ $post->slug }}">
                        <img class="lazy loaded" data-src="{{Voyager::image($post->image)}}" alt="{{ $post->title}}" src="{{Voyager::image($post->image)}}" data-was-processed="true">
                    </a>
                </div>
                <div class="content">
                    
                    <h5 class="thumb-list-item-title">
<a href="/news-detail/{{ $post->slug }}">{{ $post->title}}</a>
</h5>
                </div>
            </li>
            @endforeach
          
        </ul>
    </div>
    {{-- <div class="sidebar-widget widget_category">
        <div class="sidebar-title">
            <h4>Categories</h4>
        </div>
        <ul>
            <li>
                <span></span>
                <a href="/news/category/adventure-travel"> Adventure Travel</a>
            </li>
            <li>
                <span></span>
                <a href="/news/category/ecotourism"> Ecotourism</a>
            </li>
            <li>
                <span></span>
                <a href="/news/category/sea-travel"> Sea Travel </a>
            </li>
            <li>
                <span></span>
                <a href="/news/category/hosted-tour"> Hosted Tour</a>
            </li>
            <li>
                <span></span>
                <a href="/news/category/city-trips"> City trips </a>
            </li>
            <li>
                <span></span>
                <a href="/news/category/escorted-tour"> Escorted Tour </a>
            </li>
        </ul>
    </div> --}}
    {{-- <div class="sidebar-widget widget_tag_cloud">
        <div class="sidebar-title">
            <h4>Tags</h4></div>
        <div class="tagcloud">
            <ul>
            </ul>
        </div>
    </div> --}}
</aside>
