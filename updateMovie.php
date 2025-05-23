<?php

require_once "dbconnect.php";

$title = "Quantum of Solacet 2";
$runtime = 150;
$genre = "Fantasy Adventure";
$company = "Emi Productions";
$id = 13;

$sql = "update movies set title=?, runtime=?, genre=?, company=? where id=?";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute([$title, $runtime, $genre, $company, $id]);

if($status)
{
    echo "one movie record with id $id has been updated!";
}

?>