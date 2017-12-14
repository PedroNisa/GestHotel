@extends('header')
@section('content')

    <!-- DATATABLE QUE MUESTRA LOS CLIENTES QUE TENEMOS EN LA BASE DE DATOS -->

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> LISTADO DE CLIENTES
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                            <a class="btn btn-primary" href="cliente/create" title="Nuevo" role="button" style="margin-bottom: 20px">
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
                    @foreach($Cliente as $row)
                        <tr>
                            <td>{{ $row->nombre }}</td>
                            <td>{{ $row->apellido1 }}</td>
                            <td>{{ $row->apellido2 }}</td>
                            <td>{{ $row->dni }}</td>
                            <td>{{ $row->telefono }}</td>
                            <td>{{ $row->email }}</td>
                            <td><a href="cliente/{{$row->id}}" title="Más detalles"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                            <td><a href="cliente/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                            <?php
                            $currentUser = Auth::user();
                            $usuario = Usuario::find($currentUser->id);
                            if ($usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE SISTEMA' || $usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE CONTENIDOS') {
                            ?>

                            <td>
                                <a href="{{route('administracion.cliente.destroy',$row->id)}}"
                                   onclick="return confirm('¿Seguro que desea eliminar este registro?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        <?php
                            }else{
                                ?>
                            <td></td>
                            <td></td>
                                <?php
                            }
                            ?>
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

