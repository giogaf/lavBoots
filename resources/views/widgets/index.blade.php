
@extends('layouts.app')

@section('title')
	Widgets
@stop

@section('content')
	<div>
		{!! Breadcrumb::withLinks(['Home' => '/', 'Widgets']) !!}
	</div>
	<div class="panel panel-default">	
		<div class="panel-heading"> Widgets </div>
			<div class="panel-body">			
				<div class="form-group">							
					<div class="col-md-offset-5">
						<a href="/widgets/create" class = "btn btn-primary">Nuevo Widget</a>												
					</div>
				</div>	
			@foreach ($items as $item)
			<div class="panel panel-info">	
				<div class="panel-heading"> {{ $item->nombre }}</div>
				<div class="panel-body">			
				{{ $item->id }}-{{ $item->slug }}
				<div class="btn­group btn­group­justified" role="group" aria­label="..."> 
				<a href="/widgets/{{ $item->id }}-{{ $item->slug}}" class="btn btn-info">Ver</a>
				{{-- @include('widgets.btn_action') --}}
				<a href="/widgets/{{ $item->id }}/edit" class="btn btn-primary">Editar</a>
				{{-- <button class="btn btn-danger" id ='btn_delete'>Eliminar</button> --}}

				{!! Form::open(['route' => ['widgets.destroy',$item->id],'method' => 'delete','id' => 'form_delete']) !!}

				{!! Form::close() !!}
				</div>
				</div>
			</div>
			@endforeach	
			</div>							
	</div>
@stop

@section('scripts')
{{-- @include('widgets.script') --}}
@stop