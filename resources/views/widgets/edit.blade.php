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
	@include('widgets.form')
	<a href="/widgets/{{ $item->id }}-{{ $item->slug}}" class="btn btn-info">Atrás</a>		
	</div>					
</div>
@stop