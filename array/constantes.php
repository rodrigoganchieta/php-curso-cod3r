<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Melancia', 'Banana');

echo FRUTAS[0];

const CARROS = ["Fiat" => "Toro", "Ford" => "Fiesta"];

echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Piracicaba', 'São Paulo'));

echo '<br>' . CIDADES[1];
