<?php
$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

$frase = "hi all, I said hello";

echo str_replace(['hello', 'hi'], ['x', 'y'], $frase). PHP_EOL;