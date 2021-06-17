<?php 
if(!isset($_GET['company_id']) || empty($_GET['company_id'])) {
    header('location: index.php?page=admin');
}

    $id = intval($_GET['company_id']); // id equals number
    if($id == 0) {
        header('location: index.php?page=admin');
    }

    $sql = "DELETE FROM company WHERE company_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    header('location: index.php?page=admin');
