<?php


$notas = [
    'Vinicius' => 6,
    'João' => 8, 
    'Ana' => 10, 
    'Roberto' => 7, 
    'Maria' => 9, 
];


if (is_array($notas)){
   echo 'Sim';
};



var_dump(array_is_list($notas)) . PHP_EOL;

var_dump(isset($notas['Vinicius'])) . PHP_EOL;






echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, strict:true ));






echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas);


// array_key_exist = verifica se a chave existe 
// in_array = verifica se  o valor existe 
// isset = verifica se a chave existe e não é nulo 
// array_search = verifica quem tirou 10 