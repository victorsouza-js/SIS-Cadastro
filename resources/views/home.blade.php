@extends('layouts.app')

@section( 'title', 'SIS Cadastro' )

@section('content')

<nav>
    
    <h1>SIS Cadastro</h1>

    <ul>
        <li><a href="/login">Login</a></li>
        <li><a href="/contato">Contato</a></li>
        <li><a href="/sobre">Sobre</a></li>
        <li><a href="/ajuda">Ajuda</a></li>
    </ul>
    
</nav>

<section>
    <div class="home">
        <h1>Seja bem vindo ao SIS Cadastro</h1>
        <p>Faça seu cadastro agora mesmo</p>
        <a href="/register">Registrar</a>
    </div>

    <img src="{{asset('imgs/img-home.png')}}">
</section>


@endsection
