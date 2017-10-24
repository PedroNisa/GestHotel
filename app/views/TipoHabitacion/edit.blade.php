@extends('header')
@section('title')
NUEVO TIPO HABITACION
@stop
@section('content')

    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> EDITAR TIPO HABITACION
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-3">
                        {{ Form::open(array('url' => 'administracion/tipo-habitacion/'.$TipoHabitacion->id,'method'=>'put','class'=>'form-horizontal')) }}
                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::text('nombre',$TipoHabitacion->nombre,['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('nombre')}}</span>
                            </div>
                        </div>

                        <div class="form-group" >
                            {{Form::label('descripcion', 'Descripción',['class'=>'col-sm-3 control-label'])}}
                            <div class="col-sm-4">
                                {{ Form::textArea('descripcion',$TipoHabitacion->descripcion,['class'=>'form-control'])}}
                                <span class="error">{{ $errors->first('descripcion')}}</span>
                            </div>
                        </div>
                        <!--  link para adicionar precios -->
                        <div class="form-group">
                            <div class="col-sm-4">
                                <input type="hidden" value="{{count($TipoHabitacion->precio)}}" name="prices" id="prices">
                                <a href="{{URL::to('administracion')}}/moneda" id="add-price" rel="0">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Editar precio
                                </a>
                        <span style="display: none;">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                            <span class="sr-only">Cargando...</span>
                        </span>

                            </div>
                        </div>
                        <!-------


        <!-------------------------------------------->

                        <?php $c = 1; ?>
                        @foreach($TipoHabitacion->precio as $rowPrice)
                            <div class="form-group">
                                <input type="hidden" value="{{ $rowPrice->id}}" name="id_precio{{$c}}">
                                <a class="delete-price" href="{{URL::to('administracion')}}/tipo-habitacion/delete/price/{{$rowPrice->id}}"><span class="glyphicon glyphicon-remove"></span></a>
                                <label class="col-sm-1 control-label" for="monto{{$c}}">Precio</label>
                                <div class="col-sm-2">
                                    <input type="text" id="monto{{$c}}" value="{{$rowPrice->monto}}" name="monto{{$c}}" class="form-control">
                                    <span class="error"></span>
                                </div>
                                <label class="col-sm-1 control-label" for="personas{{$c}}">Personas</label>
                                <div class="col-sm-2">
                                    <select name="personas<?php echo $c; ?>" class="form-control" id="personas<?php echo $c; ?>">
                                        <?php
                                        for ($i = 1; $i < 11; $i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>" <?php echo $i == $rowPrice->personas ? 'selected' : ''; ?>><?php echo $i; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label class="col-sm-1 control-label" for="id_moneda{{$c}}">Moneda</label>
                                <div class="col-sm-2">
                                    <select class="form-control" id="id_moneda{{$c}}" name="id_moneda{{$c}}">
                                        @foreach(Moneda::orderBy('nombre','asc')->get() as $rowMoneda)
                                            <option value="{{$rowMoneda->id}}" {{ $rowPrice->id_moneda==$rowMoneda->id?'selected':''}}>{{$rowMoneda->simbolo}}</option>
                                        @endforeach
                                    </select>
                                    <span class="error"></span>
                                </div>
                                <?php $c++; ?>
                            </div>
                        @endforeach
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
