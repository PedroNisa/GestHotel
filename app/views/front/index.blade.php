@include('Front.header')


		<!-- NAVBAR -->
<div class="tm-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
				<a href="{{URL::to('front/index')}}" class="tm-site-name">Hoteles Viña de Oro</a>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-9">
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="tm-nav">
					<ul>
						<li><a href="{{URL::to('front/index')}}" class="active">Home</a></li>
						<li><a href="{{URL::to('front/about')}}">Nosotros</a></li>
						<li><a href="{{URL::to('front/tours')}}">Un Paseo</a></li>
						<li><a href="{{URL::to('front/contact')}}">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
	
	<!-- SLIDE -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
			  <li>
				  <img src="{{asset('images/banner-4.jpg')}}" alt="Image" />
			  </li>
			  <li>
				  <img src="{{asset('images/banner-1.jpg')}}" alt="Image" />
			  </li>
		    <li>
				<img src="{{asset('images/banner-2.jpg')}}" alt="Image" />
		    </li>
		    <li>
			    <img src="{{asset('images/banner-3.jpg')}}" alt="Image" />
		    </li>
		    <li>
			    <img src="{{asset('images/banner-5.jpg')}}" alt="Image" />
		    </li>
		  </ul>
		</div>
	</section>

	<!-- SECCION BG GRIS -->
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<!-- Nav tabs -->
				<div class="tm-home-box-1" style="width: 100%">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Reservas</a>
					    </li>
					</ul>

					<!-- FORMULARIO DE RESERVAS -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								{{ Form::open(['route' => 'send', 'method' => 'post', 'class'=>'hotel-search-form', 'id' => 'reserva']) }}
									<div class="tm-form-inner">
										<div class="form-group  col-md-6 " style="float: left">
											{{ Form::label('nombreCompleto', 'Nombre y Apellidos*') }}
											{{ Form::text('nombreCompleto', null, ['class' => 'form-control','placeholder'=>'Introduzca su nombre y apellidos','id' => 'nombreCompleto']) }}	
							          	</div>
										<div class="form-group  col-md-6 " style="float: left" >
											{{ Form::label('dni', 'DNI*') }}
											{{ Form::text('dni', null, ['class' => 'form-control','placeholder'=>'Introduzca su dni' ]) }}											
										</div>
										<div class="form-group  col-md-6 " style="float: left">
											{{ Form::label('email', 'E-Mail*') }}
											{{ Form::email('email', null, ['class' => 'form-control','placeholder'=>'Introduzca su email' ]) }}
										</div>
										<div class="form-group  col-md-6 " style="float: left">
											{{Form::label('', 'Habitación*',['class'=>'control-label'])}}
											    <select name="id_tipo_habitacion" class="form-control" >
													<option value="">Elija el tipo de habitación</option>
													@foreach(TipoHabitacion::orderBy('nombre','asc')->get() as $row)
														<option value="{{$row->id}}">{{$row->nombre}}</option>
													@endforeach
												</select>
										</div>
										<div class="form-group col-md-6" >
											{{Form::label('descripcion', 'Descripción',['class'=>'control-label'])}}
											{{ Form::textArea('descripcion','',['class'=>'form-control', 'rows' => 4,'placeholder'=>'Agregue las anotaciones que crea nececesarias.'])}}
										</div>
										<div class="form-group" style="margin-top: 15%">

										    <label for="fechaEntrada" style=" padding-left: 1.5%"> Entrada :</label>
											<div class='input-group date-in col-md-4 ' id='datetimepicker1'  style=" padding: 0 1.5% 1.5%">
												{{ Form::text('fechaEntrada', '', ['class' => 'form-control','placeholder'=>'entrada','id'=>'fechaEntrada' ]) }}
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
											</div>
											<label for="fechaSalida" style=" padding-left: 1.5%">Salida :</label>
											<div class='input-group date-out col-md-4 col-md-offset-2' id='datetimepicker2'  style=" padding:  0 1.5%">
												{{ Form::text('fechaSalida', '', ['class' => 'form-control','placeholder'=>'salida','id'=>'fechaSalida' ]) }}
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
											</div>											
										</div>

									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
										{{ Form::submit('Enviar', ['class' => 'tm-yellow-btn','data-toggle'=>'modal','data-target'=>'#myModal','id' => 'btn_reserva' ] ) }}
						            </div>
								{{ Form::close() }}
							</div>
					    </div>
					</div>
				</div>								
			</div>
		</div>

		<br><br><br>

		<!-- CONTAINER TARIFAS -->
		<div class="section-margin-top" id="tarifas">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Tarifas</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">
						<img src="{{asset('images/index/sencilla.jpg')}}" alt="image" class="img-responsive">
						<h3><strong>individual</strong></h3>
						<p class="tm-date"><strong>desde 45€</strong></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">
						<img src="{{asset('images/index/doble.jpg')}}" alt="image" class="img-responsive">
						<h3>Doble</h3>
						<p class="tm-date"><strong>desde 50€</strong></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
						<img src="{{asset('images/index/triple.jpg')}}" alt="image" class="img-responsive">
						<h3>triple</h3>
						<p class="tm-date"><strong>según disponibilidad 90€</strong></p>
					</div>
				</div>
			</div>

			<div class="section-margin-top" id="tarifas">
				<div class="row">
					<div class="tm-section-header">
						<div class="col-lg-4 col-md-4 col-sm-4"><hr></div>
						<div class="col-lg-4 col-md-4 col-sm-4"><hr></div>
						<div class="col-lg-4 col-md-4 col-sm-4"><hr></div>
					</div>
				</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="{{asset('images/index/suits.jpg')}}" alt="image" class="img-responsive">
						<h3>suits junior</h3>
						<p class="tm-date"><strong>hasta 4 personas 360€</strong></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="{{asset('images/index/kingsize.jpg')}}" alt="image" class="img-responsive">
						<h3>doble con cama kingsize</h3>
						<p class="tm-date"><strong>desde 100€</strong></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2 ">
					    <img src="{{asset('images/index/matrim.jpg')}}" alt="image" class="img-responsive">
						<h3>doble con cama de matrimonio</h3>
						<p class="tm-date"><strong>desde 80€</strong></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Precios con impuestos, además, el desayuno está incluido en todas nuestras habitaciones.</p>
				</div>
			</div>			
		</div>
	</section>		
	
	<!-- SECCION BG BLANCA -->
	<section class="tm-white-bg section-padding-bottom" id="restaurante">
		<div class="container">
			<div class="row">

			<!-- CONTAINER NUESTRO RESTAURANTE -->
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Nuestro Restaurante</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<div class="col-lg-6">
					<div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="{{asset('images/index/plato1.JPG')}}" alt="image" class="img-responsive">
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">Una pequeña introducción a la gastonomía extremeña, sencilla en su elaboración, pero basada en la calidad de sus materias primas.</p>
						</div>
					</div>					
			     </div>
			     <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="{{asset('images/index/plato2.jpg')}}" alt="image" class="img-responsive">
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">erivados del cerdo ibérico criado en la dehesa, cordero, deliciosos quesos y tortas,  pimentón de La Vera, aceites de oliva, miel,
							<p class="tm-home-box-3-description">erivados del cerdo ibérico criado en la dehesa, cordero, deliciosos quesos y tortas,  pimentón de La Vera, aceites de oliva, miel,
								buenos vinos..</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-6">
				    <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="{{asset('images/index/vino.jpg')}}" alt="image" class="img-responsive">
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">Los vinos extremeños son sin duda el complemento estrella de una gastronomía singular. </p>
						</div>						
					</div>
			    </div>
			    <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="{{asset('images/index/plato4.jpg')}}" alt="image" class="img-responsive">
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">La pastelería extremeña ha ido adquiriendo diferentes matices al dispersarse por las diferentes comarcas de la región.</p>
						</div>						
					</div>
			   	</div>
			</div>		
		</div>
	</section>

	<!-- FOOTER -->

@include('Front.footer')

