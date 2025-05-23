<?php
$x = 50;

function myTest()
{
    global $x;
    echo $x;
    $name = "Yang"; // assigning local variable
    echo "<br>".$name;
}
myTest();


echo "<br> global variable ".$x."<br>";
//echo $name;

?>