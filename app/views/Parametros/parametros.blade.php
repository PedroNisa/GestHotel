@extends('header')
@section('title')
PARAMETROS DE SISTEMA
@stop
@section('content')

<ul class="nav nav-tabs">
    <li class="active"><a href="#">Parametros de negocio</a></li>
    <li ><a href="{{URL::to('sistema/parametros/moneda')}}" class="get-list">Moneda</a></li>

</ul>
<div id="content-parmas">


</div>
@stop

