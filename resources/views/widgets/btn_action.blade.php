
<a href="/widgets/{{ $item->id }}/edit" class="btn btn-primary">Editar</a>
<button class="btn btn-danger" id ='btn_delete'>Eliminar</button>

{!! Form::open(['route' => ['widgets.destroy',$item->id],'method' => 'delete','id' => 'form_delete']) !!}

{!! Form::close() !!}