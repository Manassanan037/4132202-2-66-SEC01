<?php
require_once "condb.php";

$id = $_POST['id_member'];
$name = $_POST['name'];
$prov = $_POST['id_province'];

try {
    $sql = "INSERT INTO tb_member VALUES('$id','$name','$prov')";
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "Error";
}
