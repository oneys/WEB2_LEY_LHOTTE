@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1>Edit article n° {{$post->id}}</h1>

    {!! Form::open(['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::select('user_id', $users, $post->user_id) !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
=======


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
>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
        {!! Form::textarea('description', $post->description, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
<<<<<<< HEAD
        {!! Form::submit('Envoyer') !!}
    </div>


    {!! Form::close() !!}

=======
        <br>
        {!! Form::submit('Envoyer') !!}
    </div>

    {!! Form::close() !!}


>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
<<<<<<< HEAD
=======


>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
@endsection