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
                    <?php
                    $currentUser = Auth::user();
                    $usuario = Usuario::find($currentUser->id);
                    if ($usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE SISTEMA' || $usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE CONTENIDOS') {
                    ?>
                    <th></th>
                    <th></th>
                    <?php
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
                @foreach($Habitacion as $row)
                    <tr>
                        <td>{{ $row->nro }}</td>
                        <td>{{ Habitacion::find( $row->id)->tipoHabitacion->nombre }}</td>
                        <?php
                        if ($usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE SISTEMA' || $usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE CONTENIDOS') {
                            ?>
                        <td class="align-center"><a href="habitacion/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                        <td>
                            <a href="{{route('administracion.habitacion.destroy',$row->id)}}"
                               onclick="return confirm('¿Seguro que desea eliminar este registro?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
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


