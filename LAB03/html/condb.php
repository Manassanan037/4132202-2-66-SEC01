<?php

$host = "db";  //db คือชื่อเซอร์วิช จากไฟล์ docker compose บรรทัด 11
$username = "root";
$password = "1234";
$db = "internet";

try{
    $conn = mysqli_connect($host,$username,$password,$db);
mysqli_query($conn,"SET NAMES utf8"); //ขอเชื่อมต่อฐานข้อมูล ด้วยภาษา utf8 ถ้าไม่เซต ภาษาไทยจะเป็นต่างดาว
}
catch(Exception $e){
    $error = $e->getMessage();
    error_log($error);
    echo $error;
} //try catch เป็นตัวช่วยแสดง error บอกว่า error ตรงไหน

?>