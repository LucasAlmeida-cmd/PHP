<?php

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<FINAL
    Óla, $nome! 
    
    bla bla

    bla bla bla
    FINAL;   

    echo $conteudoEmail;
};

geraEmail('Lucas Almeida');