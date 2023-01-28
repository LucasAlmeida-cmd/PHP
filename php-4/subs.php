<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(          //troca a palavra interia 
    ['poxa', 'caramba'],  // pode criar um array de palavras para serem trocadas
    ['p', 'c'], 
    $texto
    ).PHP_EOL;


echo strtr($texto, 'poxa', '***'). PHP_EOL; //troca as letras de poxa pelos ***, trocas as letras não a palavra interia


echo strtr($texto, ['poxa' => 'p', 'caramba' =>'c']). PHP_EOL;