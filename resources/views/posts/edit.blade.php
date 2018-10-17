@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=n1e80njp4ao8h4uz3mypfphlvx63mxyg1klhfclrliikft5e"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink link image lists charmap print preview'
        });
    </script>

@endsection

@section('content')

        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="row block-common-style">
            <div class="col-md-8">
                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('slug', 'Slug:') }}
                    {{ Form::text('slug', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('category_id', "Category:") }}
                    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('tags', 'Tags:') }}
                    {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('body', "Body:") }}
                    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>	<!-- end of .row (form) -->
        {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script>
        $(document).ready(function() {
            $('.select2-multi').select2();
        });
    </script>


@endsection