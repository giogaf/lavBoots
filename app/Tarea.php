<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //
    /**
     * 
     */
    protected $fillable = ['nombre'];

    public function user()
    {
    	return $this->belongsTo	(User::class);
    }
}
