<div class="titulo">Multidimensionais</div>

<?php
$dados = [
  [
    "nome" => "Rodrigo",
    "idade" => 32,
    "naturalidade" => "Piracicaba"
  ],
  [
    "nome" => "Maria",
    "idade" => 6,
    "naturalidade" => "São Paulo"
  ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
  "nome" => "Mago",
  "idade" => 5,
  "naturalidade" => "São Paulo"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);

var_dump($dados[1000]);
