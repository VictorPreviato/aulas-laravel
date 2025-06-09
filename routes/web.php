<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós da Dotme';
});
Route::get('/contato', function(){
    return 'Essa é a página de contatos da Dotme';
});
Route::get('/apoie', function(){
    return 'Essa é a página apoie o projeto da Dotme';
});
Route::get('/faq', function(){
    return 'Essa é a página de questões frequentemente feitas para a Dotme';
});
Route::get('/redessocias', function(){
    return 'Essa é a página de redes sociais da Dotme';
});
