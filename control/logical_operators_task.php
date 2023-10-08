<div class="titulo">Logical Operators Task</div>

<form action="#" method="post">
  <div>
    <label for="t1">Job 1 (Tuesday):</label>
    <select name="t1" id="t1">
      <option value="1">Executed</option>
      <option value="0">Not Executed</option>
    </select>
  </div>
  <div>
    <label for="t2">Job 2 (Thursday):</label>
    <select name="t2" id="t2">
      <option value="1">Executed</option>
      <option value="0">Not Executed</option>
    </select>
  </div>
  <button>To execute</button>
</form>

<style>
  button,
  select {
    font-size: 1.8rem;
  }
</style>

<?php

if (isset($_POST['t1']) && isset($_POST['t2'])) {
  $t1 = $_POST['t1'] === '1';
  $t2 = !!$_POST['t2'];
  $tv = '';
  $sorvete = false;

  if ($t1 && $t2) {
    $tv = '50"';
  } elseif ($t1 xor $t2) {
    $tv = '32"';
  }

  if ($t1 or $t2) {
    $sorvete = true;
  }

  if ($tv) {
    $resultado = "Let's buy a TV de $tv";
  } else {
    $resultado = "TV currently unavailable";
  }

  $saudavel = !$sorvete;

  if ($saudavel) {
    $resultado .= '<br>No ice cream this week! LOL';
  } else {
    $resultado .= '<br>Ice cream successfully released!';
  }

  echo "<p>$resultado</p>";
}