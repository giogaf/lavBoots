@extends('layouts.app')

@section('title')
	Nuevo Widget
@endsection

@section('content')

<div>
	{!! Breadcrumb::withLinks(['Home' => '/', 'Widgets' => '/widgets']) !!}
</div>
<div class="panel panel-default">	
	<div class="panel-heading"> Crear Nuevo Widget </div>
	<div class="panel-body">
	@include('errors.list')
		<form class="form-horizontal" role="form" method="POST" action="/widgets">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				{!! Form::label('nombre','Título Widget',['class' => 'col-md-4 control-label']) !!}
				<div class="col-md-6">
				{!! Form::text('nombre',null,['class' => "form-control "]) !!}
				</div>
			</div>

			<div class="form-group">							
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary" >Guardar</button>												
				</div>
			</div>

		</form>				
	</div>					
</div>
@stop