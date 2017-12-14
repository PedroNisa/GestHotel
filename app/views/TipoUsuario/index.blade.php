@extends('header')
        <!-- DATATABLE QUE MUESTRA LOS ROLES QUE TENEMOS EN LA BASE DE DATOS -->
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> ROLES
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <a class="btn btn-primary" href="tipo-usuario/create" title="Nuevo" role="button"
                   style="margin-bottom: 20px">
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

                @foreach($TipoUsuario as $row)
                <tr>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->descripcion }}</td>
                    <td><a href="tipo-usuario/{{$row->id}}/edit" title="Editar"><span
                                class="glyphicon glyphicon-pencil"></span></a></td>
                    <td>
                        <a href="#" class="a-delete" title="Eliminar"><span
                                class="glyphicon glyphicon-trash"></span></a>
                        {{ Form::open(array('url'=>'sistema/tipo-usuario/'.$row->id,'method'=>'delete'))}}
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

