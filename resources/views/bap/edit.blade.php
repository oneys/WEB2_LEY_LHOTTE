@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @include('errors.message')
        @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        </div>
        @endif
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier votre article</div>
                    <div class="panel-body">

                    @if(Auth::check()
                    && (Auth::user()->id == $post->user_id
                    || Auth::user()->isAdmin))

                        {!! Form::model($post,
                            array(
                            'route' => array('post.update', $post->id),
                            'method' => 'PUT'
                            ))
                        !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', old('title'), 
                                    ['class' => 'form-control',
                                    'placeholder' => 'Mon titre'
                                    ]) 
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('content', 'Contenu') !!}
                                {!! Form::textarea('content', old('content'), 
                                    ['class' => 'form-control',
                                    'placeholder' => 'Contenu'
                                    ]) 
                                !!}
                            </div>
                        
                    </div>
                    <div class="panel-footer">
                        {!! Form::submit('Publier l\'article',
                            ['class' => 'btn btn-primary'])
                        !!}

                        {!! Form::close() !!}

                        @else
                        
                        <p>Vous n'avez pas les droits nécessaires</p>

                        @endif

                        <a class="btn btn-default" href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection