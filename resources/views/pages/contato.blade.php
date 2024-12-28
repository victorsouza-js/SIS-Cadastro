@extends('layouts.contact')

@section('title', 'Entre em contato com a gente')

@section('content')

<section class="contact">

    <div class="contact-container">

        <div class="cc">

            <p>Entre em contato conosco: siscadastro@gmail.com</p>
            <p>Telefone: (XX) XXXX-XXXX (XX) </p>
            <p>Redes Sociais: @siscadastro</p>
            <p>Endereço: Centro, Orobó-PE</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.789751457185!2d-35.60752218400542!3d-7.747873568954556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7abeafde2a6bdf1%3A0xc608e39bf91f067f!2zT3JvYsOzLCBQRSwgNTU3NDUtMDAw!5e0!3m2!1spt-BR!2sbr!4v1734643076022!5m2!1spt-BR!2sbr" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>

    <div class="container">
        <h2>Entre em Contato</h2>
        <div class="chat-box" id="chatBox">
            <div class="message bot-message">Olá! Como posso ajudar?</div>
        </div>
        <input type="email" name="email" placeholder="Seu e-mail" id="userEmail">
        <input type="text" name="name" placeholder="Seu nome" id="userName">
        <input type="text" id="userInput" placeholder="Digite sua mensagem..." />
        <button onclick="sendMessage()">Enviar</button>
    </div>

</section>

@endsection