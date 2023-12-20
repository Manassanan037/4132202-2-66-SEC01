<?php
require_once "condb.php";

$id = $_POST['id'];
$name = $_POST['name'];
$prov = $_POST['prov'];

try {
    $sql = "UPDATE tb_member 
    SET 'name' = '$name' ,id_province = '$prov'
    Where id_member = '$id' ";
    mysqli_query($conn, $sql);
    echo "Updated data new name is '$name' and prov'$prov' successfuly ";
} catch (Exception $e) {
    echo "Error";
}
