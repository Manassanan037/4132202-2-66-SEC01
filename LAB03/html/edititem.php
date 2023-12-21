<?php
require_once "condb.php";

$id = $_POST['id_2'];
$name = $_POST['name_2'];
$prov = $_POST['prov_2'];
$sql = "UPDATE tb_member SET 'name' = '$name',id_province = '$prov' WHERE id_member = '$id' ";

try {
    mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "Error";
}

?>