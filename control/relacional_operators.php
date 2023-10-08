<div class="titulo">Relational Operator</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p class='divisao'>Relational in If/Else</p><hr>";
$idade = 15;
if ($idade < 18) {
  echo "Minor = $idade years old<br>";
} elseif ($idade <= 65) {
  echo "Adult = $idade years old<br>";
} else {
  echo "Old age = $idade years old!";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p class="divisao">Values can be V or F - BE CAREFUL</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");