@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

                   LA PAGE D'ACCUEIL

            {!! Form::open(array('url' => '/post, 'method' => 'POST')) !!}
            {{-- Champs du formulaire --}}

            {!! Form::submit('Envoyer') !!}
            {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection
