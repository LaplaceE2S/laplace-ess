{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('siret', 'Siret:') !!}
			{!! Form::text('siret') !!}
		</li>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('dirigeant', 'Dirigeant:') !!}
			{!! Form::text('dirigeant') !!}
		</li>
		<li>
			{!! Form::label('url', 'Url:') !!}
			{!! Form::text('url') !!}
		</li>
		<li>
			{!! Form::label('ville', 'Ville:') !!}
			{!! Form::text('ville') !!}
		</li>
		<li>
			{!! Form::label('postal', 'Postal:') !!}
			{!! Form::text('postal') !!}
		</li>
		<li>
			{!! Form::label('rue', 'Rue:') !!}
			{!! Form::text('rue') !!}
		</li>
		<li>
			{!! Form::label('telephone', 'Telephone:') !!}
			{!! Form::text('telephone') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('statut', 'Statut:') !!}
			{!! Form::text('statut') !!}
		</li>
		<li>
			{!! Form::label('abonne', 'Abonne:') !!}
			{!! Form::text('abonne') !!}
		</li>
		<li>
			{!! Form::label('budget', 'Budget:') !!}
			{!! Form::text('budget') !!}
		</li>
		<li>
			{!! Form::label('ca', 'Ca:') !!}
			{!! Form::text('ca') !!}
		</li>
		<li>
			{!! Form::label('users_id', 'Users_id:') !!}
			{!! Form::text('users_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}