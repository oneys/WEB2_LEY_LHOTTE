@extends('layouts.app')

@section('content')
    <h1>Edit article n° {{$post->id}}</h1>

    {!! Form::open(['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::select('user_id', $users, $post->user_id) !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('description', $post->description, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Envoyer') !!}
    </div>


    {!! Form::close() !!}

    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
@endsection