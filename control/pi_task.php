<div class="titulo">PI Task</div>

<?php

echo pi();
$pi = 3.14;

if ($pi === pi()) {
  echo "<br>Equals!";
} else {
  echo "<br>Different!";
}

$piErrado = 2.8;

echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if ($pi - pi() <= 0.01) {
  echo '<br>Practically the same!';
}

if ($pi - $piErrado <= 0.01) {
  echo '<br>Practically the same!';
} else {
  echo '<br>Wrong value!!';
}