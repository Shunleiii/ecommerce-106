<?php
function writeYourName()
    {
        echo "Hello, Austin";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for ($i = 0; $i < 10; $i++)
    {
        writeYourName();
        echo "<br>";
    }

    ?>

    <ul> 
        <?php
         for ($i = 0; $i < 10; $i++)
         echo "<li>".writeYourName()."</li>";

        ?>
    </ul>
    
</body>
</html>