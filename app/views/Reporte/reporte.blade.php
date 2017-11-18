<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
ob_start();
getHeader($Input);
getContent($Input);

        // función que pinta la cabecera del reporte
function getHeader($Input) {
    ?>
    <table class="header-reporte" style="width: 100%;" >
        <thead >
            <tr><th><h4>Reporte Reservas</h4></th></tr>
    <tr><th>Desde {{getDateFormting($Input['desde'])}} Hasta {{getDateFormting($Input['hasta'])}}</th></tr>

    </thead>   
    </table>
    <?php
}
    // función que pinta el cuerpo del reporte
function getContent($Input) {
    ?>
    <table class="content-reporte" border="1" cellspacing="0" cellpadding="0" style="text-align: center">
        <thead>
            <tr>
                <th>#</th>
                <th>&nbsp;Hab&nbsp;</th>
                <th>&nbsp;Cliente&nbsp;</th>
                <th>&nbsp;Ingreso&nbsp;</th>
                <th>&nbsp;Salida&nbsp;</th>
                <th>&nbsp;Empleado&nbsp;</th>
                <th>&nbsp;Estado&nbsp;</th>
                <th>&nbsp;Precio&nbsp;</th>
                <th>&nbsp;Días&nbsp;</th>
                <th>&nbsp;Pagado&nbsp;</th>
                <th>&nbsp;Total&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($Input['estado_pago'] === 'TODOS') {
                $Reserva = Reserva::whereBetween('fecha', array($Input['desde'] . ' 00:00:00', $Input['hasta'] . ' 23:59:59'))->get();
            } else {
                $Reserva = Reserva::where('estado_pago', '=', $Input['estado_pago'])->whereBetween('fecha', array($Input['desde'] . ' 00:00:00', $Input['hasta'] . ' 23:59:59'))->get();
            }


            foreach ($Reserva as $rowR) {
                $Habitacion = Habitacion::find($rowR->habitacionReserva->id_habitacion);
                $ObjPrecio = Precio::find($rowR->habitacionReserva->id_precio);
                $objMoneda = Moneda::find($ObjPrecio->id_moneda);
                $objCliente = Cliente::find($rowR->id_cliente);
                $objTrabajador = Trabajador::find($rowR->id_trabajador);

                ?>
                <tr>
                    <td>&nbsp;<?php echo $rowR->id; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $Habitacion->nro; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $objCliente->nombre . ' ' . $objCliente->apellido1 . ' ' . $objCliente->apellido2; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $rowR->fecha_entrada; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $rowR->fecha_salida; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $objTrabajador->nombre . ' ' . $objTrabajador->apellido1 . ' ' . $objTrabajador->apellido2; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $rowR->estado_pago; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $ObjPrecio->monto; ?>&nbsp;</td>
                    <td>&nbsp;<?php echo $rowR->dias; ?>&nbsp;</td>
                    <td>
                        <?php
                        $monto = 0;
                        if (count($rowR->pago) > 0) {
                            foreach ($rowR->pago as $rowP) {
                                $monto+=$rowP->monto;
                                echo $rowP->monto . $objMoneda->simbolo . '<br>';
                            }
                        } else {
                            echo $monto . $objMoneda->simbolo;
                        }
                        ?>

                    </td>
                    <td><?php echo $rowR->total; ?></td>

                </tr>
                <?php
            }

            ?>
        </tbody>
    </table>
    <?php
}
// funcion para el formato de la fecha
function getDateFormting($date) {
    $Ymd = explode('-', $date);
    $meses = [
        '01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio',
        '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'
    ];
    return $Ymd[2] . ' de ' . $meses[$Ymd[1]] . ' ' . $Ymd[0];
}
// incializa la libreria que genera los pdfs
$content = ob_get_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetTitle('my title');
$mpdf->SetHeader('{DATE j-m-Y}|{PAGENO}/{nb}|Hotel Jhonn-Zen');
$mpdf->SetFooter('{PAGENO}');
$mpdf->SetFooter(array(
    'L' => array(
        'content' => 'Text to go on the left',
        'font-family' => 'sans-serif',
        'font-style' => 'B', /* blank, B, I, or BI */
        'font-size' => '10', /* in pts */
    ),
    'C' => array(
        'content' => '- {PAGENO} -',
        'font-family' => 'serif',
        'font-style' => 'BI',
        'font-size' => '18', /* gives default */
    ),
    'R' => array(
        'content' => 'Printed @ {DATE j-m-Y H:m}',
        'font-family' => 'monospace',
        'font-style' => '',
        'font-size' => '10',
    ),
    'line' => 1, /* 1 to include line below header/above footer */
        ), 'E' /* defines footer for Even Pages */
);

$mpdf->WriteHTML($content);
$mpdf->Output();

exit;
