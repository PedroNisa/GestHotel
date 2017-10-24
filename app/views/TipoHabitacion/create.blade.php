@extends('header')
@section('title')
NUEVO TIPO HABITACION
@stop
@section('content')


    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> NUEVO TIPO HABITACION
        </div><br>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-3">
                        {{ Form::open(array('url' => 'administracion/tipo-habitacion','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::text('nombre','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('nombre')}}</span>
                            </div>
                        </div>

                        <div class="form-group" >
                            {{Form::label('descripcion', 'Descripción',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::textArea('descripcion','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('descripcion')}}</span>
                            </div>
                        </div>
                        <!--  link para adicionar precios -->
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="hidden" value="0" name="prices" id="prices">
                                <a href="{{URL::to('administracion')}}/moneda" id="add-price" rel="0">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar precio
                                </a>
                        <span style="display: none;">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                        </span>

                            </div>
                        </div>
                        <!-------------------------------------------->

                        <div class="form-group" id="content-button">
                            <div class="col-sm-offset-8 col-sm-10">
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
