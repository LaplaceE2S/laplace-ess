
@extends('layouts.adminLayout')
@section('title')
<h2>Catégorie des pages</h2>
@endsection
@section('content')
	<ul>
		<li>
			<h3>Créer une nouvelle catégorie</h3>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('Nom catégorie') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
		<li>
			<h3>Selection d'une catégorie existante</h3>
		</li>
	</ul>
{!! Form::close() !!}
@endsection