@extends('header')
@section('title')
TIPO HABITACION
@stop
@section('content')

        <!-- DataTables Card-->
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
                    <th>Precios</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($TipoHabitacion as $row)
                    <tr>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->descripcion }}</td>
                        <td>{{ $Precio->$row }}</td>
                        <td><a href="tipo-habitacion/{{$row->id}}/edit" title="Editar"><i class="fa fa-pencil custom"></i></a></td>
                        <td>


                            <a href="#" class="a-delete" title="Eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            {{ Form::open(array('url'=>'administracion/tipo-habitacion/'.$row->id,'method'=>'delete'))}}
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

