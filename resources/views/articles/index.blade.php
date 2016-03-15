@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1>LISTE DES ARTICLES</h1>
                        <hr>

                        @foreach($posts as $post)
                            <h2>{{ $post->title  }}</h2>
                            <p>{{ $post->description}}</p>
                            <a href="{{route('articles.show', $post->id)}}">
                                <button>
                                    Voir l'article
                                </button>
                            </a>

                            @if(Auth::check() && Auth::user()->id == $post->user_id)

                                <a href="{{route('articles.edit', $post->id)}}">
                                    <button>
                                        Editer
                                    </button>
                                </a>

                            <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button>Supprimer</button>
                            </form>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
