<?php
$servername = "localhost";
$dbname = "snack_trax";
$username = "root";
$password = "@L3sley2018!";

try {
    $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>


