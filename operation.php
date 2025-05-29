<?php

require_once "dbconnect.php";

if (isset($_POST['insert_movie']))
{
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rdate = $_POST['rdate'];
    $rtime = $_POST['rtime'];
    $company = $_POST['company'];
    $country = $_POST['country'];

    //echo "$title<br> $genre<br> $rdate<br> $rtime<br> $company<br> $country";
    try{
        $sql = "insert into movies values (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $status = $stmt->execute([null, $title, $rdate, $rtime, $genre, $company, $country ]);
        if ($status)
        {
            echo "movie record has been inserted successfully!"; 
        }

    }catch(PDOException $e){
        echo $e->getMessage();

    }

}

?>