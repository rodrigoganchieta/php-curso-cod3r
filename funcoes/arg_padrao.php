<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
  return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Sr. ', 'Francisco');

function anotarPedido($comida, $bebida = 'Água') {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza de 4 queijos', 'Refrigerante coca 2 litros');

function anotarPedido2($bebida = 'Água', $comida) {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido2('Refrigerante Guarana Antartica 2 litros', 'Pizza doce de chocolate');

