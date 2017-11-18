

        <li <?php echo (Request::is('administracion/trabajador/*') || Request::is('administracion/trabajador')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('administracion/trabajador')}}"><i class="fa fa-user"></i> Trabajador</a>
        </li>
        <li <?php echo (Request::is('administracion/cliente/*') || Request::is('administracion/cliente')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('administracion/cliente')}}"><span class="glyphicon glyphicon-pushpin"></span> Cliente</a>
        </li>
        <li <?php echo (Request::is('administracion/habitacion/*') || Request::is('administracion/habitacion')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('administracion/habitacion')}}"><i class="fa fa-bed" aria-hidden="true"></i> Habitación</a>
        </li>
        <li <?php echo (Request::is('administracion/tipo-habitacion/*') || Request::is('administracion/tipo-habitacion')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('administracion/tipo-habitacion')}}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tipo Habitación</a>
        </li>
        <li <?php echo (Request::is('administracion/reportes/*') || Request::is('administracion/reportes')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('administracion/reporte')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Reportes</a>
        </li>
