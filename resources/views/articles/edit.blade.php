@extends('layouts.app')

@section('content')


    <h1> EDIT </h1>


    <div class="form-group">
        {!! Form::open(['route' => ['articles.update', $post->id], 'method'=> 'PUT']) !!}
        {{ csrf_field() }}
    </div>

    <div class="form-group">
        {!! Form::select('user_id', $users, $post->user_id) !!}
    </div>
        <br>
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    <div class="form-group">
        <br>
        {!! Form::textarea('description', $post->description, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <br>
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