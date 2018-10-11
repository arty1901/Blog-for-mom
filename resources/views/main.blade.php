<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

    <body>
    @include('partials._nav')

    <div class="container main_content">
        @include('partials._messages')

        @yield('content')

        @include('partials._footer')
    </div>

    @yield('additional_content')

    @include('partials._javaScripts')

    @yield('scripts')
    </body>
</html>