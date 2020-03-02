@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva tarea</div>
                <div class="card-body">
                <!--Mostrar formulario-->
                @if(isset($tarea))
                    <form action="{{ route('tarea.update', $tarea->id) }}" method="POST">
                @method('PATCH')
                @else
                    <form action="{{ route('tarea.store') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="tarea">Tarea</label>
                        <input name="tarea" type="text" class="form-control" id="tarea" value="{{ $tarea->tarea ?? ''}}" require>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3" > {{ $tarea->descripcion ?? ''}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="prioridad">Prioridad</label>
                        <select name="prioridad" multiple class="form-control" id="prioridad">
                        <option {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : '' }}> 1 </option>
                        <option {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : '' }}> 2 </option>
                        <option {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : '' }}> 3</option>
                        <option {{ isset($tarea) && $tarea->prioridad == 4 ? 'selected' : '' }}> 4</option>
                        <option {{ isset($tarea) && $tarea->prioridad == 5 ? 'selected' : '' }}> 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Fecha de entrega</label>
                        <input name="fecha_entrega" type="date" class="form-control" id="fecha_entrega" value="{{ $tarea->fecha_entrega ?? ''}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
