<?php
    include_once 'connect.php';
    $discountId = $_GET['discountId'];
    $sql = "DELETE FROM `discount`
    WHERE `discount`.`discountId` = '$discountId'";
    mysqli_query($conn, $sql);
    header('location:all_discount.php');
?>
