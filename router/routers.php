<?php

//SINTAXE DE ROTAS
// '/Nome' => 'NomeController'@'action'

$routes = [
    '/' => 'HomeController@index',

    //Rotas
    '/home' => 'HomeController@index',//-> Vizualizar página
    '/store' => 'HomeController@store',//-> Armazenar registro
    '/editar/{id}' => 'HomeController@edit',//-> Editar registro
    '/atualizar/{id}' => 'HomeController@update',//-> Atualizar registro
    '/deletar/{id}' => 'HomeController@delete',//-> Deletar registro

];