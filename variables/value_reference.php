<div class="titulo">Value vs Reference</div>

<?php

$variavel = 'initial value';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'new value';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'same reference';

echo "<br>$variavel $variavelReferencia";