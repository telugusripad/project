<?php
$servername = "localhost";
$username = "root";
$password = "sachin123";

    $conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>