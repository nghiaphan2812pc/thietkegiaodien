<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = new mysqli($servername, $username, $password, 'thietkegiaodien');
if (!$conn) {
    die('Kết nối thất bại: '.mysqlli_connect_error());
}
mysqli_set_charset($conn, 'UTF8');
?>
