@include('header')

<div class="content-wrapper">
    <div class="container-fluid">
        <h1>
            <?php
            //    echo Route::currentRouteName();
            echo '<br>';
            if (Auth::user()) {
                $objUsuario = Usuario::find(Auth::user()->id);
                if ($objUsuario) {
                    echo $objUsuario->tipoUsuario->nombre . ' : '
                            . $objUsuario->trabajador->nombre .
                            ' ' . $objUsuario->trabajador->apellidoP;
                }
            }
            ?>
        </h1>
    </div>
</div>

@include('content')
@include('footer')

