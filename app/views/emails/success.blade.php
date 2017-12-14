 

<!-- VISTA DE AGRADECIMIENTO SI EL CLIENTE ENVIA UN CORREODESDE LA WEB O HACE UNA RESERVA DESDE LA MISMA -->

@include('Front.header')
        <!-- Banner -->
<section class="tm-banner">
    <!-- Flexslider -->
    <div class="flexslider flexslider-banner">
        <ul class="slides">
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Gracias por su interés</h1>
                    <p class="tm-banner-subtitle">Tu mensaje ha sido enviado y pronto responderemos a tu solicitud.</p>
                    <a href="{{URL::to('front/index')}}" class="tm-banner-link">Continuar Navegando</a>
                </div>
                <img src="{{asset('images/banner-3.jpg')}}" alt="Banner 3" />
            </li>
        </ul>
    </div>
</section>

@include('Front.footer')