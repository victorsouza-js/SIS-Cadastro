@extends('layouts.sob')

@section('title', 'Sobre')

@section('content')


<div class="sobre-page">

    <lottie-player
        src="{{ asset('animations/animation-sobre.json') }}"
        background="transparent"
        speed="0.7"
        style="width: 600px; height: 600px; margin-left: 65vh;"
        loop
        autoplay>
    </lottie-player>

</div>


<div class="container">

<h1>Quem Somos</h1>
<p>A SIS Cadastro se trata de uma aplicação web para cadastro de usuarios em portes públicos(psf,escola, etc).</p>

</div>

<div class="web-sobre">
    
    <img src="https://cvcrm.com.br/wp-content/uploads/2023/03/o-que-e-pre-cadastro-01.jpg">
    
</div>



@endsection