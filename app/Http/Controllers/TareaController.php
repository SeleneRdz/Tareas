<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('tarea/tareaIndex',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tarea/tareaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Si llegas a esta función, se moestrará ese mensaje
        //dd($request->tarea);
        $tarea = new Tarea();
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->prioridad = $request->prioridad;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->save();

        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //dd($tarea);
        //
        return view('tarea.tareaShow',compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
        return view('tarea.tareaForm',compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->prioridad = $request->prioridad;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->save();

        return redirect()->route('tarea.show',$tarea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
