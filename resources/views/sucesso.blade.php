@extends('layouts.login-finalizado')

@section( 'title','Login Finalizado!')

@section('content')

<div class="container">

    <h1>Login Finalizado</h1>
    <p>Seu login foi realizado com sucesso!</p>

    <div class="sucesso">

        <lottie-player
            src="{{ asset('animations/animation-sucesso.json') }}"
            background="transparent"
            speed="0.7"
            loop
            autoplay>
        </lottie-player>
    </div>

    <a href="/">Voltar a Página Inicial</a>

</div>






@endsection