<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Widget;
use Illuminate\Support\Facades\Auth;

class WidgetController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Widget::all();
        return view('widgets.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('widgets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nombre' => 'required|unique:widgets|string|max:40'
            ]);
        $slug = str_slug($request->nombre,'-');
        $item =  Widget::create(['nombre'=> $request->nombre,
                                'slug' => $slug,
                                'user_id' => Auth::id()
                                ]);
        $item->save();

        alert()->overlay('Guardado','Widget -'.$item->slug.'- guardado');

        return redirect()->route('widgets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug = '')
    {
        //
        $item = Widget::findOrFail($id);
        if($item->slug !== $slug )
        {
            return redirect()->route('widgets.show',['id' => $item->id,
                                    'slug' => $item->slug],301);
        }
        return view('widgets.show',compact('item'));
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
        $item =  Widget::findOrFail($id);
        return view('widgets.edit', compact('item'));
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
        $this->validate($request,[
            'nombre' => 'required|string|max:40|unique:widgets,nombre'.$id
            ]);
        $item = Widget::findOrFail($id);

        $slug =  str_slug($request->nombre,'-');
        $item->update([
            'nombre' => $request->nombre,
            'slug' => $slug,
            'user_id' => Auth::id()
            ]);
        alert()->overlay('Actualizado widget: '.$item->nombre);

        return redirect()->route('widgets.show',['widget' => $item,'slug' => $slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Widget::destroy($id);

        alert()->overlay('Widget '.$id. 'ha sido eliminado');

        return redirect()->route('widgets.index');
    }
}
