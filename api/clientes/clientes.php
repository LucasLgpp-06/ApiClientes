<?php

// var_dump("teste");

if ($api = 'clientes') {

    if ($method == "GET") {
        include_once "get.php";       
    }

    if ($method == "POST") {
        include_once "post.php";       
    }
    /**
     * Php não trabalha com o método PUT nem DELETE, precisamos 
     * dar um jogo de cintura pra fazer esses métodos 
     */
    if ($method == "POST" && $_POST['_method'] == "PUT") {
        include_once "put.php";       
    }
    if ($method == "POST" && $_POST['_method'] == "DELETE") {
        include_once "delete.php";       
    }
}




