@extends('layouts.layout')

@section('title')
contact
@endsection

@section('content')

</br>
    <div class="container">

        <div class="panel panel-info">

            <div class="panel-heading">Contactez-nous</div>

            <div class="panel-body"> 

                {!! Form::open(['url' => 'contact']) !!}

                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">

                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}

                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('structure') ? 'has-error' : '' !!}">

                    {!! Form::text('structure', null, ['class' => 'form-control', 'placeholder' => 'Votre structure']) !!}

                    {!! $errors->first('structure', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">

                    {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => 'Votre numéro de téléphone']) !!}

                    {!! $errors->first('tel', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">

                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}

                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">

                        {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}

                        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}

                    </div>

                    {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}

                {!! Form::close() !!}

            </div>

        </div>

    </div>
</br>

@endsection