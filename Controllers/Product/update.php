<?php
    require_once("./../../Configs/Connection/index.php");

    $product_id = $_GET["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];

    $sql = "UPDATE products SET product_name=?, product_price=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $rows = $stmt->execute([$product_name, $product_price, $product_id]);

    if(empty($product_name)){
        echo json_encode("Product name is required");
    }else if(empty($product_price)){
        echo json_encode("Product price is required");
    }else{
        if($rows > 0)
            echo json_encode("Data Updated.");
        else
            echo json_encode("Fail to update data.");
    }
