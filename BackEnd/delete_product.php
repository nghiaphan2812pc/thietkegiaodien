<?php
    include_once 'connect.php';
    $productId = $_GET['productId'];
    $sql = "DELETE FROM products
			WHERE productId = $productId";
    mysqli_query($conn, $sql);
    header('location:all_product.php');
?>
