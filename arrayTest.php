<?php

$str = "A";
$str[2] = "s";
$str[1] = "u";
$str = $str."t"; //concatenate str var and string literal
print $str. "<br>";

$name = "John";
$$name = "Registered user";
print $John. "<br>";

$name = 'Rob';
echo $name. "<br>";
$a = "Hello";
$b = $a."World!";
echo $b;

$a = 4;
$b = 2;
$c = $a + $b + ($a/$b);
print $c;

?>