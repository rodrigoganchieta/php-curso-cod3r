<div class="titulo">Variables Variables</div>

<?php
$a = 'valueA';
$$a = 'valueAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'Hello';
$opa = 'vish';
$vish = 'jeez!!!!';
echo "$epa {$$epa} {$$$epa}";