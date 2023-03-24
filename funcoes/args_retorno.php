<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)! Em que posso ajudar?';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo(a), {$nome}! Em que posso ajudar?";
}

echo '<br>', obterMensagemComNome('Francisco');
echo '<br>', obterMensagemComNome('Bruno');

function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor) {
  $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
  $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;
