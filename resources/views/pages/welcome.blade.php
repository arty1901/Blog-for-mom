@extends('main')

@section('title', '| Home page')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/project_images/carusel1_img.jpg" height="700px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/project_images/carusel2_img.jpg" height="700px" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/project_images/carusel3_img.jpg" height="700px" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="row profile_block">
            <div class="col-4">
                <img src="images/project_images/profile_image.png" height="200px" width="200px" alt="" class="rounded mx-auto d-block">
            </div>
            <div class="col-8">
                <h2 class="text-left">Педагог-психолог</h2>
                <p>Высшей квалификационной категории
                муниципального общеобразовательного учреждения средней общеобразовательной школы</p>
                <h2 class="text-center">Чайбар Лариса Лангыевна</h2>
            </div>
        </div>

        {{--Newest posts--}}
        <div class="row">
            <div class="col-8 news-block">
                <div class="container pageHeading">
                    <h2 class="pageHeading-title">Новые записи</h2>
                    <span><i class="far fa-calendar-alt"></i> {{ date('l, F jS, Y') }}</span>
                </div>
                <hr>
                <div class="mdContent">
                    @foreach($posts as $post)
                        <div class="list-item">
                            <article>
                                <div class="post">
                                    <div class="container post-header">
                                        <a href="{{ url('blog/'.$post->slug) }}"><h3>{{ $post->title }}</h3></a>
                                        <span>Создан: {{date('M j, Y', strtotime($post->updated_at))}}</span>
                                    </div>
                                    <div class="post-content">
                                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                                    </div>
                                    <hr>
                                    <div class="container post-meta">
                                        <a href="{{ url('blog/'.$post->slug) }}">Читать далее <i class="fas fa-chevron-right"></i></a>
                                        <span><i class="far fa-comment"></i> {{ $post->comments()->count() }}
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
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('partials._widget')
        </div>
    @endsection

@section('scripts')

    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>

@stop
