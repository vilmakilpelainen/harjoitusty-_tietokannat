<?php

require "dbconnection.php";
$dbcon = createDbConnection();


$sql = "INSERT INTO asiakas (asiakas_id, asnimi) VALUES ('8', 'Kilpeläinen')";

$dbcon->exec($sql);


$sql = "INSERT INTO tilaus (tilausnro, astunnus) VALUES ('33', 'KILPE')";

$dbcon->exec($sql);


if(!isset($_POST["8"]) || !isset($_POST["Kilpeläinen"])){
    echo "You did not define parameter!";
    exit;
}

echo "<h1>".$_POST["8"]."</h1>";
echo $_POST["Kilpeläinen"];

