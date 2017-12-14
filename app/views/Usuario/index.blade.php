@extends('header')
@section('title')
LISTADO DE USUARIOS
@stop
@section('content')

<!-- DATATABLES PARA MOSTRAR LOS USUARIOS REGISTRADOS EN EL SISTEMA -->

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> USUARIOS
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <a class="btn btn-primary" href="usuario/create" title="Nuevo" role="button"
                   style="margin-bottom: 20px">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo
                </a>
                <tr>
                    <th>Email</th>
                    <th>Fecha Creación</th>
                    <th>Trabajador</th>
                    <th>Tipo Usuario</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($Usuario as $row)
                <tr>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->fecha_creacion }}</td>
                    <td>{{ Usuario::find($row->id)->trabajador->nombre.'
                        '.Usuario::find($row->id)->trabajador->apellido1.'
                        '.Usuario::find($row->id)->trabajador->apellido2 }}
                    </td>
                    <td>{{ Usuario::find($row->id)->tipoUsuario->nombre }}</td>
                    <td><a href="usuario/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                    <td>
                        <a href="#" class="a-delete" title="Eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        {{ Form::open(array('url'=>'sistema/usuario/'.$row->id,'method'=>'delete'))}}
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

        