@extends('layouts.master')

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
		<p>{{ $item->slug }}</p>
		<p>{{ $item->user_id }}</p>
		<br>
	</div>							
</div>

@stop