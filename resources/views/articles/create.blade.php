@extends('layouts.app')

@section('content')
    <h1>Formulaire </h1>

    {!! Form::open(['url' => route('articles.store'), 'method' => 'POST']) !!}
    {{ csrf_field() }}
    {!! Form::select('user_id', $users) !!}
    <br>
    {!! Form::text('title') !!}
    <br>
    {{ Form::textarea('description') }}
    <br>
    {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection