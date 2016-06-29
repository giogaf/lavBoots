@extends('layouts.app')

@section('content')
	<h3>Registro de usuario</h3>
	{{ Form::open(['url'=>'auth/register']) }}
	<div class="form-group">
		{{ Form::label('Nombre') }}
		{{ Form::text('name',null,['class'=>'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('Email') }}
		{{ Form::text('email',null,['class'=>'form-control']) }}
	</div>	
	<div class="form-group">
		{{ Form::label('Password') }}
		{{ Form::text('password',null,['class'=>'form-control']) }}
	</div>	
	<div class="form-group">
		{{ Form::label('Confirmar Password') }}
		{{ Form::text('password_confirmation',null,['class'=>'form-control']) }}
	</div>	
	<div class="form-group">
		{{ Form::submit('Registrar') }}
	</div>	
	{{ Form::close() }}

@stop