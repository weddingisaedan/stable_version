<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Isa & Dan</title>

  <!-- Scripts -->
	<script>window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>
  <div id="app">

    @include('home.header')

    <section id="sectionFirst">
      <div class="center-content d-flex align-items-center justify-content-center">
        <h2 class="text-center">
          Eu, Você e Deus.
        </h2>
      </div>
      <div class="bottom-content d-flex justify-content-center w-100">
        <a href="#"
          class="text-center">
          Descer <br>
          <i class="fas fa-angle-down"></i>
        </a>
      </div>
    </section>

    <section id="sectionSecond"
      class="py-4">
      <div class="container">

        <div class="text-center py-4">
          <img src="img/flower1.png" class="img-fluid" alt="Responsive image">
        </div>

        <h2 class="title py-2 text-center">A Noiva e o Noivo</h2>
        <p class="pb-2 tie text-center text-muted">
          Deus desenhou e escreveu a nossa história muito antes do que sonhávamos. Nossas vidas agora serão uma só os sonhos de Deus também são os nossos. Uma só carne, um só espírito e uma só vida.
        </p>

        <div class="row align-items-center text-center py-4">
          <div class="col-12 col-lg-5">
            <img src="img/isa.jpg"
              class="img-fluid img-engaged"
              alt="Foto da Noiva" />
            <div class="mt-4 d-flex align-items-center justify-content-center">
              <span class="engaged-name">Isabella</span>
              <a href="https://www.instagram.com/bellaisapinheiro/"
                class="ml-2"
                target="_blank">
                <i aria-hidden="true" class="fab fa-instagram"></i>
              </a>
            </div>
            <p class="text-center engaged-description">
              Agradeço a Deus por ter te colocado em minha vida. Por me trazer as maiores alegrias.
              E sempre será: Eu, Você e Deus. Meu presente de Deus: Danilo.
            </p>
          </div>
          {{-- divider --}}
          <div class="col-12 col-lg-2">
            <span class="engaged-divider">&amp</span>
          </div>
          <div class="col-12 col-lg-5">
            <img src="img/dan.jpg"
              class="img-fluid img-engaged"
              alt="Foto do Noivo" />
            <div class="mt-4 d-flex align-items-center justify-content-center">
              <span class="engaged-name">Danilo</span>
              <a href="https://www.instagram.com/danilodcordeiro/"
                class="ml-2"
                target="_blank">
                <i aria-hidden="true" class="fab fa-instagram"></i>
              </a>
            </div>
            <p class="text-center engaged-description">
              Quando tudo era cinza e sem sentido, Deus me trouxe um presente,
              o presente que veio para tornar os meus dias os mais felizes,
              Agora seremos um, um amor infinito em Cristo;
              Esse presente se chama Isabella.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="countdown"
      class="py-4">
      <div class="container">
        <vue-countdown></vue-countdown>
      </div>
    </section>

    <section id="sectionThree"
      class="img-phrase d-flex align-items-center justify-content-center py-4">
      <div class="container">
        <div class="bg-phrase py-4 px-3">
          <p class="text-center">
              Eu quero te abraçar assim como eu abraço a minha fé, eu quero construir a estrada do futuro desde já, eu quero me unir na benção que o amigo vai nos dar, eu quero estar e ser contigo em Deus.
            </p>
        </div>
      </div>
    </section>

    <section id="sectionFour"
      class="py-4">
      <div class="container">
        <div class="text-center py-4">
          <img src="img/flower1.png" class="img-fluid" alt="Responsive image">
        </div>

        <h2 class="title py-2 text-center">Quando e Onde?</h2>

        <p class="pb-2 tie text-center text-muted">
          Esta é uma data muito importante para nós, por isso, preparamos tudo com muito cuidado e estamos muito contentes por partilhar este momento com você nessa cerimônia especial!
        </p>
        <p class="pb-2 tie text-center text-muted">
          Depois de celebrarmos nossa união preparamos um delicioso jantar e, mais tarde, prepare-se, haverá uma grande festa.
        </p>
        <p class="pb-2 tie text-center text-muted">
          Abaixo os endereços/informações dos locais de cada momento:
        </p>

        <div class="pt-4 pb-2">
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/paroquia12.png') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title text-center">
                  Cerimônia
                </h4>
                <p class="card-text text-center">
                  <h5 class="text-center">Paróquia Nossa Senhora da Boa Esperança</h5>
                  <address class="text-center text-muted">
                    Av. Camilo di Lellis, 970 - Centro, Pinhais - PR, 83323-000
                  </address>
                  <h6 class="text-center">Início às 17 Horas.</h6>
                </p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top img-fluid"
                src="{{ asset('img/vallejo.jpg') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title text-center">
                  Recepção
                </h4>
                <p class="card-text text-center">
                  <h5 class="text-center">Churrascaria Vallejo</h5>
                  <address class="text-center text-muted">
                    Rod. Dep. João Leopoldo Jacomel, 12955 - Centro, Pinhais - PR, 83323-125
                  </address>
                  <h6 class="text-center">Início logo após a Cerimônia.</h6>
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="sectionFive">
      <h3 class="text-center">MAPA</h3>
      <div id="map"></div>
    </section>

    <section id="sectionSix"
      class="py-4">
      <div class="container py-4">
        <div class="card py-4">
          <div class="card-title">
            <div class="text-center py-4">
              <img src="img/flower1.png" class="img-fluid" alt="Responsive image">
            </div>
            <h4 class="text-center title">
              Algumas dicas para você:
            </h4>
          </div>
          <div class="card-body">
            <ul class="tips list-unstyled">
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Nos preocupamos com a sua segurança. Venha tranqüilo, o espaço possui estacionamento próprio;
              </li>
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Para  te ajudar a definir o modelito escolhemos o estilo de roupa para o evento como "Traje Social";
              </li>
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Durante a recepção será oferecido bebida alcóolica. Se beber, não dirija!
              </li>
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Tire muitas fotos e ajude a eternizar esse momento (queremos ver todas). Quando postar use a hashtag <strong class="ml-1">#isaedan2018</strong>
              </li>
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Antes de ir embora nos procure para tirarmos uma foto juntos. Queremos agradecer a cada convidado pessoalmente;
              </li>
              <li class="li-tips d-flex align-items-baseline text-center justify-content-center pb-3">
                <i class="fa fa-heart mr-1 text-danger"></i>
                Aproveite cada instante conosco. Estamos preparando em detalhes essa noite e queremos que você se sinta feliz em partilhar esse momento único em nossa vida.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="sectionSeven"
      class="p-4 bg-light">
      <div class="container">
        <div class="text-center py-4">
          <img src="img/flower1.png" class="img-fluid" alt="Responsive image">
        </div>
        <h2 class="title py-2 text-center">
          Confirme sua presença
        </h2>
        <form class="form py-4"
          action="#">
          @csrf
          <div class="form-group col-12 col-lg-8 mx-auto pb-3">
            <label for="formName">
              Seu nome completo
              <span tooltip="Obrigatório" class="required">*</span>
            </label>
            <input type="text"
              id="formName"
              name="name"
              placeholder="Seu nome completo"
              value=""
              required="required"
              class="form-control" />
          </div>

          <div class="form-group col-12 col-lg-8 mx-auto pb-3">
            <div class="form-check">
              <label>
                <input type="radio"
                  name="confirmation_id"
                  id="formParticipateYes"
                  value="1"
                  checked="checked"
                  class="form-check-input">
                Sim! Eu vou estar lá
              </label>
            </div>
            <div class="form-check">
              <label>
                <input type="radio"
                  name="confirmation_id"
                  id="formParticipateGuestsYes"
                  value="2"
                  class="form-check-input">
                Sim! Eu vou estar lá, com todos à quem meu convite foi destinado
              </label>
            </div>
              <div class="form-check">
                <label class="h3-custom">
                  <input type="radio"
                    name="confirmation_id"
                    id="participateNo"
                    value="3"
                    class="form-check-input">
                  Desculpe. Não vou poder participar
                </label>
              </div>
          </div>

          <div class="form-group text-center col-12 col-lg-8 mx-auto pb-3 pt-2">
            <button type="submit"
              id="submitFormButton"
              data-loading-text="Enviando..."
              autocomplete="off"
              role="button"
              class="btn btn-lg btn-outline-secondary">
              Confirmar Presença
            </button>
          </div>
        </form>
      </div>
    </section>

    <section id="sectionEight">
      <div class="container py-4">
        <div class="text-center py-4">
          <img src="img/flower1.png" class="img-fluid" alt="Responsive image">
        </div>
        <h2 class="title py-2 text-center">
          Sugestão de Presentes
        </h2>
        <p class="pb-2 tie text-center text-muted">
          Nos sentimos muito gratos com sua presença, para nós é um presente poder celebrar com você essa data tão importante em nossas vidas.
          <br>
          Porém se você deseja nos presentear, vamos adorar também. Para facilitar sua vida temos algumas sugestões de presente aqui:
        </p>
        <p class="pb-2 tie text-center text-muted">
          A nossa lista de presentes encontra-se na Havan, você pode clicar na imagem abaixo ou ir fisicamente em qualquer loja Havan;
        </p>

        <div class="row text-center py-4">
          <div class="col">
            <a href="https://lista.havan.com.br/Convidado/ItensListaPresente/324227" target="_blank">
              <img src="img/havan-logo.png"
                alt="Logo Havan"
                class="img-fluid"
                style="height: 120px;">
            </a>
          </div>
        </div>

        <div class="gift-cards py-4">
          <div class="title pt-4 pb-2 d-flex align-items-center justify-content-center">
            <i aria-hidden="true" class="fa fa-gift mr-2"></i>
            <h3>Vale-Presentes</h3>
          </div>

          <div class="row">
            <div class="col-12 col-md-3 my-4">
              <div class="pricingTable">
                <i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                  <span class="amount">
                    <span class="currency">R$</span>
                    100
                  </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-51d2b233-bfad-49ac-bdc8-f1355e45a1a3" class="pricingTable-signup" target="_blank">
                  Presentear
                </a>
              </div>
            </div>
            <div class="col-12 col-md-3 my-4">
              <div class="pricingTable">
                <i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                  <span class="amount">
                    <span class="currency">R$</span>
                    250
                  </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-366c7ecf-76d7-44c0-834e-56b8f4ef565b" class="pricingTable-signup" target="_blank">
                  Presentear
                </a>
              </div>
            </div>
            <div class="col-12 col-md-3 my-4">
              <div class="pricingTable">
                <i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                  <span class="amount">
                    <span class="currency">R$</span>
                    300
                  </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-bc30ce39-1842-4456-8479-69593e00ea05" class="pricingTable-signup" target="_blank">
                  Presentear
                </a>
              </div>
            </div>
            <div class="col-12 col-md-3 my-4">
              <div class="pricingTable">
                <i aria-hidden="true" class="fa fa-gift"></i>
                <div class="price-value">
                  <span class="amount">
                    <span class="currency">R$</span>
                    500
                  </span>
                </div>
                <a mp-mode="dftl" href="https://www.mercadopago.com/mlb/checkout/start?pref_id=337793108-df78fe3c-9fec-4936-bbf6-522bfac0ccfa" class="pricingTable-signup" target="_blank">
                  Presentear
                </a>
              </div>
            </div>
		      </div>
        </div>
      </div>
    </section>

    <section id="sectionNine"
      class="img-phrase2 d-flex justify-content-center align-items-center">
      <div class="container-fluid">
        <div class="box-phrase2 center-content py-4">
          <p class="text-center text-phrase2">
            Eu quero te entender, eu quero te levar pra conhecer. Os vales do Senhor, aonde corre o leite, o mel e o amor,eu quero a tua mão, fazer morada no teu coração, eu quero estar e ser contigo em Deus.
          </p>
        </div>
      </div>
    </section>

    <footer class="d-flex align-items-center justify-content-center py-4">
      <h6>#isaedan2018</h6>
    </footer>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous">
  </script>
</body>
</html>