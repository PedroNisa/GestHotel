<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SISTEMA HOTEL</title>

    <!-- Estilos-->
    
     <!-- Estilos de Bootstrap-->
    {{ HTML::style('css/Bootstrap-3/css/bootstrap.css') }}
    {{ HTML::style('css/Bootstrap-4/bootstrap.css') }}
     {{ HTML::style('css/Bootstrap-3/css/bootstrap-theme.min.css') }}
      <!-- Estilos personalizados-->
    {{ HTML::style('css/Custom/layout.css') }}
     <!-- Estilos del Datepicker-->
    {{ HTML::style('css/Zebra_Datepicker/datapicker.css') }}
     <!-- Plugin para JQuery -->
    {{ HTML::style('css/JQuery/jquery-ui-1.12.1/jquery-ui.css') }}
            <!-- Fuentes e Iconos -->
    {{ HTML::style('css/font-awesome/css/font-awesome.min.css') }}
            <!-- Estilos para la tablas-->
    {{ HTML::style('css/Datatables/dataTables.bootstrap4.css') }}
            <!-- Estilos para el Panel de Administración-->
    {{ HTML::style('css/Dashboard/admin.css') }}
    {{ HTML::style('css/Dashboard/custom.css') }}
    {{ HTML::style('css/Dashboard/AdminLTE.min.css') }}

</head>  <!-- end head-->
 
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

            <!-- visible por el superadministrador y el administrador -->

            <!-- MENU ADMINISTRACION -->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administración">
                <a class="nav-link nav-link-collapse collapsed"  data-toggle="collapse"
                   href="#collapseAdministracion" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-area-chart"> </i>
                    <span class="nav-link-text"> Administración</span>

                </a>
                <!-- segundo nivel, existen zonas habilitadas a todos lo usuarios registrados -->
                <ul class="sidenav-second-level collapse" id="collapseAdministracion">
                    @include('administracion')
                </ul>
            </li>
            <?php
            $currentUser = Auth::user();
            $usuario = Usuario::find($currentUser->id);
            if ($usuario->tipoUsuario->nombre === 'ADMINISTRADOR DE SISTEMA') {
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
                <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
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
<!-- Incluye el content-->
@include('content')
<!-- Incluye el Footer-->
@include('footer')

        <!-- SCRIPTS-->

       <!-- Bootstrap 3 core JavaScript-->
{{ HTML::script('js/Bootstrap/bootstrap3/bootstrap.min.js') }}
       <!-- Plugin para crear etiquetas con JavaScript -->
{{ HTML::script('js/Plugins/popper/popper.min.js') }}
       <!-- Libreria Jquery -->
{{ HTML::script('js/JQuery/jquery-2.0.2.min.js') }}
        <!-- Bootstrap 4 core JavaScript-->
{{ HTML::script('js/Bootstrap/bootstrap4/bootstrap.min.js') }}
        <!-- Core Plugin JavaScript para animaciones -->
{{ HTML::script('js/Plugins/jquery-easing/jquery.easing.min.js') }}
        <!-- Scripts para los Datatable -->
{{ HTML::script('js/datatables/jquery.dataTables.js') }}
{{ HTML::script('js/datatables/dataTables.bootstrap4.js') }}
{{ HTML::script('js/datatables/dataTables.responsive.min.js') }}
{{ HTML::script('js/datatables/responsive.bootstrap.min.js') }}
        <!-- Scripts para el panel de Administración-->
{{ HTML::script('js/Dashboard/sb-admin.min.js') }}        
{{ HTML::script('js/Dashboard/sb-admin-datatables.js')  }}
        <!-- Scripts custom -->
{{ HTML::script('js/Custom/custom.js')  }}
 <!-- Scripts para el plugin de JQuery -->
{{ HTML::script('js/JQuery/jquery-ui.js') }}
<!-- Scripts para el Datepicker-->
{{ HTML::script('js/Zebra_Datepicker/zebra_datepicker.js') }}
<!-- Scripts propios -->
{{ HTML::script('js/main.js') }}
<!-- Scripts para las validaciones del lado del cliente -->
{{ HTML::script('js-front/validate.js') }}
{{ HTML::script('js-front/rules.js') }}

</body>

</html>


