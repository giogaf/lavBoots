<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    //
    /**
     * mass assignable
     */
    protected $fillable = ['nombre','slug','user_id'];    

    public function user()
    {
    	# code...
    	$this->belongTo('App\User');
    }
}