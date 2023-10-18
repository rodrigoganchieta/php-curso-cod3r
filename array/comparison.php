<div class="titulo">Arrays Comparison</div>

<?php

$arr1 = ['name' => 'Maria', 'age' => 20];
$arr2 = ['name' => 'Maria', 'age' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['age' => 20, 'name' => 'Maria'];

echo '<br>';

var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';

$arr4 = ['age' => '6', 'name' => 'Maria Eduarda'];

var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);