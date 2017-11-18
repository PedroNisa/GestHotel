@extends('header')
@section('title')
EDITAR TIPO USUARIO
@stop
@section('content')

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> NUEVO USUARIO
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(array('url' => 'sistema/tipo-usuario/'.$TipoUsuario->id,'method'=>'put','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::text('nombre',$TipoUsuario->nombre,['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('nombre')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('descripcion', 'Descripcion',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::textArea('descripcion',$TipoUsuario->descripcion,['class'=>'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group align-center">
                            <div class="col-sm-10">
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