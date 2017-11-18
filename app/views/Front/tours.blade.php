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
			<li>
				<div class="tm-banner-inner">
					<h1 class="tm-banner-title">Te <span class="tm-yellow-text">Damos</span> La bienvenida</h1>
					<p class="tm-banner-subtitle">a una forma de vida inmejorable</p>
					<a href="#more" class="tm-banner-link">Leer más</a>
				</div>
				<img src="{{asset('images/banner-2.jpg')}}" alt="Image" />
			</li>
			<li>
				<div class="tm-banner-inner">
					<h1 class="tm-banner-title">Pura <span class="tm-yellow-text">y sana</span> Envidia</h1>
					<p class="tm-banner-subtitle">Disfruta y desconecta</p>
					<a href="#more" class="tm-banner-link">Leer más</a>
				</div>
				<img src="{{asset('images/banner-3.jpg')}}" alt="Image" />
			</li>
		</ul>
	</div>
</section>
<!-- gray bg -->
<section class="container tm-home-section-1" id="more">


	<div class="section-margin-top">
		<div class="row">
			<div class="tm-section-header">
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Our Tours</h2></div>
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/tours-03.jpg')}}" alt="image" class="img-responsive">
					<div class="tm-tours-box-1-info">
						<div class="tm-tours-box-1-info-left">
							<p class="text-uppercase margin-bottom-20">Ruta enológica</p>
							<p class="gray-text">Todo el año</p>
						</div>
						<div class="tm-tours-box-1-info-right">
							<p class="gray-text tours-1-description">LCerca de una veintena de municipios de Badajoz integran la Ruta del Vino Ribera del Guadiana, la oferta enoturística de Extremadura.</p>
						</div>
					</div>
					<div class="tm-tours-box-1-link">
						<div class="tm-tours-box-1-link-left">
							Duration: 3 días
						</div>
						<a href="#" class="tm-tours-box-1-link-right">
							400€
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/tours-04.jpg')}}" alt="image" class="img-responsive">
					<div class="tm-tours-box-1-info">
						<div class="tm-tours-box-1-info-left">
							<p class="text-uppercase margin-bottom-20">Ruta gastronómica</p>
							<p class="gray-text">26 March 2084</p>
						</div>
						<div class="tm-tours-box-1-info-right">
							<p class="gray-text tours-1-description">Extremadura ha recibido la herencia de un crisol de culturas y esa particularidad se ve reflejada en sus fogones.</p>
						</div>
					</div>
					<div class="tm-tours-box-1-link">
						<div class="tm-tours-box-1-link-left">
							Duration: 2 días
						</div>
						<a href="#" class="tm-tours-box-1-link-right">
							200€
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/tours-05.jpg')}}" alt="image" class="img-responsive">
					<div class="tm-tours-box-1-info">
						<div class="tm-tours-box-1-info-left">
							<p class="text-uppercase margin-bottom-20">Restos Arqueológicos</p>
							<p class="gray-text">Todo el año</p>
						</div>
						<div class="tm-tours-box-1-info-right">
							<p class="gray-text tours-1-description">Mérida fue una de las principales capitales del Imperio Romano, cuenta con un importante patrimonio monumental de ese período. </p>
						</div>
					</div>
					<div class="tm-tours-box-1-link">
						<div class="tm-tours-box-1-link-left">
							Duration: 2 dias
						</div>
						<a href="#" class="tm-tours-box-1-link-right">
							200€
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/tours-06.jpg')}}" alt="image" class="img-responsive">
					<div class="tm-tours-box-1-info">
						<div class="tm-tours-box-1-info-left">
							<p class="text-uppercase margin-bottom-20">Ruta ornitológica</p>
							<p class="gray-text">Todo el año</p>
						</div>
						<div class="tm-tours-box-1-info-right">
							<p class="gray-text tours-1-description">La propuesta es una ruta larga, debido a la dispersión de lugares de interés ornitológico y los enlaces necesarios entre éstos.</p>
						</div>
					</div>
					<div class="tm-tours-box-1-link">
						<div class="tm-tours-box-1-link-left">
							Duration: 3 días
						</div>
						<a href="#" class="tm-tours-box-1-link-right">
							300€
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Paquetes Especiales</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/index-03.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FERIA GANADERA</h3>
							<img src="{{asset('images/rating.png')}}" alt="image" class="margin-bottom-5">
							<p>28 Septiembre 2018</p>
						</div>						
						<a href="#" class="tm-tours-box-2-link">Ver Tríptico</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/index-04.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FERIA DEL JAMÓN</h3>
							<img src="{{asset('images/rating.png')}}" alt="image" class="margin-bottom-5">
							<p>09 Septiembre 2018</p>
						</div>						
						<a href="#" class="tm-tours-box-2-link">Ver Tríptico</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/index-05.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FIESTA DE LA VENDIMIA</h3>
							<img src="{{asset('images/rating.png')}}" alt="image" class="margin-bottom-5">
							<p>07 Agosto 2018</p>
						</div>						
						<a href="#" class="tm-tours-box-2-link">Ver Tríptico</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/index-06.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">CEREZO EN FLOR</h3>
							<img src="{{asset('images/rating.png')}}" alt="image" class="margin-bottom-5">
							<p>20 Marzo 2018</p>
						</div>						
						<a href="#" class="tm-tours-box-2-link">Ver Tríptico</a>
					</div>
				</div>
			</div>

		</div>
	</section>
@include('front.footer')