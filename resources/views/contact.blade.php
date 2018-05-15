@extends('layouts.layout')

@section('title')
contact
@endsection

@section('content')

<br />

<h1 class="text-center">Contactez-nous</h1>

<br />

<div class="contact">
    {!! Form::open(['url' => 'contact']) !!}
    <div class="row">
        <div class="col-sm-8">
            <div class="panel">
                <h3>Par message</h3>
                    <div class="panel-body clearfix">
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 no-padding-bottom">
        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">

            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}

            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}

        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 no-padding-bottom">
        <div class="form-group {!! $errors->has('structure') ? 'has-error' : '' !!}">

            {!! Form::text('structure', null, ['class' => 'form-control', 'placeholder' => 'Votre structure']) !!}

            {!! $errors->first('structure', '<small class="help-block">:message</small>') !!}

        </div>
        </div>

        <div class="col-xs-12 col-sm-6 no-padding-bottom">
        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">

            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}

            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}

        </div>
        </div>
    </div>

    <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">

        {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}

        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}

    </div>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-success pull-right']) !!}

        {!! Form::close() !!}

</div>
</div>
</div>


     <div class="col-sm-4">
        <div class="call-back">
            <h3>Par téléphone</h3>
                <p class="gray">Laissez nous votre numéro de téléphone<br />et nous vous rappellerons</p>

    {!! Form::open(['url' => 'tel_contact']) !!}            
    <div class="input-group {!! $errors->has('tel') ? 'has-error' : '' !!}">
    {!! Form::tel('telephone', null, ['class' => 'form-control', 'placeholder' => 'Votre téléphone']) !!}

    {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}

        <span class="input-group-btn">
        {!! Form::submit('ok', ['class' => 'btn btn-success pull-right']) !!}
        </span>
    </div>
{!! Form::close() !!}

                    <br />
                    <h3>Par courrier</h3>
                    <p class="gray">E2S Pays de Vannes<br /> 47 Rue de Ferdinand Le Dressay<br />BP 74<br />56002 VANNES cedex</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection