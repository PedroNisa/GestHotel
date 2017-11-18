@extends('header')
@section('title')
NUEVA HABITACION
@stop
@section('content')

    <!!-- DATATABLE PARA CREAR NUEVAS HABITACIONES EN EL ESTABLECIMIENTO -->
    <div class="card m-3">
        <div class="card-header">
            <i class="fa fa-table"></i> NUEVA HABITACIÓN
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-12">

                        {{ Form::open(array('url' => 'administracion/habitacion','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('nro', 'Número de Habitación',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-3">
                                {{ Form::text('nro','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('nro')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('estado', 'Tipo Habitación',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-3">
                                <select name="id_tipo_habitacion" class="form-control" >
                                    <option value="">Seleccione</option>
                                    @foreach(TipoHabitacion::orderBy('nombre','asc')->get() as $row)
                                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                <span class="error">{{ $errors->first('id_tipo_habitacion')}}</span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10">
                                {{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
                                <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
