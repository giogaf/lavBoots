
		@if(isset($item->id) )
		{!! Form::model($item, array('route' => array('widgets.update', $item->id),'method' => 'PUT','class' => "form-horizontal" ) ) !!}
		@else
		{!! Form::open(['route' => 'widgets.store','class' => "form-horizontal"]) !!}
		
		@endif		

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