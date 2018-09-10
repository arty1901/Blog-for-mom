@extends('main')
<?php $titleTag = htmlspecialchars($post->title);?>
@section('title', "| $titleTag")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="container">
              <h2>{{$post->title}}</h2>
              <p>{!! $post->body !!}</p>
              <p>Posted In: {{ $post->category->name }}</p>
            </div>

            <div class="container">
                <h3 class="comment-title"><i class="far fa-comments"></i> {{ $post->comments()->count() }} Комментарии</h3>
                @foreach($post->comments as $comment)

                    <div class="comment">
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
            </div>

        </div>
        <div class="col-md-4">
                    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::label('name', 'Name:') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="col-md-6">
                            {{ Form::label('email', 'Email:') }}
                            {{ Form::text('email', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="col-md-12">
                            {{ Form::label('comment', 'Comment:') }}
                            {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                            {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block']) }}
                        </div>
                    </div>

                    {{ Form::close() }}
        </div>
    </div>
@stop