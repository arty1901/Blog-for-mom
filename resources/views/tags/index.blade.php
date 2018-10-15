@extends('main')

@section('title', '| Все тэги')

@section('content')

    <div class="row index_tag block-common-style">
        <div class="col-md-9">
            <h1>Тэги</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-ms-8 -->

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <h2>Новый тэг</h2>
                {!! Form::label('name', 'Название:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                {!! Form::submit('Создать новый тэг', ['class' => 'btn btn-success btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div> <!-- end of .col-ms-3 -->

@stop