
        <li <?php echo (Request::is('sistema/usuario/*') || Request::is('sistema/usuario')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('sistema/usuario')}}"><i class="fa fa-users"></i>  Usuarios</a>
        </li>
        <li <?php echo (Request::is('sistema/tipo-usuario/*') || Request::is('sistema/tipo-usuario')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('sistema/tipo-usuario')}}"><i class="fa fa-user-plus"></i></span>  Roles</a>
        </li>
        <li <?php echo (Request::is('sistema/parametros/*') || Request::is('sistema/parametros')) ? 'class="active"' : ''; ?>>
            <a href="{{URL::to('sistema/parametros')}}"><i class="fa fa-wrench"></i> Parametros</a>
        </li>        

