@extends('main')

@section('title', '| Методическая копилка')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Методическая копилка</h1>
        </div>
    </div>
        <div class="row gap-grid">
                <div class="accordion useful-links" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Библиотеки
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="list-group list-group-flush book-list">
                                    <li class="list-group-item"><a href="http://www.klex.ru" target="_blank">Архив книг</a></li>
                                    <li class="list-group-item"><a href="http://knigosite.org" target="_blank">Книгосайт</a></li>
                                    <li class="list-group-item"><a href="http://www.books.kostyor.ru" target="_blank">Сказки и рассказы</a></li>
                                    <li class="list-group-item"><a href="http://elkniga.ucoz.ru" target="_blank">Электронная книга</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    В помощь педагогам, психологам и родителям
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="list-group book-list list-group-flush">
                                    <li class="list-group-item"><a href="http://games-for-kids.ru" target="_blank">Веселые уроки</a></li>
                                    <li class="list-group-item"><a href="http://bukvar-online.ru/" target="_blank">Букварь онлайн</a></li>
                                    <li class="list-group-item"><a href="http://www.psylesson.ru" target="_blank">Уроки психологии в школе</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Журналы по психологии и менеджменту в образовании
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="list-group book-list list-group-flush">
                                    <li class="list-group-item"><a href="http://vestnikedu.ru" target="_blank">Вестник Образования</a></li>
                                    <li class="list-group-item"><a href="http://www.voppsy.ru" target="_blank">Вопросы психологии</a></li>
                                    <li class="list-group-item"><a href="http://psyjournal.ru" target="_blank">Журнал практической психологии и психоанализа</a></li>
                                    <li class="list-group-item"><a href="http://www.menobr.ru" target="_blank">Менеджер образования</a></li>
                                    <li class="list-group-item"><a href="http://psyjournals.ru" target="_blank">Портал психологический изданий</a></li>
                                    <li class="list-group-item"><a href="http://www.psyedu.ru" target="_blank">Психологическая наука и образование</a></li>
                                    <li class="list-group-item"><a href="http://www.psyh.ru" target="_blank">Психология на каждый день</a></li>
                                    <li class="list-group-item"><a href="http://psy.1september.ru" target="_blank">Школьный психолог</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Профориентация
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="list-group book-list list-group-flush">
                                    <li class="list-group-item"><a href="http://metodkabi.net.ru" target="_blank">Методический кабинет профориентации</a></li>
                                    <li class="list-group-item"><a href="http://www.proforientator.ru" target="_blank">Профориентация: кем стать?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @include('partials._widget')
        </div>
@stop

@section('script')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/calendar.js"></script>
    <script>
        var cal = CALENDAR();
        cal.init();
    </script>
@stop