@extends('header')
@section('title')
HABITACIONES DISPONIBLES
@stop

        <!!-- DATATABLE CON LA DISPONIBILIDAD DE LAS HABITACIONES -->
@section('content')
    <?php
    $objhab = Habitacion::orderBy('nro')->get();
            ?>

<!-- DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>  DISPONIBILIDAD
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <?php
                    $c = 1;
                    foreach ($objhab as $row) {
                    ?>
                    <th style="text-align: center">{{$row->nro}}</th>
                    <?php
                    $c++;
                    }
                    ?>
                </tr>
                </thead>
                       <tbody>
                       <tr>
                           <td>{{ HTML::image('resources/individual.png') }}</td>

                           <?php
                           $c = 1;
                           foreach ($objhab as $row) {
                               if($row->tipoHabitacion->nombre == 'Singular' && $row->estado == 'LIBRE'){
                           ?>
                           <td style="background: green;">
                               <a style="background: green;border: none" href="{{URL::to('reservaciones/' . $row->id)}}" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                               }else if($row->tipoHabitacion->nombre == 'Singular' && $row->estado == 'OCUPADA'){
                           ?>
                           <td style="background: red;">
                               <a style="background: red;border: none" href="<?php echo URL::to('reservaciones/'); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                          } else{
                               ?>
                               <td style="background: grey"></td>
                               <?php
                           }
                           $c++;
                           }
                           ?>
                       </tr>
                       <tr>
                           <td>{{ HTML::image('resources/doble.png') }}</td>
                           <?php
                           $c = 1;
                           foreach ($objhab as $row) {
                           $idHab = $row->id;
                           $nroHab = $row->nro;
                           $descHab = $row->tipoHabitacion->descripcion;
                           $nombreTipoH = $row->tipoHabitacion->nombre;
                           if($row->tipoHabitacion->nombre == 'Doble'  && $row->estado == 'LIBRE'){
                           ?>
                           <td style="background: green;">
                               <a style="background: green;border: none" href="<?php echo URL::to('reservaciones/' . $idHab); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else if($row->tipoHabitacion->nombre == 'Doble' && $row->estado == 'OCUPADA'){
                           ?>
                           <td style="background: red;">
                               <a style="background: red;border: none" href="<?php echo URL::to('reservaciones/'); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else{
                           ?>
                           <td style="background: grey"></td>
                           <?php
                           }
                           $c++;
                           }
                           ?>
                       </tr>
                       <tr>
                           <td>{{ HTML::image('resources/matrimonio.png') }}</td>
                           <?php
                           $c = 1;
                           foreach ($objhab as $row) {
                           $idHab = $row->id;
                           $nroHab = $row->nro;
                           $descHab = $row->tipoHabitacion->descripcion;
                           $nombreTipoH = $row->tipoHabitacion->nombre;
                           if($row->tipoHabitacion->nombre == 'Matrim' && $row->estado == 'LIBRE'){
                           ?>
                           <td style="background: green;"><a style="background: green;border: none" href="<?php echo URL::to('reservaciones/' . $idHab); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else if($row->tipoHabitacion->nombre == 'Matrim' && $row->estado == 'OCUPADA'){
                           ?>
                           <td style="background: red;">
                               <a style="background: red;border: none" href="<?php echo URL::to('reservaciones/'); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else{
                           ?>
                           <td style="background: grey"></td>
                           <?php
                           }
                           $c++;
                           }
                           ?>
                       </tr>
                       <tr>
                           <td>{{ HTML::image('resources/kingsize.png') }}</td>
                           <?php

                           $c = 1;
                           foreach($objhab as $row){
                           $idHab = $row->id;
                           $nroHab = $row->nro;
                           $descHab = $row->tipoHabitacion->descripcion;
                           $nombreTipoH = $row->tipoHabitacion->nombre;
                           if($row->tipoHabitacion->nombre == 'KingSize' && $row->estado == 'LIBRE'){
                           ?>
                           <td style="background: green;"><a style="background: green;border: none" href="<?php echo URL::to('reservaciones/' . $idHab); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else if($row->tipoHabitacion->nombre == 'KingSize' && $row->estado == 'OCUPADA'){
                           ?>
                           <td style="background: red;"><a style="background: red;border: none" href="<?php echo URL::to('reservaciones/'); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else{
                           ?>
                           <td style="background: grey"></td>
                           <?php
                           }
                           $c++;
                          }
                           ?>
                       </tr>
                       <tr>
                           <td>{{ HTML::image('resources/familiar.png') }}</td>
                           <?php
                           $c = 1;
                           foreach ($objhab as $row) {
                           $idHab = $row->id;
                           $nroHab = $row->nro;
                           $descHab = $row->tipoHabitacion->descripcion;
                           $nombreTipoH = $row->tipoHabitacion->nombre;
                           if($row->tipoHabitacion->nombre == 'Familiar' && $row->estado == 'LIBRE'){
                           ?>
                           <td style="background: green;"><a style="background: green;border: none" href="<?php echo URL::to('reservaciones/' . $idHab); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else if($row->tipoHabitacion->nombre == 'Familiar' && $row->estado == 'OCUPADA'){
                           ?>
                           <td style="background: red;"><a style="background: red;border: none" href="<?php echo URL::to('reservaciones/'); ?>" class="list-group-item obj-hab"></a>
                           </td>
                           <?php
                           }else{
                           ?>
                           <td style="background: grey"></td>
                           <?php
                           }
                           $c++;
                           }
                           ?>
                       </tr>

                </tbody>
                <tfoot>
                </tfoot>
            </table>

        </div>
    </div>
</div>
<div id="content-detail" class="modal" tabindex="-1" role="dialog" aria-hidden="true"></div>

@stop
