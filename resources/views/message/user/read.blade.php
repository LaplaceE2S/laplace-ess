@extends('layouts.userLayout')
@section('title')
Lire messages
@endsection
@section('content')

<div class='col-12'>
<div class='col col-md-8  readannonce'>
    <h1>Suivie de la conversation</h1>
        <p>
        {!! Form::open(array('route' => 'answer_form_message', 'method' => 'POST')) !!}
        {!! Form::hidden('dest', $dest) !!}
        {{ Form::submit('Répondre', ['class' => 'btn btn-outline-success my-2 my-sm-0 href']) }}
        </p>
    @if(isset($messages))
    @foreach($messages as $message)
        <i>{{$message->structure}} le {{$message->created_at}}</i>
        <p>objet : {{$message->objet}}</p>
        <p>{{$message->message}}</p>
        <hr>
    @endforeach
    @endif
    </div>
</div>

@endsection