<?php

function staticTesting()
{
    static $x = 0;
    echo $x."<br>";
    $x++;
}

staticTesting();
staticTesting();
staticTesting();
staticTesting();
staticTesting();
staticTesting();
staticTesting();

?>