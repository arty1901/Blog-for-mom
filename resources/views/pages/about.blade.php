@extends('main')

@section('title', '| Аттестация')

@section('stylesheets')

    {{--LightGallery--}}
    <link type="text/css" rel="stylesheet" href="css/lightGallery.min.css" />

@stop

@section('content')
    <div class="container attestation-block">
        <div class="container">
            <div class="container category-block">
                <h3>Достижения</h3>
                <div id="lightgallery_1" class="row justify-content-between">
                    @for($i = 1;  $i <= 3; $i++ )
                        <a href="images/project_images/attestation/rewards/{{ $i }}.jpg">
                            <div class="col-md-4">
                                <img src="images/project_images/attestation/rewards/{{ $i }}.jpg"/>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

            <div class="container category-block">
                <h3>Профессиональный рост педагога</h3>
                <div id="lightgallery_2" class="row justify-content-between">
                    @for($i = 1;  $i <= 5; $i++ )
                        <a href="images/project_images/attestation/qualification/{{ $i }}.jpg">
                            <div class="col-md-4">
                                <img src="images/project_images/attestation/qualification/{{ $i }}.jpg"/>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

            <div class="container category-block">
                <h3>Обобщение и распространение педагогического опыта в рамках курсов повышения квалификации: открытые уроки, мастер-классы</h3>
                <div id="lightgallery_3" class="row justify-content-between">
                    @for($i = 1;  $i <= 11; $i++ )
                        <a href="images/project_images/attestation/lection/{{ $i }}.jpg">
                            <div class="col-md-4">
                                <img src="images/project_images/attestation/lection/{{ $i }}.jpg"/>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

            <div class="container category-block">
                <h3>Экспертная деятельность</h3>
                <div id="lightgallery_4" class="row justify-content-between">
                    @for($i = 1;  $i <= 4; $i++ )
                        <a href="images/project_images/attestation/expert/{{ $i }}.jpg">
                            <div class="col-md-4">
                                <img src="images/project_images/attestation/expert/{{ $i }}.jpg"/>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

            <div class="container category-block">
                <h3>Выступления на научно-практических конференциях, педагогических чтениях, фестивалях</h3>
                <div id="lightgallery_5" class="row justify-content-between">
                    @for($i = 1;  $i <= 8; $i++ )
                        <a href="images/project_images/attestation/conferation/{{ $i }}.jpg">
                            <div class="col-md-4">
                                <img src="images/project_images/attestation/conferation/{{ $i }}.jpg"/>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/lightgallery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <script src="js/lg-thumbnail.min.js"></script>
    <script src="js/lg-fullscreen.min.js"></script>
    <script src="js/lg-hash.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightgallery_1").lightGallery({
                galleryId: 1
            });
            $("#lightgallery_2").lightGallery({
                galleryId: 2
            });
            $("#lightgallery_3").lightGallery({
                galleryId: 3
            });
            $("#lightgallery_4").lightGallery({
                galleryId: 4
            });
            $("#lightgallery_5").lightGallery({
                galleryId: 5
            });

        });
    </script>
@endsection