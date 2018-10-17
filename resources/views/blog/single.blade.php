@extends('main')
<?php $titleTag = htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')

    <div class="row gap-grid">
        <div class="block-common-style">
            <div class="container">
              <h2>{{$post->title}}</h2>
              <p>{!! $post->body !!}</p>
              <p>Опубликовано в: {{ $post->category->name }}</p>
            </div>

            <div class="container">
                <h3 class="comment-title"><i class="far fa-comments"></i> {{ $post->comments()->count() }}
                    @switch($post->comments()->count())
                        @case(1)
                        Комментарий
                        @break
                        @case(2)
                        @case(3)
                        @case(4)
                        Комментария
                        @break
                        @default
                        Комментариев
                    @endswitch
                </h3>
                @if($post->comments()->count() > 0)

                    @foreach($post->comments as $comment)

                        <div class="container">
                            <div class="author-info">
                                <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) }}" class="author-image">
                                <div class="author-name">
                                    <h4>{{ $comment->name }}</h4>
                                    <p class="author-time">{{ date('F nS, Y - G:i', strtotime($comment->created_at)) }}</p>
                                </div>
                            </div>

                            <div class="comment-content">
                                {{ $comment->comment }}
                            </div>
                        </div>

                    @endforeach

                @endif
            </div>

            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                <div class="form-group">
                    {{ Form::label('name', 'Имя:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('comment', 'Комментарий:') }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}
                </div>
                    {{ Form::submit('Добавить комментарий', ['class' => 'btn btn-success']) }}

            {{ Form::close() }}
        </div>
        @include('partials._widget')
    </div>
@endsection