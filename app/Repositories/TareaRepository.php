<?php

namespace App\Repositories;

use App\User;
use App\Tarea;

class TareaRepository
{

	/**
	 * 
	 */

	public function paraUsuario(User $usuario)
	{
		return Tarea::where('user_id',$usuario->id)
						->orderBy('created_at','asc')
						->get();
	}
}