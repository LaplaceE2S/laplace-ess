@extends('layouts.userLayout')
@section('title')
Créer son profil
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>{{ __("Créer son profil") }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        @csrf
                    <div class="row justify-content-left"><h4>Renseignements sur la structure<h4></div>
                        <!-- label STRUCTURE -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Structure') }}</label>

                            <div class="col-md-6">
                                <input id="structure" type="text" class="form-control{{ $errors->has('structure') ? ' is-invalid' : '' }}" name="structure" value="{{ old('structure') }}" required autofocus>

                                @if ($errors->has('structure'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('structure') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <!-- label STATUT -->
                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Statut') }}</label>

                            <div class="col-md-6">
                                <input id="statut" type="text" class="form-control{{ $errors->has('statut') ? ' is-invalid' : '' }}" name="statut" value="{{ old('statut') }}" required autofocus>

                                @if ($errors->has('statut'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('statut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- label BUDGET -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Budget') }}</label>

                            <div class="col-md-6">
                                <input id="budget" type="text" class="form-control{{ $errors->has('budget') ? ' is-invalid' : '' }}" name="budget" value="{{ old('budget') }}" required autofocus>

                                @if ($errors->has('budget'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('budget') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- label SIRET -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('N° SIRET') }}</label>

                            <div class="col-md-6">
                                <input id="siret" type="text" class="form-control{{ $errors->has('siret') ? ' is-invalid' : '' }}" name="siret" value="{{ old('siret') }}" required autofocus>

                                @if ($errors->has('siret'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('siret') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label ADRESSE-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="rue" type="text" class="form-control{{ $errors->has('rue') ? ' is-invalid' : '' }}" name="rue" value="{{ old('rue') }}" required autofocus>

                                @if ($errors->has('adresse'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label CODE POSTAL-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                            <div class="col-md-6">
                                <input id="postal" type="text" class="form-control{{ $errors->has('postal') ? ' is-invalid' : '' }}" name="postal" value="{{ old('postal') }}" required autofocus>

                                @if ($errors->has('Code postal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Code postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label VILLE-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required autofocus>

                                @if ($errors->has('Ville'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row justify-content-left"><h4>Renseignements sur le responsable de la structure</h4></div>

                        <!-- label NOM-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nameDir" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('Nom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label PRENOM-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('Prénom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Prénom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label TELEPHONE-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autofocus>

                                @if ($errors->has('Téléphone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Téléphone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label EMAIL-->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- label EMAIL-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Site internet') }}</label>

                            <div class="col-md-6">
                                <input id="url" type="email" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required>

                                @if ($errors->has('url'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Label PHOTO-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6" >
                                <img id="avatarUtilisateur" src="./images/avatar_utilisateur.png" alt="avatar Utilisateur"/>
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("Créer son profil") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
