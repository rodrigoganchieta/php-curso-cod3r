<div class="titulo">Sessão</div>

<?php

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
  $_SESSION['nome'] = 'Ivete';
}

if(!$_SESSION['email']) {
  $_SESSION['email'] = 'ivete@gmail.com';
}

print_r($_SESSION);

?>

<p>
  <a href='/sessao/basico_sessao_alterar.php'>Alterar Sessão</a>
</p>
