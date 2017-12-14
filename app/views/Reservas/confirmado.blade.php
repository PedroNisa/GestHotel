

<!!-- RELLENA LOS CAMPOS DEL INDEX EN CASO DE PAGO PARCIAL O TOTAL
       recibe una petición ajax-->

<?php

//recojemos los objetos
$Habitacion = Habitacion::find($Reserva->habitacionReserva->id_habitacion);
$ObjPrecio = Precio::find($Reserva->habitacionReserva->id_precio);
$objMoneda = Moneda::find($ObjPrecio->id_moneda);
$objCliente = Cliente::find($Reserva->id_cliente);
?>
//mostramos los datos actualizados en la tabla de las reservas
<td><?php echo '# ' . $Habitacion->nro; ?></td>
<td><?php echo $Habitacion->tipoHabitacion->nombre; ?></td>
<td><?php echo $objCliente->nombre . ' ' . $objCliente->apellido1 . ' ' . $objCliente->apellido2; ?></td>
<td><?php echo $Reserva->fecha_entrada; ?></td>
<td><?php echo $Reserva->fecha_salida; ?></td>
<td><?php echo $Reserva->dias; ?></td>
<td>
    <?php
    $datetime1 = new DateTime(date('Y-m-d H:i:s'));
    $datetime2 = new DateTime($Reserva->fecha_salida);
    $interval = $datetime1->diff($datetime2);
    echo $interval->format('%R%a días');
    ?>
</td>
<td><?php echo $Reserva->estado_pago; ?></td>
<td><?php echo $Reserva->total; ?></td>
<td>
    <?php
    //descuenta el pago realizado
    $monto = 0;
    if (count($Reserva->pago) > 0) {
        foreach ($Reserva->pago as $rowP) {
            $monto += $rowP->monto;
            echo $rowP->monto . '<br>';
        }
    } else {
        echo $monto;
    }
    ?>
</td>
<td><?php echo($Reserva->total - $monto); ?></td>
<td>
    <?php
    //si el cliente tiene pagos pendiente mostrará el simbolo dolar para seguir cobrandole el monto pendiente
    //en caso contrario muentra el link para liberar la habitación
    if ($monto < $Reserva->total) {
        ?>
        <a href="{{URL::to('reservaciones/realizar-cobro/'.$Reserva->id)}}" class="realizar-cobro"
           title="Realizar Cobro">
            <span class="glyphicon glyphicon-usd"></span>
        </a><br>
        <?php
    } else {
        ?>
        <a href="{{URL::to('reservaciones/liberar/'.$Reserva->id)}}" class="liberar"
           title="Liberar Habitación">Liberar</a>
        <?php
    }
    ?>
</td>
