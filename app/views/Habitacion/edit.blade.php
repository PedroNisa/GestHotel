@extends('header')
@section('title')
EDITAR HABITACION
@stop
@section('content')


    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> EDITAR HABITACIÓN
        </div>
        <div class="card-body">
            <br>
            {{ Form::open(array('url' => 'administracion/habitacion/'.$Habitacion->id,'method'=>'put','class'=>'form-horizontal')) }}
            <div class="form-group">
                {{Form::label('nro', 'Número de Habitación',['class'=>'col-sm-3 control-label'])}}
                <div class="col-sm-4">
                    {{ Form::text('nro',$Habitacion->nro,['class'=>'form-control','readonly'])}}
                    <span class="error">{{ $errors->first('nro')}}</span>
                </div>
            </div>
            <div class="form-group">
                {{Form::label('estado', 'Tipo Habitación',['class'=>'col-sm-3 control-label'])}}
                <div class="col-sm-4">
                    <select name="id_tipo_habitacion" class="form-control" >
                        <option value=""></option>
                        @foreach(TipoHabitacion::orderBy('nombre','asc')->get() as $row)
                            <option value="{{$row->id}}" {{ $row->id==$Habitacion->id_tipo_habitacion ? 'selected' : '' }}>{{$row->nombre}}</option>
                        @endforeach
                    </select>
                    <span class="error">{{ $errors->first('id_tipo_habitacion')}}</span>
                </div>
            </div>
            <BR>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
                    <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>



@stop
