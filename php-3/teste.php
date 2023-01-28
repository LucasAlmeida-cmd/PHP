<?php

function somarIdade(array $conta, float $idadeASomar)
{
	if ($idadeASomar > 0){
        $conta['idade'] += $idadeASomar;
    }else{
        echo 'A idade não pode ser negativa.'. PHP_EOL;
    };
	return $conta;
};


$lista = [
	
	'123.456.789-10' => [
		'nome' => 'Lucas',
		'idade' => 20,
		'estadoCivil' => 'Solteiro'],
		
	'123.456.789-11' =>[
		'nome' => 'Milena',
		'idade' => 20,
		'estadoCivil' => 'Solteira']
];
	

$lista['123.456.789-10'] = somarIdade($lista['123.456.789-10'], 10);


foreach($lista as $cpf => $conta) {
    echo $cpf . " ". $conta['idade']. PHP_EOL;
};

			


