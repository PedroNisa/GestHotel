
        <li <?php echo (Request::is('reservaciones')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('reservaciones')}}"><span class="glyphicon glyphicon-saved"></span> Reservadas</a>
        </li>  
        <li <?php echo (Request::is('reservaciones/create')||Request::is('reservaciones/*')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('reservaciones/create')}}"><span class="glyphicon glyphicon-star-empty"></span> Disponibilidad</a>
        </li>

