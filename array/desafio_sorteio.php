<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Maria", "Eduarda", "Duda Maria", "Duda"];
$index = array_rand($nomes);
echo "<div center><h1>{$nomes[$index]}</h1></div>"

?>

<style>
  [center] {
    display: flex;
    justify-content: center;
  }
</style>