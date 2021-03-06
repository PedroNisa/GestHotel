
<!!-- MODAL PARA COBRAR TOTAL O PARCIALMENTE LA DEUDA DEL CLIENTE -->

<?php
$monto = 0;
if (count($Reserva->pago) > 0) {
    foreach ($Reserva->pago as $rowPago) {
        echo $rowPago->monto;
        $monto+=$rowPago->monto;
    }
}
$ObjPrecio = Precio::find($Reserva->habitacionReserva->id_precio);
$objMoneda = Moneda::find($ObjPrecio->id_moneda)
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h5 class="text-center">COBRO</h5>
            <form id="custom-form" action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="hidden" name="id_moneda" value="<?php echo $objMoneda->id; ?>">
                        <h5>
                            <?php
                            echo 'Personas <b>' . $ObjPrecio->personas . '</b> : ' . $ObjPrecio->monto . ' ' . $objMoneda->simbolo . '(' . $objMoneda->nombre . ')';
                            echo '<br>';
                            echo 'Dias : <strong>' . $Reserva->dias . '</strong>';
                            ?>
                        </h5>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-3">
                        <label>TOTAL</label>
                        <input type="text" readonly value="<?php echo $Reserva->total; ?>" name="total"  class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label>Pago a cuenta</label>
                        <input type="text" readonly value="<?php echo $monto; ?>" name="monto-cuenta"  class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label>Pago pendiente</label>
                        <input type="text" readonly value="<?php echo ($Reserva->total - $monto); ?>" name="pago-pendiente" id="total"  class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label>Total a Cobrar</label>
                        <input type="text" value="<?php echo ($Reserva->total - $monto); ?>" name="monto" id="monto" class="form-control only-numeric">
                    </div>

                </div>
            </form>
            <div class="row align-center">
                <div class="col-sm-12">
                    <br>
                    <a href="{{URL::to('reservaciones/cobrar')}}/{{$Reserva->id}}" class="btn btn-success" role="button" id="cobrar">Cobrar</a>
                    <input type="hidden" value="<?php echo $Reserva->id; ?>"/>
                    <a class="btn btn-danger btn-close" href="{{ URL::previous() }}">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>


