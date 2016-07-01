@extends('layouts.app')

@section('title')
{{ $item->nombre }}
@endsection


@section('content')
		<div>
		{!! Breadcrumb::withLinks(['Home' => '/', 'Widgets']) !!}
	</div>
<div class="panel panel-default">	
	<div class="panel-heading"> Widgets </div>
	<div class="panel-body">			
		<h3>{{ $item->nombre }}</h3>
		<p><strong>ID:</strong> {{ $item->user_id }}</p>
		<p> <strong>Nombre:</strong> {{ $item->slug }}</p>
			<div class="btn­group btn­group­justified" role="group" aria­label="..."> 
				
				{{-- @include('widgets.btn_action') --}}
				{{-- <a href="/widgets/{{ $item->id }}-{{ $item->slug}}" class="btn btn-info">Ver</a> --}}
				{{-- @include('widgets.btn_action') --}}
				<a href="/widgets/{{ $item->id }}/edit" class="btn btn-primary">Editar</a>
				<button class="btn btn-danger" id ='btn_delete'>Eliminar</button>

				{!! Form::open(['route' => ['widgets.destroy',$item->id],'method' => 'delete','id' => 'form_delete']) !!}

				{!! Form::close() !!}
				<br>	
				<a href="/widgets" class="btn btn-info">Atrás</a>
			</div>	
	</div>							
</div>

@stop

@section('scripts')
@include('widgets.script')
@stop