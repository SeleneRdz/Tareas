@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de Tarea</div>
                <div class="card-body">
                <div class="col-sm-12">
                <a href="{{ route('tarea.index') }}" class="btn btn-success btn-sm" > Regresar </a>
                <hr>
                <form action="{{ route('tarea.destroy', $tarea->id) }}" METHOD="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Borrar </button>
                </form>
                    <CENTER>
                        <b><h1> {{ $tarea->tarea }} </h1></b>
                    </CENTER>
                </div><hr>
                <div class="col-sm-6" STYLE="float: right;">
                    <b><h4> Fecha de entrega: </b> {{ $tarea->fecha_entrega }} </h4>
                </div><br>
                <div class="col-sm-6">
                    <h3><b> Prioridad: </b> {{ $tarea->prioridad }} </h3>
                </div>
                <div class="col-sm-6">
                    <h4><b> Descripción: </b> {{ $tarea->descripcion }} </h4>
                </div><br><br>
                <CENTER>
                    <a href="{{ route('tarea.edit',$tarea->id) }}" class="btn btn-primary btn-sm"> Editar tarea </a>
                </CENTER>
                    <!--Mostrar detalle de una tarea-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
