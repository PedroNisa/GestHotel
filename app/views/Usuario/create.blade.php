@extends('header')
@section('title')
NUEVO USUARIO
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
                        {{ Form::open(array('url' => 'sistema/usuario','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('email', 'Email',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::text('email','',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('password', 'Contraseña',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::password('password',['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('password')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('id_trabajador', 'Trabajador',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                <select name="id_trabajador" class="form-control" >
                                    <option value="">ELEGIR</option>
                                    @foreach(Trabajador::where('id','!=','1')->orderBy('nombre','asc')->get() as $row)
                                        <option value="{{$row->id}}">{{$row->nombre.' '.$row->apellidoP.' '.$row->apellidoM}}</option>
                                    @endforeach
                                </select>
                                <span class="error">{{ $errors->first('id_trabajador')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('id_tipo_usuario', 'Tipo',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                <select name="id_tipo_usuario" class="form-control" >
                                    <option value="">ELEGIR</option>
                                    <option value="1">1</option>
                                    @foreach(TipoUsuario::where('id','!=','1')->orderBy('nombre','asc')->get() as $row)
                                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                <span class="error">{{ $errors->first('id_tipo_usuario')}}</span>
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
