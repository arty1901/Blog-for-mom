@extends('main')

@section('title', '| Обратная связь')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-7 contact-form-block">
            <h1 class="text-center">Обратная связь</h1>
            <hr>
                <form action="{{ url('contact') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Электронная почта:</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subject">Тема сообщения:</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Сообщение:</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Ваше сообщение..."></textarea>
                    </div>

                    <input type="submit" class="button" value="Отправить сообщение">
                </form>
        </div>
    </div>
@endsection