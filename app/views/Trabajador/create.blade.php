@extends('header')
@section('title')
    NUEVO TRABAJADOR
@stop
@section('content')

<!-- DATATABLES PARA CREAR UN NUEVO TRABAJADOR -->

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> ALTA TRABAJADOR
        </div>

        <div class="card-body">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-12">

                        {{ Form::open(array('url' => 'administracion/trabajador','class'=>'form')) }}

                        <div class="row">

                            <div class="col-md-4 form-group">
                                {{ Form::label('nombre', 'Nombre',['class'=>'control-label']) }}
                                {{ Form::text('nombre','',['class'=>'form-control','autofocus'])}}
                                <span class="error">{{ $errors->first('nombre')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido1', 'Primer Apellido',['class'=>'control-label'])}}
                                {{ Form::text('apellido1','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('apellido1')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('apellido2', 'Segundo Apellido',['class'=>'control-label'])}}
                                {{ Form::text('apellido2','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('apellido2')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('dni', 'DNI',['class'=>'control-label'])}}
                                {{ Form::text('dni','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('ci')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('telefono', 'Teléfono',['class'=>'control-label'])}}
                                {{ Form::text('telefono','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('telefono')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{Form::label('email', 'Email',['class'=>'control-label'])}}
                                {{ Form::text('email','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('email')}}</span>
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('direccion', 'Dirección',['class'=>'control-label']) }}
                                {{ Form::text('direccion','',['class'=>'form-control'])}}
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('provincia', 'Provincia',['class'=>'control-label']) }}
                                {{ Form::text('provincia','',['class'=>'form-control'])}}
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('pais', 'Pais',['class'=>'control-label']) }}
                                {{ Form::text('pais','',['class'=>'form-control'])}}
                            </div>
                        </div>

                        <br>

                        <div class="col-md-12 form-group align-center">
                            {{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
                            <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
