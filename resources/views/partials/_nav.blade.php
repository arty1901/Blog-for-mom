<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">Мой Блог</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto main_menu">
                <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item {{ Request::is('blog') ? "active" : "" }}">
                    <a class="nav-link" href="/blog">Блог</a>
                </li>
                <li class="nav-item {{ Request::is('usefulLinks') ? "active" : "" }}">
                    <a class="nav-link" href="/usefulLinks">Методическая копилка</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
                    <a class="nav-link" href="/about">Аттестация</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
                    <a class="nav-link" href="/contact">Обратная связь</a>
                </li>
            </ul>
            @guest
                <ul class="navbar-nav navbar-right auth-menu auth-menu-logout">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Регистрация</a>
                    </li>
                </ul>
            @endguest
            @auth
                <ul class="navbar-nav navbar-right auth-menu auth-menu-login">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello, admin!
                        </a>
                        <div class="dropdown-menu" id="auth_dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('posts.index') }}">{{ __('Posts') }}</a>
                            <a class="dropdown-item" href="{{ route('categories.index') }}">{{ __('Catefories') }}</a>
                            <a class="dropdown-item" href="{{ route('tags.index') }}">{{ __('Tags') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

                    {{--<ul class="navbar-nav navbar-right">--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--Hello, {{ Auth::user()->name }}--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu" id="auth_dropdown" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="/profile">Профиль</a>--}}
                                {{--<div class="dropdown-divider"></div>--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">--}}
                                    {{--Выход--}}
                                {{--</a>--}}
                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" >--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
            @endauth
        </div>
    </div>
</nav>