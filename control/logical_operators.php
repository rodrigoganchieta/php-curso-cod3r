<div class="titulo">Logical Operators</div>

<?php
echo "<p class='divisao'>Logical Denial</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Truth table 'AND'</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Truth table 'OR'</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Truth table 'XOR'</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Example</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "You can retire -> $podeSeAposentar.<br>";

if ($idade >= 60 && $sexo === 'F') {
  echo "You can retire -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
  echo "You can retire -> $sexo";
} else {
  echo "You'll have to work a little harder...";
}