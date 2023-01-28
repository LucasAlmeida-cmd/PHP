<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8, 
    'Ana' => 10, 
    'Roberto' => 7, 
    'Maria' => 9, 
];


$notas2= [
    'João' => 8,
    'Ana' => 9, 
    'Roberto' => 7, 
];


$alunosFaltantes = array_diff_key($notas, $notas2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));