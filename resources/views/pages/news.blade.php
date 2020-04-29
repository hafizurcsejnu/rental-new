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
                       
                      @foreach ($posts as $post)
                          @include('partials.news_post', ['post' => $post])
                      @endforeach                     
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