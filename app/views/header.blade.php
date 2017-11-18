<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SISTEMA HOTEL</title>
    {{ HTML::style('css/bootstrap-3.1.1/css/bootstrap.css') }}
    {{ HTML::style('vendor/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-3.1.1/css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/layout.css') }}
    {{ HTML::style('js/Zebra_Datepicker-master/css/bootstrap.css') }}
    {{ HTML::style('js/jquery-ui-1.12.1/jquery-ui.css') }}
            <!-- Custom fonts for this template-->
    {{ HTML::style('vendor/font-awesome/css/font-awesome.min.css') }}
            <!-- Custom styles for tables-->
    {{ HTML::style('vendor/datatables/dataTables.bootstrap4.css') }}
            <!-- Custom styles for this template-->
    {{ HTML::style('css/sb-admin.css') }}
    {{ HTML::style('vendor/bootstrap/css/custom.css') }}
    {{ HTML::style('css/AdminLTE.min.css') }}

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{URL::to('login')}}">GestHotel v1.0.1</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <!-- menu lateral-->
            <!-- visible para todos los usuarios -->

                    <!-- DASHBOARD -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link"  href="{{URL::to('index')}}" >
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text"> Dashboard</span>
                </a>
            </li>

            <!-- MENU RESERVAS -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reservas">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"
                   href="#collapseReservas" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text"> Reservas</span>

                </a>
                <!-- segundo nivel -->
                <ul class="sidenav-second-level collapse" id="collapseReservas">
                    @include('reservaciones')
                </ul>
            </li>

            <?php
            $currentUser = Auth::user();
            $usuario = Usuario::find($currentUser->id);
            if ( $usuario->tipoUsuario->nombre === 'Super Administrador') {
            ?>
            <br>

            <!-- visible por el superadministrador y el administrador -->

            <!-- MENU ADMINISTRACION -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administración">
                <a class="nav-link nav-link-collapse collapsed"  data-toggle="collapse"
                   href="#collapseAdministracion" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-area-chart"> </i>
                    <span class="nav-link-text"> Administración</span>

                </a>
                <!-- segundo nivel -->
                <ul class="sidenav-second-level collapse" id="collapseAdministracion">
                    @include('administracion')
                </ul>
            </li>
            <?php
            if ($usuario->tipoUsuario->nombre === 'Super Administrador') {
            ?>


            <!-- visible solo por el superadministrador -->
            <!-- MENU SISTEMA -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sistema">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse"
                   href="#collapseSistema" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-cog"></i>
                    <span class="nav-link-text"> Sistema</span>

                </a>
                <!-- segundo nivel -->
                <ul class="sidenav-second-level collapse" id="collapseSistema">
                    @include('sistema')
                </ul>
            </li>

            <?php
               }
            }
            ?>

        </ul>


            <!--Despliegue del menu lateral-->
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <!--logout-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                {{ Form::open(array('url'=>'login','method'=>'delete'))}}
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <?php
                    echo $currentUser->trabajador->nombre . ' '
                            . $currentUser->trabajador->apellido1 .
                            ' ' . $currentUser->trabajador->apellido2;
                    ?>
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>

                {{ Form::close()}}
            </li>
        </ul>

    </div>
</nav>

@include('content')
@include('footer')

<!-- Bootstrap core JavaScript-->


{{ HTML::script('css/bootstrap-3.1.1/js/bootstrap.min.js') }}

{{ HTML::script('vendor/popper/popper.min.js') }}
{{ HTML::script('js/jquery-2.0.2.min.js') }}
{{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}


        <!-- Core plugin JavaScript-->
{{ HTML::script('vendor/jquery-easing/jquery.easing.min.js') }}

        <!-- Page level plugin JavaScript-->
{{ HTML::script('vendor/datatables/jquery.dataTables.js') }}
{{ HTML::script('vendor/datatables/dataTables.bootstrap4.js') }}
{{ HTML::script('vendor/datatables/dataTables.responsive.min.js') }}
{{ HTML::script('vendor/datatables/responsive.bootstrap.min.js') }}

        <!-- Custom scripts for all pages-->
{{ HTML::script('js/sb-admin.min.js') }}

        <!-- Custom scripts for tables-->
{{ HTML::script('js/sb-admin-datatables.js')  }}
{{ HTML::script('vendor/bootstrap/js/custom.js')  }}
{{ HTML::script('js/jquery-ui-1.12.1/jquery-ui.js') }}
{{ HTML::script('js/Zebra_Datepicker-master/javascript/zebra_datepicker.js') }}
{{ HTML::script('js/main.js') }}

</body>

</html>


