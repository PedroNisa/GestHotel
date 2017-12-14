

<!-- PAGINA CONTACTO -->

<!-- INCLUYE LOS ESTILOS Y SCRIPTS -->
@include('Front.header')

        <!-- NAVBAR -->
<div class="tm-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
				<a href="#" class="tm-site-name">Viña de Oro</a>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-9">
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="tm-nav">
					<ul>
						<li><a href="{{URL::to('front/index')}}">Home</a></li>
						<li><a href="{{URL::to('front/about')}}">Nosotros</a></li>
						<li><a href="{{URL::to('front/tours')}}">Un Paseo</a></li>
						<li><a href="{{URL::to('front/contact')}}" class="active">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>



<!-- SECCION BG GRIS -->
	<section class="container tm-home-section-1" id="more" style="margin-top: 5%;">
		<div class="row">
            <!-- HEAD BIENVENIDO -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="{{asset('images/world-map.png')}}" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Hoteles Viña de Oro</h2>
							<h3 class="slider-subtitle">Bienvenido a la sección de datos de contacto </h3>
							<p class="slider-description">Tiene alguna pregunta, comentario o queja? Puede encontrar las respuestas a sus preguntas aquí.
                                Tanto si estás preparando una próxima estancia en nuestro hotel como si ya nos has visitado, siempre estamos a tu disposición
                                para responder a tus preguntas o comentarios: este espacio te está completamente dedicado.. <br><br>
								En esta sección, puede comunicarnos cualquier incidente que se produzca antes, durante o después de su estancia.
                                Sus experiencias e impresiones son muy importantes para nosotros e intentaremos responderle a la mayor brevedad posible.</p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>			      
					</li>
				</ul>
			</div>
		</div>
	</section>

<!-- SECCION BG BLANCO -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contáctenos</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- FORMULARIO DE CONTACTO -->
                {{ Form::open(['route' => 'contact', 'method' => 'post', 'class'=>'tm-contact-form', 'id' => 'reserva']) }}
					<div class="col-lg-6 col-md-6">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.6803384833131!2d-6.397163170839716!3d38.67827144568237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd141d700c313adb%3A0xdbe8ff620822a610!2sCalle+Ortega+y+Mu%C3%B1oz%2C+28%2C+06200+Almendralejo%2C+Badajoz!5e0!3m2!1ses!2ses!4v1510684298750" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="contact-social">
							<a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-dribbble"><i class="fa fa-dribbble"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">

						<div class="tm-form-inner" style="margin-top: -11%;">
							<div class="form-group" >
								{{ Form::label('nombreCompleto', 'Nombre y Apellidos*') }}
								{{ Form::text('nombreCompleto', null, ['class' => 'form-control','placeholder'=>'Introduzca su nombre y apellidos','id' => 'nombreCompleto']) }}
							</div>
							<div class="form-group">
								{{ Form::label('email', 'E-Mail*') }}
								{{ Form::email('email', null, ['class' => 'form-control','placeholder'=>'Introduzca su email' ]) }}
							</div>
							<div class="form-group" >
								{{ Form::label('asunto', 'Asunto*') }}
								{{ Form::text('asunto', null, ['class' => 'form-control','placeholder'=>'Introduzca el asunto de su correo']) }}
							</div>
							<div class="form-group" >
								{{Form::label('mensaje', 'Mensaje*',['class'=>'control-label'])}}
								{{ Form::textArea('mensaje','',['class'=>'form-control', 'rows' => 2,'placeholder'=>'Agregue las anotaciones que crea nececesarias.'])}}
							</div>
						</div>
						<div class="form-group text-center">
							{{ Form::submit('Enviar', ['class' => 'tm-submit-btn','data-toggle'=>'modal','data-target'=>'#myModal' ] ) }}
						</div>

					</div>
                {{ Form::close() }}
			</div>			
		</div>
	</section>

<!-- FOOTER -->
@include('front.footer')
