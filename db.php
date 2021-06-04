<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=internshipjapan", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOVE_EXCEPTION);
}

catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>