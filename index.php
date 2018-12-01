<?php
    // Requisita o uso do autoloader
    require 'lib/autoloader.php';
    // Coloca o encodamento interno das paginas para UTF-8
    mb_internal_encoding("UTF-8");
    // Definindo a timezone do PHP
    date_default_timezone_set('America/Sao_Paulo');
    // Conexao com o banco de dados
    //    try {
    //        Db::connect('host', 'usuario', 'senha', 'base');
    //    } catch (Exception $e) {
    //        // Mensagem de erro ao se conectar com o Banco
    //        die("Erro ao conectar ao banco de dados!");
    //    }
    // Criar um objeto instanciado da classe RouterController, e passar via superglobal $_SERVER
    // um array da url requisitada via REQUEST_URI para que o Router processe essa informação.
    $router = new RouterController();
    $router->process(array($_SERVER['REQUEST_URI']));
    $router->renderView();
?>
