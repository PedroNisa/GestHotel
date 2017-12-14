@extends('header')
@section('title')
TIPO HABITACION
@stop
@section('content')

<!-- DATATABLES QUE MUESTRA EL LISTADO DE TIPOS DE HABITACIONES -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> TIPO DE HABITACIONES
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <a class="btn btn-primary" href="tipo-habitacion/create" title="Nuevo" role="button" style="margin-bottom: 20px">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo
                </a>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($TipoHabitacion as $row)
                    <tr>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->descripcion }}</td>
                        <td style="text-align: center; "><a href="tipo-habitacion/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                        <td>
                            <a href="{{route('administracion.tipo-habitacion.destroy',$row->id)}}"
                               onclick="return confirm('¿Seguro que desea eliminar este registro?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
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

