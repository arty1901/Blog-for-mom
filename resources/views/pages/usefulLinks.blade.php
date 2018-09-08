@extends('main')

@section('title', '| Useful Links')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Полезные ссылки</h1>
                <hr>
                <div class="row justify-content-around link-block">
                    <div class="col-md-4 col-1 book-block">
                        <h3>Библиотеки</h3>
                        <ul class="list-group list-group-flush book-list">
                            <li class="list-group-item"><a href="http://www.klex.ru" target="_blank">Архив книг</a></li>
                            <li class="list-group-item"><a href="http://knigosite.org" target="_blank">Книгосайт</a></li>
                            <li class="list-group-item"><a href="http://www.books.kostyor.ru" target="_blank">Сказки и рассказы</a></li>
                            <li class="list-group-item"><a href="http://elkniga.ucoz.ru" target="_blank">Электронная книга</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-1 book-block">
                        <h3>В помощь педагогам, психологам и родителям</h3>
                        <ul class="list-group book-list list-group-flush">
                            <li class="list-group-item"><a href="http://games-for-kids.ru" target="_blank">Веселые уроки</a></li>
                            <li class="list-group-item"><a href="http://bukvar-online.ru/" target="_blank">Букварь онлайн</a></li>
                            <li class="list-group-item"><a href="http://www.psylesson.ru" target="_blank">Уроки психологии в школе</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-1 book-block">
                        <h3>Профориентация</h3>
                        <ul class="list-group book-list list-group-flush">
                            <li class="list-group-item"><a href="http://metodkabi.net.ru" target="_blank">Методический кабинет профориентации</a></li>
                            <li class="list-group-item"><a href="http://www.proforientator.ru" target="_blank">Профориентация: кем стать?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-around link-block">
                    <div class="col-md-5 col-1 book-block">
                        <h3>Журналы по психологии и менеджменту в образовании</h3>
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
            <div class="col-md-4 widget-block">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <h4 class="widget-title"><span>Календарь</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop