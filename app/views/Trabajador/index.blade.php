@extends('header')
@section('title')
TRABAJADORES
@stop
@section('content')

<!-- DATATABLES QUE MUESTRA LOS TRABAJADORES INGRESADOS EN LA BASE DE DATOS -->
       
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> LISTADO DE TRABAJADORES
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                <a class="btn btn-primary" href="trabajador/create" title="Nuevo" role="button" style="margin-bottom: 20px">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo
                </a>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido1</th>
                    <th>Apellido2</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($Trabajador as $row)
                    <tr>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->apellido1 }}</td>
                        <td>{{ $row->apellido2 }}</td>
                        <td>{{ $row->dni }}</td>
                        <td>{{ $row->telefono }}</td>
                        <td>{{ $row->email }}</td>
                        <td><a href="trabajador/{{$row->id}}" title="Más detalles"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                        <td><a href="trabajador/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                            <td>
                                <a href="{{route('administracion.trabajador.destroy',$row->id)}}"
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

