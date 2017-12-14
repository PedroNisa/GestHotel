


<!-- PAGINA NOSOTROS -->


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
						<li><a href="{{URL::to('front/about')}}" class="active">Nosotros</a></li>
						<li><a href="{{URL::to('front/tours')}}">Un Paseo</a></li>
						<li><a href="{{URL::to('front/contact')}}">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>



<!-- SECCION BG GRIS -->
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- SLIDE -->
			<div class="flexslider flexslider-about effect2">
			  <ul class="slides">
			    <li>
			      <img src="{{asset('images/nosotros/bienvenido.jpg')}}" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">Bienvenido/a a Viña de Oro </h2>
			      	<p class="slider-description">Al centrarnos en las cosas pequeñas, hemos creado algo grande. Algo nuevo.
						Cada uno de nuestros espacios ha sido construido desde los cimientos con espíritu visionario y perspectiva de diseñador.
						Es una experiencia que da sensación de sofisticación eficiente.
						Cautivadora aunque con sentido. Cada detalle ha sido pensado para ofrecer solo lo maravilloso e imprescindible.</p>
			      	<div class="slider-social">
			      		<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="{{asset('images/nosotros/gracias.jpg')}}" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">¡Gracias por elegirnos!</h2>
			      	<p class="slider-description">Es para nosotros un placer poder ofrecerle nuestros servicios, es nuestro compromiso y principal motivación el que su estancia sea placentera, productiva e innolvidable.
						No deje de visitar los principales puntos turísticos, sienta la confianza de preguntar y solicitar en recepción y a todo nuestro personal todas la facilidades que necesite, y siéntase como en casa.
						Gracias, por preferirnos y hacer de Hoteles Viña de Oro su lugar para quedarse en Extremadura.<div class="slider-social">
			      		<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="{{asset('images/nosotros/salas.jpg')}}" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">Espacio para facilitar nuevas ideas</h2>
			      	<p class="slider-description">Cuando grandes mentes se unen, necesitan espacio para prosperar.
						Necesitan un espacio donde puedan unirse las ideas y las personas y alcanzar nuevas alturas y explorar nuevas profundidades.
						Hoteles Viña de Oro se asegura de hacer posible a empresarios y creativos que su empresa se haga realidad
						y ofrece un entorno que inspira y motiva.
						Desde los antiguos socios de negocios a las nuevas startups,
						Hoteles Viña de Oro se enorgullece de estimular el espíritu empresarial y la creatividad de nuestros huéspedes.<div class="slider-social">
			      		<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
			      		<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
			      	</div>
			      </div>			      
			    </li>
			    <li>
			      <img src="{{asset('images/nosotros/desayuno.jpg')}}" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">Un nuevo camino</h2>
			      	<p class="slider-description">Al diseñar Hoteles Viña de Oro, nos centramos en los aspectos esenciales
						de una estancia hermosa y hemos creado una experiencia como ninguna otra.
						Nuestro desayuno continental fue de inspiración europea.
						Sustituimos el servicio a la habitación con la versatilidad de un aperitivo rápido o platos de tapas por la noche.
						Nuestros bármanes son verdaderos espíritus urbanos que compartirán el entusiasmo único de la ciudad y todo lo que tiene para ofrecer.
						Se trata de una experiencia que ha sido diseñada para ofrecerte los aspectos esenciales.<div class="slider-social">
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

		<!-- CONTAINER QUIENES SOMOS -->
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Quienes Somos</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="{{asset('images/about-4.jpg')}}" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Pedro <span>( Director )</span></h3>
						<p class="margin-bottom-15 gray-text">La optimización de los procesos de trabajo y el producto para lograr satisfacer al cliente.</p>
						<div class="gray-text">
							<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="{{asset('images/about-5.jpg')}}" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Guada <span>( Jefa Recepción )</span></h3>
						<p class="margin-bottom-15 gray-text">La identificación y adopción de estrategias dirigidas hacia la fidelización de nuestros clientes.</p>
						<div class="gray-text">
							<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="{{asset('images/about-6.jpg')}}" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Remi <span>( Jefe Cocina )</span></h3>
						<p class="margin-bottom-15 gray-text">Despierta tus sentidos. Deleita tu paladar. Enriquece tu mente. Bienvenido a Guadalajara,</p>
						<div class="gray-text">
							<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="{{asset('images/about-7.jpg')}}" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Iñigo <span>( RR.HH )</span></h3>
						<p class="margin-bottom-15 gray-text">El compromiso responsable con los trabajadores a través de nuestro programa de fidelización del empleado.</p>
						<div class="gray-text">
							<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</section>

<!-- SECCION BG BLANCO -->
	<section class="tm-white-bg section-padding-bottom">

		<!-- CONTAINER QUE HACEMOS -->
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Que hacemos</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- Aside Opiniones -->
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
						<div class="tm-about-box-2 margin-bottom-30">
							<img src="{{asset('images/nosotros/Catas.jpg')}}" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Mucho más que vino</h3>
				                <p class="tm-about-box-2-description gray-text">Una ruta auténtica y novedosa que permitirá que viajen tus sentidos ya que te ofrece la posibilidad de realizar multitud de actividades, como visitar bodegas, realizar catas y compartir mesa y mantel con los mejores caldos maridados con los productos estrella de la gastronomía extremeña. Experiencias que puedes completar visitando el Museo de las Ciencias del Vino en Almendralejo. Y lo mejor es que puedes organizar tu viaje a medida.</p>
								<p class="tm-about-box-2-footer">Oficina de Turismo de Almendralejo</p>
							</div>		                
						</div>
						<div class="tm-about-box-2">
							<img src="{{asset('images/nosotros/almendralejo.jpg')}}" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Almendralejo, un pequeño universo</h3>
				                <p class="tm-about-box-2-description gray-text">La ciudad te ofrece la posibilidad de disfrutar de un turismo enológico, patrimonial y natural. Puedes visitar bodegas tradicionales, artesanales, modernas e innovadoras que te abren sus puertas y te invitan a probar sus vinos y descubrir su singular historia, además de edificios emblemáticos como el Palacio de Monsalud, la Parroquia o el Teatro Carolina Coronado, entre otros.
								<p class="tm-about-box-2-footer">Alcalde de Almendralejo</p>
							</div>		                
						</div>
					</div>
					<div class="tm-testimonials-box">
						<h3 class="tm-testimonials-title">Opiniones</h3>
						<div class="tm-testimonials-content">
							<div class="tm-testimonial">
								<p>"las habitaciones muy confortables la cama el aire acondicionado y el baño grande, desayuno bueno."</p>
		                		<strong class="text-uppercase">Lourdes</strong>
							</div>
							<div class="tm-testimonial">
								<p>"Lo mejor es la ubicación del hotel frente a la parada de autobus que te acercan al centro en pocos minutos. El personal es muy atento. La limpieza perfecta."</p>
			                	<strong class="text-uppercase">Amparo</strong>
							</div>
	       					<div class="tm-testimonial">
	       						<p>"Habitaciones grandes y cómodas.
									Cama king size muy cómoda para descansar.
									La limpieza de la habitación muy buena."<p>
	                			<strong class="text-uppercase" style="padding-bottom:2% ">Antonio</strong><br><br>
	       					</div>                	
						</div>
					</div>	
				</div>							
			</div>			
		</div>
	</section>

<!-- FOOTER -->
@include('front.footer')