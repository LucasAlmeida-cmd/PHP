<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Paulo', 'Bairro qualquer', 'Minha rua', '111');
$outroEndereco = new Endereco('São Paulo','Bairro qualquer', 'Minha rua', '1121');


echo $umEndereco->bairro . PHP_EOL;




exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco;
