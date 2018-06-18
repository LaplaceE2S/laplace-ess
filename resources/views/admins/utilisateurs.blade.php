@extends('layouts.adminLayout')

@section('title', 'Liste des utilisateurs')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des utilisateurs</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Structure</th>
						<th>Rôle</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($utilisateurs as $utilisateur)
				
						<tr>
							<td>{{ $utilisateur->id }}</td>
							<td class="text-primary"><strong>{{  $utilisateur->structure}}</strong></td>
							<td>{{ $utilisateur->type }}</td>
							<td>{!! link_to_route('voir.profilStructure', 'Voir', [$utilisateur->id], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('editProfil', 'Modifier', [$utilisateur->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['deleteView', $utilisateur->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
			
				@endforeach
	  			</tbody>
			</table>
		</div>
		{!! link_to_route('profil', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
	
	</div>
@endsection