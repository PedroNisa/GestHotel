@extends('header')
@section('title')
    DETALLE TRABAJADOR
@stop
@section('content')

    <!!-- DATATABLE PARA MOSTRAR EL DETALLE DEL TRABAJADOR SELECCIONADO -->

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> DETALLE TRABAJADOR
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {{ Form::label('nombre', 'Nombre',['class'=>'control-label']) }}
                                <h5>{{$Trabajador->nombre}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido1', 'Primer Apellido',['class'=>'control-label'])}}
                                <h5>{{$Trabajador->apellido1}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido2', 'Segundo Apellido',['class'=>'control-label'])}}
                                <h5>{{$Trabajador->apellido2}}</h5>

                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('dni', 'DNI',['class'=>'control-label'])}}
                                <h5>{{$Trabajador->dni}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('telefono', 'Teléfono',['class'=>'control-label'])}}
                                <h5>{{$Trabajador->telefono}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('email', 'Email',['class'=>'control-label'])}}
                                <h5>{{$Trabajador->email}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('direccion', 'Dirección',['class'=>'control-label']) }}
                                <h5>{{$Trabajador->direccion}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('provincia', 'Provincia',['class'=>'control-label']) }}
                                <h5>{{$Trabajador->provincia}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('pais', 'Pais',['class'=>'control-label']) }}
                                <h5>{{$Trabajador->pais}}</h5>
                            </div>
                        </div>
                        <div class="col-md-12 form-group align-center">
                            <a class="btn btn-success btn-close" href="{{ URL::to('administracion/trabajador')}}">Volver al listado</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
