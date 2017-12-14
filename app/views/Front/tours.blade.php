

<!-- PAGINA UN PASEO -->

<!-- INCLUYE LOS ESTILOS Y SCRIPTS -->

@include('Front.header')

<!-- NAVBAR -->
<div class="tm-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
				<a href="#" class="tm-site-name">Hoteles Viña de Oro</a>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-9">
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="tm-nav">
					<ul>
						<li><a href="{{URL::to('front/index')}}">Home</a></li>
						<li><a href="{{URL::to('front/about')}}">Nosotros</a></li>
						<li><a href="{{URL::to('front/tours')}}" class="active">Un Paseo</a></li>
						<li><a href="{{URL::to('front/contact')}}">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


<!-- SECCION BG GRIS -->
<section class="container tm-home-section-1" id="more">

	<!-- CONTAINER NUESTRAS ESCAPADAS -->
	<div class="section-margin-top">
		<div class="row">
			<div class="tm-section-header">
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Nuestras escapadas</h2></div>
				<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('/images/rutas/vino.jpg')}}" alt="image" class="img-responsive">
					<div class="tm-tours-box-1-info">
						<div class="tm-tours-box-1-info-left">
							<p class="text-uppercase margin-bottom-20">Ruta enológica</p>
							<p class="gray-text">Todo el año</p>
						</div>
						<div class="tm-tours-box-1-info-right">
							<p class="gray-text tours-1-description">Cerca de una veintena de municipios de Badajoz integran la Ruta del Vino Ribera del Guadiana, la oferta enoturística de Extremadura.</p>
						</div>
					</div>
					<div class="tm-tours-box-1-link">
						<div class="tm-tours-box-1-link-left">
							Duration: 3 días
						</div>
						<p class="tm-tours-box-1-link-right">
							400€
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/rutas/gastronomia.jpg')}}" alt="image" class="img-responsive">
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
						<p class="tm-tours-box-1-link-right">
							200€
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/rutas/teatro.jpg')}}" alt="image" class="img-responsive">
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
						<p class="tm-tours-box-1-link-right">
							200€
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="tm-tours-box-1">
					<img src="{{asset('images/rutas/ornitologica.jpg')}}" alt="image" class="img-responsive">
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
						<p class="tm-tours-box-1-link-right">
							300€
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="home-description">Todas nuestras escapadas están garantizadas, además, les acompañará un guia en todo momento, si necesitas más información, acerquese a nuestra recepción, o <a href="http://www.facebook.com/peminisa" target="_parent">visite</a> nuestro facebook, donde encontrará una amplia oferta de salidas y excursiones.</p>
			</div>
		</div>
	</div>
</section>

<!-- SECCION BG BLANCO -->
	<section class="tm-white-bg section-padding-bottom">

		<!-- CONTAINER PROXIMOS PAQUETES -->
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Próximos Paquetes</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/rutas/zafra.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FERIA GANADERA</h3>
							<p>28 Septiembre 2018</p>
						</div>						
						<a href="http://www.figzafra.es/" target="_blank" class="tm-tours-box-2-link">más info...</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/rutas/jamon.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FERIA DEL JAMÓN</h3>
							<p>09 Septiembre 2018</p>
						</div>						
						<a href="http://www.salondeljamoniberico.com/" target="_blank" class="tm-tours-box-2-link">más info...</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/rutas/vendimia.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">FIESTA DE LA VENDIMIA</h3>
							<p>07 Agosto 2018</p>
						</div>						
						<a href="http://www.turismoextremadura.com/viajar/turismo/es/explora/Fiesta-de-la-Vendimia-00001/" target="_blank" class="tm-tours-box-2-link">más info...</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{asset('images/rutas/cerezo.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">CEREZO EN FLOR</h3>
							<p>20 Marzo 2018</p>
						</div>						
						<a href="http://www.turismovalledeljerte.com/cerezo-en-flor" target="_blank" class="tm-tours-box-2-link">más info...</a>
					</div>
				</div>
			</div>

		</div>
	</section>
<!-- FOOTER -->
@include('front.footer')