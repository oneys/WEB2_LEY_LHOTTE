@extends('layouts.app')
<<<<<<< HEAD
=======

>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
@section('content')
    <h1>Article n° {{ $article->id }} - <a href="{{route('articles.edit', $article->id)}}">Editer</a> </h1>

    <h2>{{ $article->title }}</h2>
    <h3>Auteur: {{ $article->user->name }}</h3>
    <p>{{ $article->description }}</p>

@endsection