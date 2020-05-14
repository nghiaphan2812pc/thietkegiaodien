<?php
    include_once 'connect.php';
    $customerId = $_GET['customerId'];
    $sql = "DELETE FROM customers
			WHERE customerId = $customerId";
    mysqli_query($conn, $sql);
    header('location:all_customer.php');
?>
