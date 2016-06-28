@extends('layouts.app')
@section('content')
@forelse($tareas as $tarea)
	
	<div class="panel panel-default">
		<div class="panel-heading">
			{{ $tarea->nombre }}
		</div>

		<div class="panel-body">
			{{ Form::open(['url'=>'/tareas/'.$tarea->id,'method'=>'delete']) }}
			{{ Form::submit('Eliminar',['class'=>'btn btn-danger btn-xs']) }}
			{{ Form::close() }}
		</div>
	</div>
@empty
	<h3>No existe Tareas</h3>
@endforelse
@stop