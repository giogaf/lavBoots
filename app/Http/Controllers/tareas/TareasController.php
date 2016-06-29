<?php

namespace App\Http\Controllers\tareas;

use Illuminate\Http\Request;
use App\Tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TareaRepository;

class TareasController extends Controller
{

    protected $tareas;

    /**
     * Funcion para autencicacion de usuarios
     */
    public function __construct(TareaRepository $t)
    {
        $this->middleware('auth');

        $this->tareas = $t;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $tareas = Tarea::all();
        // $tareas = Tarea::where('user_id',$request->user()->id)->get();
        
        // return view('tareas.index',['tareas'=>$tareas]);
        return view('tareas.index',[
            'tareas' => $this->tareas->paraUsuario($request->user())
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request['nombre']);
        $this->validate($request,['nombre'=>'required|max:255']);

        $request->user()->tareas()->create([
        'nombre'=>$request->nombre,
            ]);
        // $tarea = new Tarea;
        // $tarea->nombre = $request->nombre;
        // $tarea->save();
        // dd($tarea);
        return redirect()->route('tareas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id);  
        $this->authorize('destroy',$tarea);
              
        $tarea->delete();
        return redirect()->action('tareas\TareasController@index');
    }
}
