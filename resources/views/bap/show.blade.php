@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('errors.message')
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h3>{{ $bap->title }}</h3>Créer le
                        : {{ $bap->created_at }}</div>

                    <div class="text-center">
                        <h1><u>A propos du commanditaire</u></h1>
                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Fonction du commanditaire</h3>
                            <p>{{ $bap->fonctionCHEF }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Nom et Prénom du commanditaire</h3>
                            <p>{{ $bap->NomPrenomCHEF }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Adresse du commanditaire</h3>
                            <p>{{ $bap->adresseCHEF }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Email du commanditaire</h3>
                            <p>{{ $bap->emailCHEF }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Téléphone du commanditaire</h3>
                            <p>{{ $bap->telCHEF }}</p>
                        </div>

                    </div>

                    <div class="text-center">
                        <h1><u>A propos du contact</u></h1>
                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Fonction du contact</h3>
                            <p>{{ $bap->fonctionCON }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Nom et Prénom du contact</h3>
                            <p>{{ $bap->NomPrenomCON }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Adresse du contact</h3>
                            <p>{{ $bap->adresseCON }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Email du contact</h3>
                            <p>{{ $bap->emailCON }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Téléphone du contact</h3>
                            <p>{{ $bap->telCON }}</p>
                        </div>

                    </div>


                    <div class="text-center">
                        <h1><u>Le projet</u></h1>
                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Raison sociale</h3>
                            <p>{{ $bap->social }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Type de demande</h3>
                            <p>{{ $bap->type }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Raison de la demande</h3>
                            <p>{{ $bap->raison }}</p>
                        </div>

                    </div>


                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Contexte de la demande</h3>
                            <p>{{ $bap->contexte }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Objectifs de la demande</h3>
                            <p>{{ $bap->objectif }}</p>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Contraintes particulières</h3>
                            <p>{{ $bap->contraintes }}</p>
                        </div>

                    </div>




                    <!--  <a class="btn btn-default" href="{{ route('bap.index') }}">Retour aux articles</a> -->


                </div>

            </div>
        </div>
    </div>

@endsection