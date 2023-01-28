<?php

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João' , 
    2 => 'Ana' , 
    3 => 'Roberto'  , 
    4 => 'Maria'  , 
];


$novosAlunos= [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];


$alunos2022 =[...$alunos2021,'Lucas Almeida' ,...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022) . PHP_EOL;

array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022); 