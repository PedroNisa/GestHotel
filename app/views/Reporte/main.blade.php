@extends('header')
@section('title')
REPORTES 
@stop
@section('content')

<!!-- FORMULARIO PARA GENERAR REPORTES DEL ESTADO DE LAS RESERVAS -->
    <div class="card md-3">
        <div class="card-header">
            <i class="fa fa-table"></i> REPORTES
        </div>
        <div class="card-body">

                <br>
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(array('url' => 'administracion/reporte/reservas','class'=>'form')) }}

                        <h5>Reservas</h5>
                        <ul class="list-group">
                            <li class="list-group-item col-sm-12" >
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        {{Form::label('estado_pago', 'Estado de Pago',['class'=>'control-label '])}}
                                        <div class="col-sm-12">
                                            {{Form::select('estado_pago', ['TODOS'=>'TODOS','PENDIENTE' => 'PENDIENTE', 'CANCELADO' => 'CANCELADO'],
                                            null,['class'=>'form-control','id'=>'estado_pago'])}}
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        {{Form::label('desde', 'Desde',['class'=>'control-label'])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('desde',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        {{Form::label('hasta', 'Hasta',['class'=>'control-label '])}}
                                        <div class="col-sm-12">
                                            {{ Form::text('hasta',date('Y-m-d'),['class'=>'form-control default-date'])}}
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <br>
                                        <div class="col-sm-12">
                                            {{ Form::submit('Consultar',['class'=>'btn btn-success'])}}
                                            <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                                        </div>
                                    </div>


                                </div>
                            </li>
                        </ul>
                        {{ Form::close() }}
                    </div>
                </div>
                <br><br>
         </div>
     </div>
@stop


