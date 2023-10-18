<div class="titulo">Map</div>

<?php
$dados = array(
  "age" => 32,
  "color" => "Blue",
  "weight" => 78.5
);

print_r($dados);

var_dump($dados[0]);

echo '<br>' . $dados["age"];
echo '<br>' . $dados["color"];
echo '<br>' . $dados["weight"];
echo '<br>';

var_dump($dados["other_information"]);

$lista = array(
  "a",
  "five" => "b",
  "c",
  8 => "d",
  "e",
  6 => "f",
  "g",
  8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';

echo '<br>';
print_r($lista);