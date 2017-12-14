@extends('header')
@section('title')
EDITAR USUARIO
@stop
@section('content')

<!-- DATATABLES PARA EDITAR EL USUARIO SELECCIONADO -->

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> EDITAR USUARIO
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(array('url' => 'sistema/usuario/'.$Usuario->id,'method'=>'put','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('email', 'Email',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                <h5>{{$Usuario->email}}</h5>
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
                            {{Form::label('id_tipo_usuario', 'Tipo',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                <select name="id_tipo_usuario" id="id_tipo_usuario" class="form-control" >
                                    <option value="">ELEGIR</option>
                                    @foreach(TipoUsuario::orderBy('nombre','asc')->get() as $row)
                                        <option value="{{$row->id}}" {{ $row->id==$Usuario->id_tipo_usuario ? 'selected' : '' }}>{{$row->nombre}}</option>
                                    @endforeach
                                </select>
                                <span class="error">{{ $errors->first('id_tipo_usuario')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('id_trabajador', 'Trabajador',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                <select name="id_trabajador" id="id_trabajador" class="form-control" >
                                    <option value="">ELEGIR</option>
                                    @foreach(Trabajador::where('activo','=','1')->orderBy('nombre','asc')->get() as $row)
                                        <option value="{{$row->id}}" {{ $row->id==$Usuario->id_trabajador ? 'selected' : '' }}>
                                            {{$row->nombre.' '.$row->apellido1.' '.$row->apellido2}}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="error">{{ $errors->first('id_trabajador')}}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10">
                                {{ Form::submit('Guardar',['class'=>'btn btn-success'])}}
                                <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
{{ Form::close() }}
@stop











