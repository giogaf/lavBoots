@extends('layouts.app')

@section('content')

{{ Form::open(['route'=>'tareas.store']) }}
<div class="form-group">
	{{ Form::label('Nombre tarea','Nombre tarea') }}
	{{ Form::text('nombre',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Agregar tarea',['class'=>'btn btn-primary']) }}
</div>

{{ Form::close() }}


@stop