<div class="titulo">Desafio do Módulo</div>

<?php

require_once('usuario.php');

$usuario = new Usuario('Rodrigo Anchieta', 21, 'gust_mend');
echo $usuario->apresentar();
unset($usuario);