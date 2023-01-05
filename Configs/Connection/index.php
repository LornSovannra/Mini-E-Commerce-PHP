<?php
    define("DNS", "mysql:host=localhost; dbname=e_commerce_db;");
    define("USER_NAME", "root");
    define("PASSWORD", "");
    
    try {
        $conn = new PDO(DNS, USER_NAME, PASSWORD);
        // echo "connected to db";
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
?>