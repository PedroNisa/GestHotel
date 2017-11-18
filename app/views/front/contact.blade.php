@include('Front.header')

		<!-- Header -->
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

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
			  <li>
				  <div class="tm-banner-inner">
					  <h1 class="tm-banner-title">Busca <span class="tm-yellow-text">el mejor</span> Descanso</h1>
					  <p class="tm-banner-subtitle">Para Días Interminables</p>
					  <a href="#more" class="tm-banner-link">Leer más</a>
				  </div>
				  <img src="{{asset('images/banner-1.jpg')}}" alt="Image" />
			  </li>
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="{{asset('images/world-map.png')}}" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Hoteles Viña de Oro</h2>
							<h3 class="slider-subtitle">Bienvenido a la sección de datos de contacto </h3>
							<p class="slider-description">Tiene alguna pregunta, comentario o queja? Puede encontrar las respuestas a sus preguntas aquí. Tanto si estás preparando una próxima estancia en nuestro hotel como si ya nos has visitado, siempre estamos * a tu disposición para responder a tus preguntas o comentarios: este espacio te está completamente dedicado.. <br><br>
								En esta sección, puede comunicarnos cualquier incidente que se produzca antes, durante o después de su estancia. Sus experiencias e impresiones son muy importantes para nosotros e intentaremos responderle a la mayor brevedad posible.</p>
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
	
	<!-- white bg -->
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
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
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
						<div class="form-group">
							<input type="text" id="contact_name" class="form-control" placeholder="NOMBRE" />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input type="text" id="contact_subject" class="form-control" placeholder="ASUNTO" />
						</div>
						<div class="form-group">
							<textarea id="contact_message" class="form-control" rows="6" placeholder="MENSAJE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Enviar</button>
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>


@include('front.footer')
