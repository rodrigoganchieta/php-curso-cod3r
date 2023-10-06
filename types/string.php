<div class="titulo">String Type</div>

<?php

echo 'I am a string';
echo '<br>';
var_dump("Me too");
echo '<br>';

// concatenation
echo ("We too" . ' us' . '<br>');
echo ("Number is " . 123);
echo '<br>', "I also accept", " commas";

echo '<br>';
echo "'Test' " . '"Test" ' . '\'Test\' ' . "\"Test\" " . "\\";

print("<br>There is also the print function");
print "<br>There is also the print function";

// Some functions
echo '<br>' . strtoupper('maximized');
echo '<br>' . strtolower('MINIMIZED');
echo '<br>' . ucfirst('Just the first letter');
echo '<br>' . ucwords('All words');
echo '<br>' . strlen('How many letters?');
echo '<br>' . mb_strlen("Me too", "utf-8");
echo '<br>' . substr('Just a part', 7, 6); // parte
echo '<br>' . str_replace('that', 'that one', 'To replace that that');