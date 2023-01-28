<?php



$nome = 'Vinícius Dias';
$email = ' vinícius@gmail.com.br ';
$senha = '123';

if (mb_strlen($senha) < 8){
    echo 'Senha Segura' .PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email,  0, $posicaoDoArroba);




echo mb_strtolower($usuario) .PHP_EOL;
echo mb_strtoupper($usuario) .PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;


list($nome, $sobrenome) = explode(' ',$nome);

echo 'Nome:' . $nome . PHP_EOL;
echo 'Sobrenome:' . $sobrenome . PHP_EOL;

echo trim($email). PHP_EOL;