<?php

$x = 40;
$y = 70;

function accessGlobal()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

accessGlobal();
echo $y;

?>