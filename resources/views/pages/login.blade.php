@extends('layouts.logar')

@section ('title', 'Login')

@section('content')

<div id="container">
    <form id="loginForm">
        <img src="{{ asset('imgs/img.png') }}">
        <input type="text" id="name" placeholder="Usuario" required>
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        <input type="password" id="password" name="password" placeholder="Senha" required>
        <a href="">Esqueci minha senha</a>
        <a href="{{asset('/register')}}">Registrar-se</a>
        <button type="submit">Entrar</button>
    </form>
</div>

@endsection