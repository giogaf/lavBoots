<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    //
    public function widgetData()
    {
    	$data['datos'] = DB::table('widgets')
    						->select('id','nombre','created_at')
    						->get();
    	return json_encode($data);
    }
}
