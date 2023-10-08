<div class="titulo">Ternary Operator</div>

<?php

$idade = 70;
$status;

if ($idade >= 18) {
  $status = 'To be of age ';
} else {
  $status = 'To be a minor ';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'To be of age' : 'To be a minor';
echo "$status<br>";

$status = $idade >= 18 ? $idade >= 65 ? 'Retiree' : 'To be of age' : 'To be a minor';