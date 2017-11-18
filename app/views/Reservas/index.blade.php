@extends('header')
@section('title')
LISTADO DE RESERVAS
@stop
@section('content')

    <!!-- MUESTRA EL ESTADO EN EL QUE SE ENCUENTRAN LAS RESERVAS DEL ESTABLECIMIENTO -->

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> LISTADO DE RESERVAS
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Hab.</th>
                        <th>Tipo</th>
                        <th>Cliente</th>
                        <th>Ingreso</th>
                        <th>Salida</th>
                        <th>Total Dias</th>
                        <th>Dias Ptes</th>
                        <th>Estado</th>
                        <th>Total</th>
                        <th>A Cta.</th>
                        <th>Pte.</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $objReserva = Reserva::orderBy('fecha', 'desc')->where('activo', '=', '1')->get();
                    foreach ($objReserva as $rowR) {
                    $Habitacion = Habitacion::find($rowR->habitacionReserva->id_habitacion);
                    $ObjPrecio = Precio::find($rowR->habitacionReserva->id_precio);
                    $objMoneda = Moneda::find($ObjPrecio->id_moneda);
                    $objCliente = Cliente::find($rowR->id_cliente);
                    ?>
                    <tr id="<?php echo $rowR->id; ?>">
                        <td><?php echo '# ' . $Habitacion->nro; ?></td>
                        <td><?php echo $Habitacion->tipoHabitacion->nombre; ?></td>
                        <td><?php echo $objCliente->nombre . ' ' . $objCliente->apellido1 . ' ' . $objCliente->apellido2; ?></td>
                        <td><?php echo $rowR->fecha_entrada; ?></td>
                        <td><?php echo $rowR->fecha_salida; ?></td>
                        <td><?php echo $rowR->dias; ?></td>
                        <td>
                            <?php
                            $datetime1 = new DateTime(date('Y-m-d H:i:s'));
                            $datetime2 = new DateTime($rowR->fecha_salida);
                            $interval = $datetime1->diff($datetime2);
                            echo $interval->format('%R%a días');
                            ?>
                        </td>
                        <td><?php echo $rowR->estado_pago; ?></td>
                        <td><?php echo $rowR->total; ?>{{$objMoneda->simbolo}}</td>
                        <td>
                            <?php
                            $monto = 0;
                            if (count($rowR->pago) > 0) {
                                foreach ($rowR->pago as $rowP) {
                                    $monto+=$rowP->monto;
                                    echo $rowP->monto . '<br>';
                                }
                            } else {
                                echo $monto;
                            }
                            ?>
                        </td>
                        <td>{{$rowR->total - $monto}}</td>
                        <td>
                            <?php
                            if ($monto < $rowR->total) {
                            ?>
                            <a href="{{URL::to('reservaciones/realizar-cobro/'.$rowR->id)}}" class="realizar-cobro" title="Realizar Cobro" >
                                <span class="glyphicon glyphicon-usd"></span>
                            </a><br>
                            <?php
                            } else {
                            ?>
                            <a href="{{URL::to('reservaciones/liberar/'.$rowR->id)}}" class="liberar" title="Liberar Habitación" >Liberar</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div id="loginModal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
</div>
@stop

