<?php

$csv = ',.Vinicius Dias,24,.';

echo trim($csv, '.,') . PHP_EOL; //aparando dos dois lados
echo ltrim($csv, '.,') . PHP_EOL; //aparando do lado esquerto
echo rtrim($csv, '.,') . PHP_EOL; //aparando do lado direito

// trim() só apara dos lados não apara nada do meio da string