@extends('layouts.cad')

@section('title' , 'Cadastro do Usuário')

@section('content')


<div class="register">


   <img src="{{asset('imgs/img-register.png')}}">


   <div class="cad">
      <form id="registerForm">
         <input type="text" name="name" id="name" placeholder="Usuário" required>
         <input type="email" name="email" id="email" placeholder="E-mail" required>
         <input type="password" name="password" id="password" placeholder="Senha" required>
         <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Senha" required>
         <button type="submit">Registrar</button>
      </form>
   </div>

</div>

<div id="errorMessages" style="color: red; margin-left: 3vh; margin-top: 3vh; font-size: 20px;"></div>


@endsection