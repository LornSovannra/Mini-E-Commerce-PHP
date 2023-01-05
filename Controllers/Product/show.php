<?php
    require_once("./../../Configs/Connection/index.php");

    $product_id = $_GET["product_id"];
    $sql = "SELECT * FROM products WHERE id='$product_id' LIMIT 1";
    $data = $conn->query($sql);
    $product = $data->fetch();

    echo json_encode($product);