@extends('layouts.master_news')
@section('content')



    <div class="blog-breadcrumb hidden-xs">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}"> Home</a></li>
                <li class="active">
                    <a href="{{url('/')}}/news">News</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bravo_content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="list-news">
                       
                   
                          
                      <div class="article">
                        <div class="header">
                            <header class="post-header">
                                <img src="{{Voyager::image($data->image)}}" alt="{{$data->title}}">
                            </header>
                            <div class="cate">
                                <ul>
                                    {{-- <li>
                                        <a href="{{url('/')}}/en/news/category/adventure-travel">
                    Adventure Travel
                    </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    <h2 class="title">{{$data->title}}</h2>
                        <div class="post-info">
                            <ul>
                                <li>
                                    <span> BY </span> {{ $data->author->name}}
                                </li>
                                <li> DATE: {{ $data->created_at->format('F d, Y')}} </li>
                            </ul>
                        </div>
                        <div class="post-content">{!! $data->body !!}</div>

                        <div class="space-between">
                            <div class="share"> Share
                                <a class="facebook share-item" href="https://www.facebook.com/sharer/sharer.php?u={{url('/')}}/en/news/morning-in-the-northern-sea&amp;title=Morning in the Northern sea" target="_blank" original-title="Facebook"><i class="fa fa-facebook fa-lg"></i></a>
                                <a class="twitter share-item" href="https://twitter.com/share?url={{url('/')}}/en/news/morning-in-the-northern-sea&amp;title=Morning in the Northern sea" target="_blank" original-title="Twitter"><i class="fa fa-twitter fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                              
                    <hr>

                        <div class="bravo-pagination">

                            {{-- {{$post->links()}} --}}
                           
                            {{-- <span class="count-string">Showing 1 - 5 of 8 posts</span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    @include('partials.news_sidebar')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection