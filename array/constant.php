<div class="titulo">Constant Arrays</div>

<?php
const FRUTS = array('Watermelon', 'Banana');

echo FRUTS[0];

const CARS = ["Fiat" => "Toro", "Ford" => "Fiesta"];

echo '<br>' . CARS["Fiat"];

define('CITIES', array('Piracicaba', 'São Paulo'));

echo '<br>' . CITIES[1];