<div class="titulo">Attributions</div>

<?php
$title = 'Attributions';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
--$numero;
echo '<br>' . $numero;
$numero++;
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5;
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 2;
echo '<br>' . $numero;
$numero %= 6;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;
$numero .= 4;
echo '<br>' . $numero;

$texto = 'This is a text';
echo '<br>' . $texto;
$texto = $texto . ' any';
echo '<br>' . $texto;
$texto .= ' in truth!';
echo '<br>' . $texto;

echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'default value';
echo '<br>' . $valor;