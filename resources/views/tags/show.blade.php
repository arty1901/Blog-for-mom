@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row index_post_header block-common-style">
        <div class="col-md-8">
            <h1>Постов с тэгом {{ $tag->name }}<small> {{ $tag->posts()->count() }}</small></h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right btn-block" style="">Редактировать</a>
        </div>
        <div class="col-md-2">
            {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}

                {{ Form::submit('Удалить', ['class' => 'btn btn-danger btn-block']) }}

            {{ Form::close() }}
        </div>
    </div>

    <div class="row block-common-style">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Тэги</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tag->posts as $post)

                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">Просмотреть</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


