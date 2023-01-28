<?php

require_once 'autoload.php';


$autenticador = new Autenticador();
$umDiretor = new Diretor('João da Silva', 
    new CPF('123.444.555-11'),  
    10000
);

$autenticador->tentaLogin($umDiretor, '1234');