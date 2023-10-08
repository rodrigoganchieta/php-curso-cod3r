<div class="titulo">Switch Task</div>

<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversao" id="conversao">
    <option value="km-milha">Km > Mile</option>
    <option value="milha-km">Mile > Km</option>
    <option value="metro-km">Meters > Km</option>
    <option value="km-metro">Km > Meters</option>
    <option value="cel-fah">Celsius > Fahrenheit</option>
    <option value="fah-cel">Fahrenheit > Celsius</option>
  </select>
  <button>Calculate</button>
</form>

<style>
  form>* {
    font-size: 1.8rem;
  }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
  case 'km-milha':
    $distancia = $param * FATOR_KM_MILHA;
    $mensagem = "$param Km(s) = $distancia Mile(s)";
    break;
  case 'milha-km':
    $distancia = $param / FATOR_KM_MILHA;
    $mensagem = "$param Mile(s) = $distancia Km(s)";
    break;
  case 'metro-km':
    $distancia = $param / FATOR_METRO_KM;
    $mensagem = "$param Meters(s) = $distancia Km(s)";
    break;
  case 'km-metro':
    $distancia = $param * FATOR_METRO_KM;
    $mensagem = "$param Km(s) = $distancia Meters(s)";
    break;
  case 'cel-fah':
    $conversao = $param * FATOR_CEL_FAH + 32;
    $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
    break;
  case 'fah-cel':
    $conversao = ($param - 32) / FATOR_CEL_FAH;
    $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
    break;
  default:
    $mensagem = "No value calculated!";
}

echo "<p>$mensagem</p>";