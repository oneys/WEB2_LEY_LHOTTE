@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="col-md-12 text-center">
                        <h1>Formulaire de BAP</h1>
                    </div>


                    {!! Form::open(array(
                            'route' => 'bap.store',
                            ))
                        !!}


                            <div class="form-group">

                                {!! Form::text('title', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Titre de porjet' ])
                                !!}
                            </div>




                        <div class="form-group">

                            {!! Form::text('fonctionCHEF', '',
                            ['class' => 'form-control',
                            'placeholder' => 'Fonction du chef' ])
                            !!}

                            </div>













                    <div class="form-group">

                        {!! Form::text('NomPrenomCHEF', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Nom et prénom du commanditaire' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('adresseCHEF', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Adresse du commanditaire' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('emailCHEF', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Email du commanditaire' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('telCHEF', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Téléphone du commanditaire' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('fonctionCON', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Fonction du contact' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('NomPrenomCON', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Nom et prénom du contact' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('adresseCON', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Adresse du contact' ])
                        !!}
                    </div>

                    <div class="form-group">

                        {!! Form::text('emailCON', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Email du contact' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('telCON', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Téléphone du contact' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('social', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Raison social de l\'entreprise ...' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('type', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Type de projet' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('raison', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Raison du projet' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('contexte', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Contexte de la demande' ])
                        !!}
                    </div>


                    <div class="form-group">

                        {!! Form::text('objectif', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Objectif du projet' ])
                        !!}
                    </div>

                    <div class="form-group">

                        {!! Form::text('contraintes', '',
                        ['class' => 'form-control',
                        'placeholder' => 'Contraintes' ])
                        !!}
                    </div>

                    {!! Form::submit('Soumettre le projet',
                            ['class' => 'btn btn-primary'])
                        !!}

                    {!! Form::close() !!}







                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">


                                    <a class="btn btn-default" href="{{ route('bap.index') }}">Retour aux articles</a>

                            </div>
                        </div>


                </div>
            </div>
        </div>
</div>
@endsection
