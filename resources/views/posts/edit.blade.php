@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=n1e80njp4ao8h4uz3mypfphlvx63mxyg1klhfclrliikft5e"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code'
        });
    </script>

@endsection

@section('content')

    <div class="row">
        <form action="/profile" method="post" enctype="multipart/form-data">
            <label class="form-control" for="user_name">Введите имя</label>
            <input class="form-control" type="text" value="{{ $user->name }}" id="user_name">
            <label for="user_age">Введите возраст</label>
            <input type="text" value="{{ $user->age }}">
        </form>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script>
        $(document).ready(function() {
            $('.select2-multi').select2();
        });
    </script>


@endsection