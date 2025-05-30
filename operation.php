<?php

require_once "dbconnect.php";
if(!isset($_SESSION))
{
    session_start();
}

if (isset($_POST['insert_movie']))
{
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rdate = $_POST['rdate'];
    $rtime = $_POST['rtime'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $fileimage = $_FILES['image'];

    //echo "$title<br> $genre<br> $rdate<br> $rtime<br> $company<br> $country";

    $filename = $_FILES['image']['name'];
    $filepath = "images/".$filename;
    if(!is_uploaded_file($_FILES['image']['tmp_name']))
    {
        echo "file is not uploaded";
    }
    else{
        move_uploaded_file($_FILES['image']['tmp_name'], $filepath);
        try{
        $sql = "insert into movies values (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $status = $stmt->execute([null, $title, $rdate, $rtime, $genre, $company, $country, $filepath ]);
        if ($status)
        {
            // echo "movie record has been inserted successfully!";
            $_SESSION['insertSuccess'] = "One movie record has been inserted successfully";
            header("Location: viewmovie.php");
        }

    }catch(PDOException $e){
        echo $e->getMessage();

    }


    }

}

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['mid']))
{
    echo "in edit";
}

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['did']))
{
    try{
        $id = $_GET['did'];
        $sql = "delete from movies where id=?";
        $stmt = $pdo->prepare($sql);
        $status  = $stmt->execute([$id]);

        if($status)
        {
            $_SESSION['deleteSuccess'] = "movie record with $id has been deleted!";
            header("Location: viewmovie.php");
        }
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
}

?>