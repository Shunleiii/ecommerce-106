<?php
require_once "dbconnect.php";

$title = "Pirates of the Caribbean: Dead Man's Chest";
$release_date = "2006-06-20";
$runtime = 151;
$genre = "Adventure";
$company = "Walt Disney Pictures";
$country = "Jamaica";

$sql = "insert into movies (title, release_date, runtime, genre, company, country) 
        values (?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute([$title, $release_date, $runtime, $genre, $company, $country]);

if($status)
{
    echo "one movie record has been inserted";
}

?>