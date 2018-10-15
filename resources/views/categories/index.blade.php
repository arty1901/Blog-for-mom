@extends('main')

@section('title', '| Все категории')

@section('content')

    <div class="row block-common-style">
        <div class="col-md-9">
            <h1>Категории</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Категория</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <h2>Новая категория</h2>
                {!! Form::label('name', 'Название категории:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                {!! Form::submit('Создать новую категорию', ['class' => 'btn btn-success btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop