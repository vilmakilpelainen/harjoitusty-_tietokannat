<?php

require "dbconnection.php";
$dbcon = createDbConnection();
$asiakas = $_GET["asnimi"];


$sql = "SELECT asnimi
FROM asiakas
WHERE postitmp = Oulu AND asnimi NOT LIKE %uk%";

$statement = $dbcon->prepare($sql);
$statement->execute(array($asiakas));
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$asiakas = array();

$json = json_encode($asiakas);

header('Content-type: application/json');

echo $json;