<?php
    require_once("./../../Configs/Connection/index.php");

    $sql = "SELECT * FROM products";
    $data = $conn->query($sql);
    $rows = $data->fetchAll();

    if($rows > 0){
        $products = array();
        $products['data'] = array();

        foreach($rows as $key => $product){
            extract($product);

            $product_item = array(
                "id" => $product["id"],
                "product_name" => $product["product_name"],
                "product_price" => $product["product_price"]
            );

            array_push($products["data"], $product_item);
        }

        echo json_encode($products);
    }
