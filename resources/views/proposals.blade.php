{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('companies_id', 'Companies_id:') !!}
			{!! Form::text('companies_id') !!}
		</li>
		<li>
			{!! Form::label('frequence', 'Frequence:') !!}
			{!! Form::text('frequence') !!}
		</li>
		<li>
			{!! Form::label('heure', 'Heure:') !!}
			{!! Form::text('heure') !!}
		</li>
		<li>
			{!! Form::label('debut', 'Debut:') !!}
			{!! Form::text('debut') !!}
		</li>
		<li>
			{!! Form::label('fin', 'Fin:') !!}
			{!! Form::text('fin') !!}
		</li>
		<li>
			{!! Form::label('skills_id', 'Skills_id:') !!}
			{!! Form::text('skills_id') !!}
		</li>
		<li>
			{!! Form::label('is_valid', 'Is_valid:') !!}
			{!! Form::text('is_valid') !!}
		</li>
		<li>
			{!! Form::label('expiration', 'Expiration:') !!}
			{!! Form::text('expiration') !!}
		</li>
		<li>
			{!! Form::label('cout_horaire', 'Cout_horaire:') !!}
			{!! Form::text('cout_horaire') !!}
		</li>
		<li>
			{!! Form::label('mois', 'Mois:') !!}
			{!! Form::text('mois') !!}
		</li>
		<li>
			{!! Form::label('cout_total', 'Cout_total:') !!}
			{!! Form::text('cout_total') !!}
		</li>
		<li>
			{!! Form::label('lieu', 'Lieu:') !!}
			{!! Form::text('lieu') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}