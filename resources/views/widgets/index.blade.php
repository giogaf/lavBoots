
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
				</div>
			</div>
			@endforeach	
			</div>							
	</div>

@stop