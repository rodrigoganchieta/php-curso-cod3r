<div class="titulo">Switch</div>

<?php

$categoria = 'aaaaaa';
$preco = 0.0;
$carro = '';

if ($categoria === 'Lux') {
  $carro = 'Mercedes';
  $preco = 250000;
} else if ($categoria === 'SUV') {
  $carro = 'Renegade';
  $preco = 80000;
} elseif ($categoria === 'Sedan') {
  $carro = 'Etios';
  $preco = 55000;
} else {
  $carro = 'Mobi';
  $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Car: $carro<br>Price: $ $precoFormatado</p>";

$categoria = 'Lux';
switch (strtolower($categoria)) {
  case 'lux':
    $carro = 'Mercedes';
    $preco = 250000;
    break;
  case 'suv':
  case 'suv basic':
    $carro = 'Renegade';
    $preco = 80000;
    break;
  case 'sedan':
    $carro = 'Etios';
    $preco = 55000;
    break;
  default:
    $carro = 'Mobi';
    $preco = 33000;
    break;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Car: $carro<br>Price: $$precoFormatado</p>";