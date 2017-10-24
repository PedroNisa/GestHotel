@extends('header')
@section('title')
REPORTES 
@stop
@section('content')


    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> REPORTES
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-12 col-md-offset-3">
                        {{ Form::open(array('url' => 'administracion/reporte/reservas','class'=>'form-horizontal')) }}

                        <h5>Reservas</h5>
                        <ul class="list-group">
                            <li class="list-group-item" >
                                <div class="row">
                                    <div class="form-group">
                                        {{Form::label('estado_pago', 'Estado de Pago',['class'=>'col-sm-12 control-label '])}}
                                        <div class="col-sm-12">
                                            {{Form::select('estado_pago', ['TODOS'=>'TODOS','PENDIENTE' => 'PENDIENTE', 'CANCELADO' => 'CANCELADO'],
                                            null,['class'=>'form-control','id'=>'estado_pago'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('desde', 'Desde',['class'=>'col-sm-12 control-label'])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('desde',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('hasta', 'Hasta',['class'=>'col-sm-12 control-label '])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('hasta',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <div class="col-sm-2">
                                            {{ Form::submit('Consultar',['class'=>'btn btn-success'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        {{ Form::close() }}
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-12 col-md-offset-3">
                        {{ Form::open(array('url' => 'administracion/reporte/reservas','class'=>'form-horizontal')) }}
                        <h5>Clientes Deudores</h5>
                        <ul class="list-group">
                            <li class="list-group-item">

                                <div class="row">
                                    <div class="form-group">
                                        {{Form::label('estado_pago', 'Estado de Pago',['class'=>'col-sm-12 control-label'])}}
                                        <div class="col-sm-12">
                                            {{Form::select('estado_pago', ['TODOS'=>'TODOS','PENDIENTE' => 'PENDIENTE', 'CANCELADO' => 'CANCELADO'],null,['class'=>'form-control','id'=>'estado_pago'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('desde', 'Desde',['class'=>'col-sm-12 control-label'])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('desde',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{Form::label('hasta', 'Hasta',['class'=>'col-sm-12 control-label '])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('hasta',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <div class="col-sm-2">
                                            {{ Form::submit('Consultar',['class'=>'btn btn-success'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                                    </div>


                                </div>
                             </li>
                           </ul>

                          </div>




                    {{ Form::close() }}


                </div>
            </div>
         </div>
     </div>











@stop


