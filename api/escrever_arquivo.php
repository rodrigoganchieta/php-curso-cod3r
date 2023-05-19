<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('api/teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");

$str = "Segunda linha\n";

fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'w');
fwrite($arquivo, "Novo conteudo!");
echo "Novo conteudo<br>";
fclose($arquivo);

$arquivo = fopen('api/teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento!");
echo "Adicionados em um segundo momento!";
fclose($arquivo);

ini_set('display_errors', 0);
$arquivo = fopen('api/teste.txt', 'x');
