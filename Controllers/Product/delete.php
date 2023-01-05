<?php
    require_once("./../../Configs/Connection/index.php");

    $product_id = $_POST["product_id"];

    $sql = "DELETE FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$product_id]);

    if($stmt->rowCount() > 0)
        echo json_encode("Data Deleted.");
    else
        echo json_encode("Fail to delete data.");