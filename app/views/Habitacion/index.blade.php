@extends('header')
@section('title')
HABITACIONES
@stop
@section('content')

        <!-- MUESTRA LAS HABITACIONES CREADAS PARA ESTE ESTABLECIMIENTO -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> LISTADO DE HABITACIONES
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <a class="btn btn-primary" href="habitacion/create" title="Nuevo" role="button" style="margin-bottom: 20px">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo
                </a>
                <tr>
                    <th>Número de Habitación</th>
                    <th>Tipo de Habitación</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($Habitacion as $row)
                    <tr>
                        <td>{{ $row->nro }}</td>
                        <td>{{ Habitacion::find( $row->id)->tipoHabitacion->nombre }}</td>
                        <td class="align-center"><a href="habitacion/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                        <td style="text-align: center; ">
                            <a href="#" class="a-delete" title="Eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            {{ Form::open(array('url'=>'administracion/habitacion/'.$row->id,'method'=>'delete'))}}
                            {{ Form::close()}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@stop


