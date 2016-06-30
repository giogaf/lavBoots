@extends('layouts.app')

@section('content')



<div class="col-md-8 col-md-offset-2">

  {!! Breadcrumb::withLinks(['Home' => '/', 'Cambiar Password']) !!}
                    
  <div class="panel panel-default">
    <div class="panel-heading">Cambiar Password</div>
    <div class="panel-body">
                              
    @include('errors.list')

    <form class="form-horizontal" role="form" method="POST" action="/password/reset">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
    <label class="col-md-4 control-label">Correo electrónico</label>
    <div class="col-md-6">
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label">Password</label>
    <div class="col-md-6">
    <input type="password" class="form-control" name="password">
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label">Confirmar Password</label>
    <div class="col-md-6">
    <input type="password" class="form-control" name="password_confirmation">
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
    <button type="submit" class="btn btn-primary">
      Cambiar Password
    </button>
    </div>
    </div>

    </form>

    </div>
  </div>
</div>

  
@endsection