<div class="titulo">Variables</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_Dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Now I'm a string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valid';
$var2 = 'valid';
$VAR3 = 'valid';
$_var_4 = 'valid';
$vâr5 = 'valid'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);