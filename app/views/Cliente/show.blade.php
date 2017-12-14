@extends('header')
@section('title')
    DETALLE CLIENTE
@stop
@section('content')

    <!!-- DATATABLE PARA MOSTRAR EL DETALLE DEL CLIENTE SELECCIONADO -->

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> DETALLE CLIENTE
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(array('url' => 'administracion/cliente/'.$Cliente->id,'method'=>'update','class'=>'form')) }}
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {{ Form::label('nombre', 'Nombre',['class'=>'control-label']) }}
                                <h5>{{$Cliente->nombre}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido1', 'Primer Apellido',['class'=>'control-label'])}}
                                <h5>{{$Cliente->apellido1}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido2', 'Segundo Apellido',['class'=>'control-label'])}}
                                <h5>{{$Cliente->apellido2}}</h5>

                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('dni', 'DNI',['class'=>'control-label'])}}
                                <h5>{{$Cliente->dni}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('telefono', 'Teléfono',['class'=>'control-label'])}}
                                <h5>{{$Cliente->telefono}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('email', 'Email',['class'=>'control-label'])}}
                                <h5>{{$Cliente->email}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('direccion', 'Dirección',['class'=>'control-label']) }}
                                <h5>{{$Cliente->direccion}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('provincia', 'Provincia',['class'=>'control-label']) }}
                                <h5>{{$Cliente->provincia}}</h5>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('pais', 'Pais',['class'=>'control-label']) }}
                                <h5>{{$Cliente->pais}}</h5>
                            </div>
                        </div>
                        <div class="col-md-12 form-group align-center">
                            <a class="btn btn-success btn-close" href="{{ URL::to('administracion/cliente')}}">Volver al listado</a>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop















