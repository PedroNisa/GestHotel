
<!-- VISTA DEL LOGIN DE AUTENTICACIÓN -->

<!DOCTYPE html>
<html>
<head>
    <title>AUTENTICACION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('css/Bootstrap-3/css/bootstrap.min.css') }}
    {{ HTML::style('css/Bootstrap-3/css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/Custom/layout.css') }}
    {{ HTML::script('js/Bootstrap/bootstrap3/bootstrap.min.js') }}
    {{ HTML::script('js/main.min.js') }}
</head>
<body>
<div aria-hidden="true" role="dialog" tabindex="-1" class="modal show" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="modal-body">
                {{ Form::open(array('url' => 'login','class'=>'form col-md-12 center-block')) }}
                <div class="form-group">
                    <!--{{Form::label('email', 'Email',['class'=>'col-sm-3 control-label'])}}-->
                    {{ Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}<br>
                </div>
                <div class="form-group">
                    <!--{{Form::label('password', 'Contraseña',['class'=>'col-sm-3 control-label'])}}-->
                    {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}<br>
                </div>
                <div class="form-group">
                    {{ Form::submit('Entrar',['class'=>'btn btn-primary btn-block'])}}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>



