<?php
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "oes_db";

    try {
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // var_dump($conn) ;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}

function mysqli_conn()
{
    $servername = "localhost";
    $username = "root";
    try {
        $mysqliConn = mysqli_connect($servername, $username, "", "oes_db");
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    return  $mysqliConn;
}
