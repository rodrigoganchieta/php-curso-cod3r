<div class="titulo">Include Função</div>

<?php

echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
  include('include_arquivo.php');

  echo $variavel . '<br>';
  echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';

carregarArquivo();

echo "Variável = '{$variavel}'.";

echo '<br>' . soma(3, 8);
