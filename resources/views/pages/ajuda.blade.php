@extends('layouts.help')

@section('title', 'Ajuda')

@section('content')


<header>
    <h1>Central de Ajuda</h1>
    <p>Como podemos ajudar você hoje?</p>
  </header>
  <div class="container">
    <div class="section">
      <h2>Perguntas Frequentes (FAQ)</h2>
      <div class="faq-item">
        <button onclick="toggleAnswer(this)">Como criar uma conta?</button>
        <div class="faq-answer">Clique em "Cadastrar" no topo da página e preencha os dados solicitados.</div>
      </div>
      <div class="faq-item">
        <button onclick="toggleAnswer(this)">Quais formas de pagamento são aceitas?</button>
        <div class="faq-answer">Aceitamos cartões de crédito, débito e PIX.</div>
      </div>
    </div>
    <div class="section">
      <h2>Fale com Suporte</h2>
      <p>Entre em contato por e-mail ou pelo chat ao vivo disponível no canto inferior direito da tela.</p>
    </div>

   <lottie-player
        src="{{ asset('animations/help.json') }}"
        background="transparent"
        speed="0.7"
        style="width: 600px; height: 600px; margin-left: 25vh;"
        loop
        autoplay>
    </lottie-player>

  </div>

  


@endsection