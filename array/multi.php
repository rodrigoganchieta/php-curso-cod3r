<div class="titulo">Multidimensional</div>

<?php
$dados = [
  [
    "name" => "Rodrigo",
    "age" => 32,
    "native_city" => "Piracicaba"
  ],
  [
    "name" => "Maria",
    "age" => 6,
    "native_city" => "São Paulo"
  ],
];

print_r($dados);
echo '<br>' . $dados[0]['age'];
echo '<br>' . $dados[1]['age'];

$dados[] = [
  "name" => "Mago",
  "age" => 5,
  "native_city" => "São Paulo"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['age'];

$dados[2]["neighbor"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);

var_dump($dados[1000]);