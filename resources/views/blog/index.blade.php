@extends('main')

@section('title', '| Blog')

@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h1>Blog</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card-columns">
            @foreach($posts as $post)
                    <div class="card">
                        <div class="card-body">
                            <div class="post-header">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <small class="text-muted">{{ date('M j, Y', strtotime($post->created_at)) }}</small>
                            </div>
                            <p class="card-category font-weight-light">{{ $post->category->name }}</p>
                            <p class="card-text">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : '' }}</p>
                            <div class="container post-meta">
                                <a href="{{ route('blog.single', $post->slug) }}">Читать далее <i class="fas fa-chevron-right"></i></a>
                                <small class="text-muted"><i class="far fa-comment"></i> {{ $post->comments()->count() }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('partials._widget')
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@stop