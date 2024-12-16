<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/sucesso', function () {
    return view('sucesso');
});

Route::get('/contato', function () {
    return view('pages/contato');
});


