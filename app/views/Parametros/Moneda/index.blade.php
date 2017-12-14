<!!-- MUESTRA LA O LAS MONEDAS EN USO PARA LA APLICACIÓN -->
<!-- este listado es recogida por peticion ajax -->

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> LISTADO DE MONEDAS
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th colspan="6">
                        <h4>
                            <a href="parametros/moneda/create" class="new-item" title="Nuevo">
                                <span class="label label-primary">  <i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo</span>
                                <span class="label label-default"></span>
                            </a>
                        </h4>
                    </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Pais</th>
                    <th>Simbolo</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($Moneda as $row)
                <tr>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->pais }}</td>
                    <td>{{ $row->simbolo}}</td>
                    <td><a href="parametros/moneda/{{$row->id}}/edit" title="Editar" class="new-item"><i
                                class="fa fa-pencil custom"></a></td>
                    <td>
                        <a href="#" class="a-delete-ajax" title="Eliminar"><i class="fa fa-trash-o"
                                                                              aria-hidden="true"></i></a>
                        {{ Form::open(array('url'=>'sistema/parametros/moneda/'.$row->id,'method'=>'delete'))}}
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
