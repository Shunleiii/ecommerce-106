<?php
require_once "dbconnect.php";

if(!isset($_SESSION))
{
    session_start();
}

try{
    $sql = "select * from movies order by title limit 20";
    $stmt = $pdo->query($sql);
    $stmt->execute();
    $movie = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
}catch(PDOException $e)
{
    echo $e->getMessage();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-outline-primary rounded" href="./insertUI.php"> Add New </a>

        </div>
    </div>

    <div class="row">
        
        <div class="col-md-12">
            <?php
            if(isset($_SESSION['insertSuccess']))
            { ?>

            <p class="alert alert-success">
                <?php echo $_SESSION['insertSuccess'];
                unset ($_SESSION['insertSuccess']); ?>
            </p>
    
            <?php }

            else if(isset($_SESSION['deleteSuccess']))
            { ?>

            <p class="alert alert-danger">
                <?php echo $_SESSION['deleteSuccess'];
                unset ($_SESSION['deleteSuccess']);  ?>
            </p>
        
            <?php }
        
            ?>

            <table class = "table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>Runtime</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Image</th>

                        <th>action</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($movie as $movies) { ?>
                    <tr>
                        <td> <?php echo $movies['title'] ?> </td>
                        <td> <?php echo $movies['genre'] ?> </td>
                        <td> <?php echo $movies['release_date'] ?> </td>
                        <td> <?php echo $movies['runtime'] ?> </td>
                        <td> <?php echo $movies['company'] ?> </td>
                        <td> <?php echo $movies['country'] ?> </td>
                        <td> <img style="width: 60px; height: 80px;" src="<?php echo $movies['image_path']; ?>"> </td>

                        <td><a class="btn btn-primary" href="./operation.php?mid=<?php echo $movies['id']; ?>"> Edit </a></td>
                        <td><a class="btn btn-danger" href="./operation.php?did=<?php echo $movies['id']; ?>"> Delete </a></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>




        </div>
    </div>

</div>

</body>
</html>