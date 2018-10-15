@extends('main')

@section('title', '| Аттестация')

@section('stylesheets')
    {{--LightGallery--}}
    <link type="text/css" rel="stylesheet" href="css/lightGallery.min.css" />
@stop

@section('content')
    <div class="row block-common-style pages-header">
        <div class="col-md-12">
            <h1>Аттестационная страница</h1>
        </div>
    </div>
    <div class="row gap-grid">
        <div class="attestation">
            <div class="attestation-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Наименование</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Чайбар Лариса Лангыевна</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Высшее образование, ГОУ ВПО "Хакасский государственный университет им. Н.Ф. Катанова", 2006г.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>ГБОУ РТ "СОШ №10 для детей с ОВЗ".</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Педагог-психолог, учитель индивидуального обучения.</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Общий стаж - 31год, стаж педагогической работы - 30 лет.</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>5 лет.</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Первая категория, Приказ МОН РТ №1251-д от 31.10.2014г.
                                "Об установлении соответствия уровня квалификации требованиям,
                                предъявляемым в первой, высшей квалификационной категории"</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Высшая категория.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <ul class="nav nav-pills mb-3 categories-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1.Продуктивность психолого-педагогического сопровождения образовательного процесса</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2.Продуктивность личного вклада педагогического работника в повышение качества образования</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @include('partials._attestationCategoryOne')
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @include('partials._attestationCategoryTwo')
                </div>
            </div>
        </div>
        @include('partials._widget')
    </div>
@endsection
