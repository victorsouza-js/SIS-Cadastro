@extends('layouts.contact')

@section('title', 'Entre em contato com a gente')

@section('content')

<section class="contact">

    <div class="animation">
        <lottie-player
            src="{{ asset('animations/animation-2.json') }}"
            background="transparent"
            speed="0.7"
            style="width: 600px; height: 600px;"
            loop
            autoplay>
        </lottie-player>
    </div>

    <div class="container">
        <h2>Entre em Contato</h2>
        <div class="chat-box" id="chatBox">
            <div class="message bot-message">Olá! Como posso ajudar?</div>
        </div>
        <input type="text" id="userInput" placeholder="Digite sua mensagem..." />
        <button onclick="sendMessage()">Enviar</button>
    </div>

    


</section>

@endsection