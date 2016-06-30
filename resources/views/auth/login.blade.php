@extends('layouts.app')

@section('content')
	<div>
		{!! Breadcrumb::withLinks(['Home' => '/', 'Login']) !!}
	</div>
	<div class="panel panel-default">	
		<div class="panel-heading"> Ingreso </div>
			<div class="panel-body">
			@include('errors.list')
				<form class="form-horizontal" role="form" method="POST" action="/auth/login">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						{!! Form::label('email','usuario',['class' => 'col-md-4 control-label']) !!}
						<div class="col-md-6">
						{!! Form::text('email',null,['class' => "form-control ",'value' => old('email') ]) !!}
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">							
						<div class="col-md-6 col-md-offset-4">
							<input type="checkbox" name="remember"> Recordar
						</div>
					</div>

					<div class="form-group">							
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary" >Ingresar</button>												
						</div>
					</div>
				</form>				
				<br>
				<a href="auth/register"  class=" col-md-offset-4">Registrarse</a>
				<br><br>
				<a href="/password/email" class=' col-md-offset-4'>Recuperar password</a>
			</div>			

				
			</div>
	</div>

@stop