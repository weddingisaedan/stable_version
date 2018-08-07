@extends('layouts.app')
@section('content')

<div class="">
	<a href="#couple" id="down" role="button" class="text-center button-down">Descer <br> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
	<h3 class="text-top text-center">Eu, Você e Deus.</h3>
	<section class="full-top" id="home"> 
	</section>
</div>

<section id="couple">
	<div class="row">
		<img src="img/flower1.png" class="img-responsive img-flower1" alt="Responsive image"> 
		<h2 class="text-center h2-custom">A Noiva e o Noivo</h2>
		<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Si u mundo tá muito paradis?.</h3>
	</div>
	<div class="row text-center row-couple">
		<div class="col-sm-4">
			<img src="img/isa.jpg" class="img-responsive img-bride" alt="">
			<h3 class="text-center h4-custom">Isabella <a href=""><i aria-hidden="true" class="fa fa-instagram"></i></a></h3>
			<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Atirei o pau no gatis, per gatis num morreus. A ordem dos tratores não altera o pão duris. Cevadis im ampola pa arma uma pindureta.</h3>
		</div>
		<div class="col-sm-1 text-center wedding-separator">
			<h3 class="text-center text-separator"> &amp </h3>
		</div>
		<div class="col-sm-4">
			<img src="img/dan.jpg" class="img-responsive img-groom" alt="">
			<h3 class="text-center h4-custom">Danilo <a href=""><i aria-hidden="true" class="fa fa-instagram"></i></a></h3>
			<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Atirei o pau no gatis, per gatis num morreus. A ordem dos tratores não altera o pão duris. Cevadis im ampola pa arma uma pindureta.</h3>
		</div>
	</div>
</section>

<!-- Countdown -->
<section id="countdown" class="countdown">
	<div class="container">
		<countdown></countdown>
	</div>
</section>

<section id="text-countdown" class="text-countdown">
	<div class="container">
		<text-countdown></text-countdown>
	</div>
</section>

<section class="img-phrase">	
	<div class="text-center phrase">Eu quero te abraçar assim como eu abraço a minha fé, eu quero construir a estrada do futuro desde já, </br> eu quero me unir na benção que o amigo vai nos dar, eu quero estar e ser contigo em Deus.
	</div>
</section>


	<div class="container">
	<div class="row" id="where">
		<img src="img/flower1.png" class="img-responsive img-flower1" alt="Responsive image"> 
		<h2 class="text-center h2-custom">Quando e Aonde?</h2>
		<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerita de bolis, mais bolis eu num gostis. Cevadis im ampola pa arma uma pindureta.</h3>
	</div>
	<div class="col-sm-6">
		<div class="card">
			<img src="img/paroquia12.png" class="img-responsive img-church" alt="">
			<h3 class="text-center h4-custom">Cerimônia <a href=""><i aria-hidden="true" class="fa fa-facebook"></i></a></h3>
			<h3 class="text-center h3-custom">Paróquia Nossa Senhora da Boa Esperança. </br></br> <p> Av. Camilo di Lellis, 970 - Centro, Pinhais - PR, 83323-000 </p> <p>Início às 17 Horas.</p> </br></br> </h3> 
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card">
			<img src="img/vallejo.jpg" class="img-responsive img-recep" alt="">
			<div class="card">
			<h3 class="text-center h4-custom">Recepção <a href=""><i aria-hidden="true" class="fa fa-facebook"></i></a></h3>
			<h3 class="text-center h3-custom">Churrascaria Vallejo. </br></br> <p>Rod. Dep. João Lepoldo Jacomel, 12955 - Maria Antonieta, Pinhais - PR, 83323-125</p> <p>Início logo após a Cerimônia.</p> </br></br> </h3>
			</div>
		</div>
	</div>
	<div id="map">
	</div>

<section id="confirm" class="confirm">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-10 mx-auto">
				<div class="card-rsvp">
					<div class="content">
						<h3 class="h2-custom">
						  Confirme sua presença:
						</h3> 
						<form class="form">
							<div class="form-group">
								<label for="formName" class="h3-custom">
									Seu nome completo
									<span tooltip="Obrigatório" class="required">*</span>
								</label> 
								<input type="text" id="formName" name="name" placeholder="Seu nome completo" value="" required="required" class="form-control form-name"> 
							</div> 
							<br> 
							<div class="form-check">
								<label class="h3-custom">
									<input type="radio" name="confirmation_id" id="formParticipateYes" value="1" checked="checked" class="form-check-input">
									Sim! Eu vou estar lá
								</label>
							</div> 
							<div class="form-check">
								<label class="h3-custom">
									<input type="radio" name="confirmation_id" id="formParticipateGuestsYes" value="2" class="form-check-input">
									Sim! Eu vou estar lá, com todos à quem meu convite foi destinado
								</label>
							</div> 
							<div class="form-check">
								<label class="h3-custom">
									<input type="radio" name="confirmation_id" id="participateNo" value="3" class="form-check-input">
									Desculpe. Não vou poder participar
								</label>
							</div>
							<div class="row py-2 align-items-baseline">
							</div> 
							<br> 
							<div class="form-group text-center">
								<button type="submit" id="submitFormButton" data-loading-text="Enviando..." autocomplete="off" role="button" class="btn btn-lg btn-outline-secondary h3-custom">
								Confirmar Presença
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section id="gifts">
<img src="img/flower1.png" class="img-responsive img-flower1" alt="Responsive image">
<div class="lists"><h3 class="h2-custom text-center">Sugestão de Presentes</h3> 
	<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit.</h3>
	<a href="" target="_blank"><img src="img/havan-logo.png" alt="" class="img-fluid gift-list-img"></a> 
</div>
</section>

<div class="container">
    <div class="row">
	<h3 class="text-center h3-custom">Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit.</h3>
        <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
                <i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                    <span class="amount">100
                        <span class="currency">$</span>
                    </span>
				</div>		
				<a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-51d2b233-bfad-49ac-bdc8-f1355e45a1a3" name="MP-payButton" class="pricingTable-signup">Presentear</a>
				<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
				</script>
            </div>
        </div>
 
        <div class="col-md-3 col-sm-6">
            <div class="pricingTable">
			<i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                    <span class="amount">250
                        <span class="currency">$</span>
                    </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-366c7ecf-76d7-44c0-834e-56b8f4ef565b" name="MP-payButton" class="pricingTable-signup">Presentear</a>
				<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
				</script>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
            <div class="pricingTable">
				<i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                    <span class="amount">300
                        <span class="currency">$</span>
                    </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-bc30ce39-1842-4456-8479-69593e00ea05" name="MP-payButton" class="pricingTable-signup">Presentear</a>
				<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
				</script>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
            <div class="pricingTable">
				<i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                    <span class="amount">500
                        <span class="currency">R$</span>
                    </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-df78fe3c-9fec-4936-bbf6-522bfac0ccfa" name="MP-payButton" class="pricingTable-signup">Presentear</a>
				<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
				</script>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<section class="img-phrase2">	
	<div class="text-center phrase2">Eu quero te abraçar assim como eu abraço a minha fé, eu quero construir a estrada do futuro desde já, </br> eu quero me unir na benção que o amigo vai nos dar, eu quero estar e ser contigo em Deus.
	</div>
</section>

<!--
<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/320926380&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
-->

@endsection
