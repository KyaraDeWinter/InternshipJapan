<?php
$sql = "SELECT * FROM country";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
?>