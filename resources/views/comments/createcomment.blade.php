@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('errors.message')
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter un commentaire</div>
                    <div class="panel-body">
                        {!! Form::open(array(
                            'route' => 'comment.store',
                            'method' => 'POST'
                            ))
                        !!}

                        <div class="form-group">
                            {!! Form::label('content', 'Commentaire') !!}
                            {!! Form::textarea('content', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Commentaire'
                                ])
                            !!}
                        </div>

                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Publier le commentaire',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}
                        <a class="btn btn-default" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection