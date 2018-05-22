{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('question', 'Question:') !!}
			{!! Form::textarea('question') !!}
		</li>
		<li>
			{!! Form::label('reponse', 'Reponse:') !!}
			{!! Form::textarea('reponse') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}