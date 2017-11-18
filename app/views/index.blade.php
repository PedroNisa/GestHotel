@extends('header')
@section('title')
    LISTADO DE USUARIOS
@stop
@section('content')


    <section class="content-header">
        <h1>
            Acceso Rápido.
        </h1>

        <br>

    </section>

    <section class="content">

        <!-- =========================================================== -->

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                       <BR><h5>RESERVAS</h5><BR>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </div>
                    <a href="{{URL::to('reservaciones')}}" class="small-box-footer">
                        Mas info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <BR><h5>LIBRES</h5><BR>
                    </div>
                    <div class="icon">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                    </div>
                    <a href="{{URL::to('reservaciones/create')}}" class="small-box-footer">
                        Mas info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                     <BR><h5>CLIENTES</h5><BR>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <a href="{{URL::to('administracion/cliente')}}" class="small-box-footer">
                        Mas info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <BR><h5>REPORTES</h5><BR>
                    </div>
                    <div class="icon">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                    </div>
                    <a href="{{URL::to('administracion/reporte')}}" class="small-box-footer">
                        Mas info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->


        <!-- =========================================================== -->

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span></a>

                    <div class="info-box-content">
                        <br><span class="info-box-text">Mensajes</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="{{URL::to('administracion/habitacion')}}">
                    <span class="info-box-icon bg-green"><i class="fa fa-list-ol" aria-hidden="true"></i></span></a>
                    <div class="info-box-content">
                        <br><span class="info-box-text">Listado</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="{{URL::to('administracion/cliente/create')}}">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-plus-square" aria-hidden="true"></i></span></a>
                    <div class="info-box-content">
                        <br> <span class="info-box-text">Nuevo</span>                        
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">

                    <a href="{{URL::to('front/index')}}"  target="_blank">
                    <span class="info-box-icon bg-red"><i class="fa fa-internet-explorer" aria-hidden="true"></i><a/>

                    <div class="info-box-content">
                        <br>
                        <span class="info-box-text">Acceso a la Web</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


    </section>




    @stop