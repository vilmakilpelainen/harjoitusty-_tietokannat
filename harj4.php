<?php

require "dbconnection.php";
$dbcon = createDbConnection();

try{
    $dbcon->beginTransaction();

    $dbcon->exec("INSERT INTO HENK VALUES ('1234', 'Kilpeläinen', ' OULU', '2002'");
    $dbcon->exec("UPDATE tuote SET tuotenimi = 'solmio' WHERE tuotenro = 1 ");


    $dbcon->commit();
} catch(Exception $e){
    $dbcon->rollBack();
    echo "Failed:".$e->getMessage();
}