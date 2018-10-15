@extends('main')

@section('title', "| Edit tag")

@section('content')

    <div class="row index_post_header block-common-style">
        <div class="col-md-10">
            <h1>Редактировать тэг</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-warning">Отмена</a>
        </div>
    </div>
    
    <div class="row block-common-style">
        {{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT", ]) }}
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('name', 'Title:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
        </div>
        {{ Form::close() }}
    </div>

@endsection