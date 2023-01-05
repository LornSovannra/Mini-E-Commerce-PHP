<?php
    require_once("./../../Configs/Connection/index.php");

    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];

    $sql = "INSERT INTO products(product_name, product_price) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    $rows = $stmt->execute([$product_name, $product_price]);

    if(empty($product_name)){
        echo json_encode("Product name is required");
    }else if(empty($product_price)){
        echo json_encode("Product price is required");
    }else{
        if($rows > 0)
            echo json_encode("Data Inserted.");
        else
            echo json_encode("Fail to insert data.");
    }
