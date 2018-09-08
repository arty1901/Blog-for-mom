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
            <div class="col-4 widget-block">
                <div class="container">
                    <h4 class="widget-title"><span>Направления работы</span></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Психологическая диагностика</li>
                        <li class="list-group-item">Коррекционно-развивающая деятельность</li>
                        <li class="list-group-item">Консультативная и профилактическая деятельность</li>
                        <li class="list-group-item">Организационно-методическая работа</li>
                    </ul>
                </div>
                <div class="container">
                    <h4  class="widget-title"><span>Консультация</span></h4>
                    <div class="container info_block">
                        <div class="container">
                            <img src="images/project_images/email_image.png" width="50px" height="50px" alt="email" name="contact_email">
                            <label for="contact_email" class="align-middle">Email</label>
                        </div>
                        <span>larc66@yandex.ru</span>
                    </div>
                    <div class="container info_block">
                        <div class="container">
                            <img src="images/project_images/phone_image.png" width="50px" height="50px" alt="email" name="contact_phone">
                            <label for="contact_phone" class="align-middle">Телефон</label>
                        </div>
                        <span>+7-913-359-00-13</span>
                    </div>
                    <div class="container info_block">
                        <div class="container">
                            <img src="images/project_images/schedudle_image.png" width="50px" height="50px" alt="email" name="contact_schedule">
                            <label for="contact_schedule" class="align-middle">Время приема</label>
                        </div>
                            Пон-Пт С 9:00 до 16:00
                    </div>
                </div>
                <div class="container" id="cal">
                    <div class="header">
                        <span class="left button" id="prev"> &lang; </span>
                        <span class="month-year" id="label"> June 20&0 </span>
                        <span class="right button" id="next"> &rang; </span>
                    </div>
                    <table id="days">
                        <td>sun</td>
                        <td>mon</td>
                        <td>tue</td>
                        <td>wed</td>
                        <td>thu</td>
                        <td>fri</td>
                        <td>sat</td>
                    </table>
                    <div id="cal-frame">
                        <table class="curr">
                            <tbody>
                            <tr><td class="nil"></td><td class="nil"></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                            <tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td class="today">11</td><td>12</td></tr>
                            <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
                            <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
                            <tr><td>27</td><td>28</td><td>29</td><td>30</td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('scripts')

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/calendar.js"></script>
    <script>
        var cal = CALENDAR();

        cal.init();
    </script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>

@stop
