<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class = "container-fluid">
    <div class = "row">
        <div class="col-sm-6">
                <h3> Insert a new movie </h3>
            <form class="form" method = "post" action="<?php echo "operation.php"; ?>">
                <div class="mb-3">
                    <label for = "title" class = "form-label"> Movie Title </label>
                    <input type = "text" class = "form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type = "text" class = "form-control" id="genre" name="genre">
                </div>

                <div class="mb-3">
                    <label for="rdate" class="form-label">Release Date</label>
                    <input type = "date" class = "form-control" id="rdate" name="rdate">
                </div>

                <div class="mb-3">
                    <label for="rtime" class="form-label">Runtime</label>
                    <input type = "number" class = "form-control" id="rtime" name="rtime">
                </div>

                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type = "text" class = "form-control" id="company" name="company">
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type = "text" class = "form-control" id="country" name="country">
                </div>
                
                <button type ="submit" class = "btn btn-primary" name="insert_movie"> Insert Movie </button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>


