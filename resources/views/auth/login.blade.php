@extends('layouts.app')

@section('content')
	<h3>Ingreso de usuario</h3>
	{{ Form::open(['url'=>'auth/login']) }}

	<div class="form-group">
		{{ Form::label('Email') }}
		{{ Form::text('email',null,['class'=>'form-control']) }}
	</div>	
	<div class="form-group">
		{{ Form::label('Password') }}
		{{ Form::text('pass',null,['class'=>'form-control']) }}
	</div>	
	<div class="form-group">
		{{ Form::submit('Ingresar') }}
	</div>	
	{{ Form::close() }}

@stop