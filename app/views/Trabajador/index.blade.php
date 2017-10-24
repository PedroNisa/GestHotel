@extends('header')
@section('title')
TRABAJADORES
@stop
@section('content')
        <!-- DataTables Card-->
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
                    <th>Dirección</th>
                    <th>Email</th>
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
                        <td>{{ $row->direccion }}</td>
                        <td>{{ $row->email }}</td>
                        <td><a href="trabajador/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                        <td>
                            <a href="#" class="a-delete" title="Eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            {{ Form::open(array('url'=>'administracion/cliente/'.$row->id,'method'=>'delete'))}}
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


@stop
